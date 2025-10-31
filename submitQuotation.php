<?php
include('config.php');
require_once 'includes/formtokenCls.php';
require_once 'includes/general-func.php';
require_once 'send-mail.php'; // <-- New msmtp mailer

$tm = time();
$data = array();
$data['fullname']     = trim($_POST['fullname']);
$fullname             = $data['fullname'];
$data['phone']        = trim($_POST['phone']);
$data['email']        = trim($_POST['email']);
$email                = $data['email'];
$data['requirements'] = trim($_POST['requirements']);

if ($data['fullname'] == '' || $data['email'] == '' || $data['phone'] == '' || $data['requirements'] == '') {
    $_SESSION['frmerrmsg'] = 'Those marked with <strong class="text-danger">*</strong> are required please.';
    header("location:contact-us.php");
    exit();
}

if (formtoken::validateToken($_POST)) {
    $data['datetime'] = date('Y-m-d H:i:s', $tm);
    $datadatetime     = date('d-m-Y H:i:s', strtotime($data['datetime']));
    $ipaddress        = $_SERVER['REMOTE_ADDR'];
    $useragent        = $_SERVER['HTTP_USER_AGENT'];
    $userreferer      = $_SERVER['HTTP_REFERER'];

    // Logging to CSV
    $fp = fopen("mailcopy.csv", "a+");
    if ($fp) {
        fputcsv($fp, array("quotation", $fullname, $data['phone'], $email, $data['requirements'], $_POST['refererpage'] ?? '', '', '', '', '', ''));
        fclose($fp);
    }

    // Prepare message content
    $subject_admin = "RanceLab - Contact request by " . $fullname;
    $body_admin = "New contact request submitted:\n\n"
        . "Name: $fullname\n"
        . "Email: $email\n"
        . "Phone: " . $data['phone'] . "\n"
        . "Requirements:\n" . $data['requirements'] . "\n\n"
        . "Date/Time: $datadatetime\n"
        . "IP: $ipaddress\n"
        . "User Agent: $useragent\n"
        . "Referer: $userreferer\n";

    $admin_emails = explode(',', CONST_CONTACT_ADMIN_EMAIL_TO);
    foreach ($admin_emails as $admin_email) {
        send_mail(trim($admin_email), $subject_admin, $body_admin, 'noreply@rancelab.com', $email);
    }

    // Mail to user
    $subject_user = "RanceLab - Your contact request";
    $body_user = "Dear $fullname,\n\n"
        . "Thank you for contacting RanceLab. We’ve received your request and will get back to you shortly.\n\n"
        . "Best regards,\n"
        . "Team RanceLab\n\n"
        . "------------------\n"
        . "This is a confirmation of your submission:\n"
        . "Requirements: " . $data['requirements'] . "\n";

    send_mail($email, $subject_user, $body_user, 'sales@rancelab.com');

    $_SESSION['fullname'] = $fullname;
    header("location:thanks-contact.php");
    exit();
} else {
    die('The form is not valid or has expired.');
}

