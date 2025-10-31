<?php
include('config.php');
require_once 'includes/formtokenCls.php';
require_once 'includes/general-func.php'; // in case you need functions other than PHPMailer
require_once 'send-mail.php'; // use send_mail()

$tm = time();
$data = array();
$data['fullname'] = trim($_POST['fullname']);
$data['phone']    = trim($_POST['phone']);
$data['email']    = trim($_POST['email']);

$fullname = $data['fullname'];
$email    = $data['email'];

if ($fullname == '' || $email == '' || $data['phone'] == '') {
    $_SESSION['frmerrmsg'] = 'Those marked with <strong class="text-danger">*</strong> are required please.';
    header("location:thanks-callback.php");
    exit();
}

if (formtoken::validateToken($_POST)) {
    $data['datetime'] = date('Y-m-d H:i:s', $tm);
    $datadatetime     = date('d-m-Y H:i:s', strtotime($data['datetime']));
    $ipaddress        = $_SERVER['REMOTE_ADDR'] ?? '';
    $useragent        = $_SERVER['HTTP_USER_AGENT'] ?? '';
    $userreferer      = $_SERVER['HTTP_REFERER'] ?? '';

    // CSV log
    $fp = fopen("mailcopy.csv", "a+");
    if ($fp) {
        fputcsv($fp, [
            "callback",
            $fullname,
            $data['phone'],
            $email,
            $_POST['refererpage'] ?? '',
            $visitorsourcedetails['entry_page'] ?? '',
            $visitorsourcedetails['referrer'] ?? '',
            $visitorsourcedetails['medium'] ?? '',
            $visitorsourcedetails['source'] ?? '',
            $visitorsourcedetails['keyword'] ?? ''
        ]);
        fclose($fp);
    }

    // Email to admin
    $subject = "Callback Request by {$fullname}";
    $message = <<<HTML
<b>Callback request received:</b><br><br>
Name: {$fullname}<br>
Phone: {$data['phone']}<br>
Email: {$email}<br>
Date/Time: {$datadatetime}<br>
IP: {$ipaddress}<br>
User-Agent: {$useragent}<br>
Referrer: {$userreferer}<br>
HTML;

    $admin_emails = explode(',', CONST_CALLBACK_ADMIN_EMAIL_TO);
    foreach ($admin_emails as $to) {
        send_mail($to, $subject, $message, CONST_MAIL_SENDERS_EMAIL, CONST_MAIL_SENDERS_NAME);
    }

    // Email to user
    $user_subject = "RanceLab - Your contact request";
    $user_message = <<<HTML
Dear {$fullname},<br><br>
Thank you for contacting RanceLab. Our representative will get back to you shortly.<br><br>
Regards,<br>
Team RanceLab
HTML;

    send_mail($email, $user_subject, $user_message, CONST_MAIL_SENDERS_EMAIL, CONST_MAIL_SENDERS_NAME);

    $_SESSION['fullname'] = $fullname;
    header("location:thanks-callback.php");
    exit();
} else {
    die("The form is not valid or has expired.");
}

