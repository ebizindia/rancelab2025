<?php
include('config.php');
require_once 'includes/formtokenCls.php';
require_once 'includes/general-func.php';
require_once 'send-mail.php'; // uses send_mail()

session_start(); // if not already started

$tm = time();
$data = [];
$data['fullname'] = trim($_POST['fullname']);
$data['email']    = trim($_POST['email']);
$data['phone']    = trim($_POST['mobile']);
$data['company']  = trim($_POST['company']);
$data['address']  = trim($_POST['address']);
$data['city']     = trim($_POST['city']);
$data['business'] = trim($_POST['business']);

$fullname = $data['fullname'];
$email    = $data['email'];

if ($fullname == '' || $email == '' || $data['phone'] == '') {
    $_SESSION['frmerrmsg'] = 'Required fields are missing.';
    header("Location: thanks-dealership-request.php");
    exit();
}

if (formtoken::validateToken($_POST)) {
    $datetime = date('Y-m-d H:i:s', $tm);
    $datadatetime = date('d-m-Y H:i:s', $tm);
    $ipaddress = $_SERVER['REMOTE_ADDR'] ?? '';
    $useragent = $_SERVER['HTTP_USER_AGENT'] ?? '';
    $userreferer = $_SERVER['HTTP_REFERER'] ?? '';

    // Log to CSV (optional)
    $fp = fopen("dealership_log.csv", "a+");
    if ($fp) {
        fputcsv($fp, [
            "dealership",
            $fullname,
            $data['company'],
            $data['phone'],
            $email,
            $data['city'],
            $data['address'],
            $data['business'],
            $datadatetime,
            $ipaddress
        ]);
        fclose($fp);
    }

    // Send email to admin
    $subject = "Dealership Request from {$fullname}";
    $message = <<<HTML
<b>New Dealership Request Received</b><br><br>
Name: {$fullname}<br>
Company: {$data['company']}<br>
Address: {$data['address']}<br>
City: {$data['city']}<br>
Phone: {$data['phone']}<br>
Email: {$email}<br>
Business Description: {$data['business']}<br>
Submitted at: {$datadatetime}<br>
IP: {$ipaddress}<br>
User-Agent: {$useragent}<br>
Referrer: {$userreferer}<br>
HTML;

    $admin_emails = explode(',', CONST_CALLBACK_ADMIN_EMAIL_TO);
    foreach ($admin_emails as $to) {
        send_mail($to, $subject, $message, CONST_MAIL_SENDERS_EMAIL, CONST_MAIL_SENDERS_NAME);
    }

    // Send confirmation to user
    $user_subject = "RanceLab Dealership Inquiry Received";
    $user_message = <<<HTML
Dear {$fullname},<br><br>
Thank you for your interest in becoming a dealer of RanceLab products.<br>
Our team will contact you shortly.<br><br>
Regards,<br>
Team RanceLab
HTML;

    send_mail($email, $user_subject, $user_message, CONST_MAIL_SENDERS_EMAIL, CONST_MAIL_SENDERS_NAME);

    $_SESSION['fullname'] = $fullname;
    header("Location: thanks-dealership-request.php");
    exit();
} else {
    die("The form is not valid or has expired.");
}
?>

