<?php
session_start();

function send_mail($to, $subject, $body, $from = 'noreply@rancelab.com', $replyTo = null) {
    $headers = "From: $from\r\n";
    if ($replyTo) $headers .= "Reply-To: $replyTo\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    $emailContent = "To: $to\nSubject: $subject\n$headers\n$body";
    $msmtp = popen("/usr/bin/msmtp -t 2>&1", 'w');
    if (!$msmtp) return false;
    fwrite($msmtp, $emailContent);
    $status = pclose($msmtp);
    return ($status === 0);
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: dealership.php');
    exit();
}

$name = trim($_POST['name'] ?? '');
$company = trim($_POST['company'] ?? '');
$address = trim($_POST['address'] ?? '');
$city = trim($_POST['city'] ?? '');
$mobile = trim($_POST['mobile'] ?? '');
$email = trim($_POST['email'] ?? '');
$business_desc = trim($_POST['business_desc'] ?? '');

if (!$name || !$company || !$address || !$city || !$mobile || !$email || !$business_desc) {
    $_SESSION['error'] = "Please fill all mandatory fields.";
    header('Location: dealership.php');
    exit();
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['error'] = "Invalid email address.";
    header('Location: dealership.php');
    exit();
}

$to = "info@rancelab.com";
$subject = "Dealership Request from $name";
$body = "Name: $name\nCompany: $company\nAddress: $address\nCity: $city\nMobile: $mobile\nEmail: $email\nBusiness Description:\n$business_desc";

if (send_mail($to, $subject, $body, 'noreply@rancelab.com', $email)) {
    header('Location: thanks-dealership-request.php');
    exit();
} else {
    $_SESSION['error'] = "Sorry, there was a problem sending your request. Please try again later.";
    header('Location: dealership.php');
    exit();
}
?>

