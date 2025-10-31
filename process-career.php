<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name       = $_POST['fullname'] ?? '';
    $email      = $_POST['email'] ?? '';
    $phone      = $_POST['phone'] ?? '';
    $mobile     = $_POST['mobile'] ?? '';
    $position   = $_POST['position'] ?? '';
    $interview  = $_POST['interviewtime'] ?? '';
    $jointime   = $_POST['jointime'] ?? '';

    // Save CV upload
    $cvPath = '';
    if (isset($_FILES['cvupload']) && $_FILES['cvupload']['error'] === 0) {
        $targetDir = __DIR__ . "/uploads/";
        if (!is_dir($targetDir)) mkdir($targetDir, 0777, true);
        $cvPath = $targetDir . basename($_FILES['cvupload']['name']);
        move_uploaded_file($_FILES['cvupload']['tmp_name'], $cvPath);
    }

    $to = "career@rancelab.com";
    $subject = "New Career Application - $name";
    $body = <<<EOT
Name: $name
Email: $email
Phone: $phone
Mobile: $mobile
Position: $position
Preferred Interview Time: $interview
Can Join In: $jointime
EOT;

    // Escape input
    $safeSubject = escapeshellarg($subject);
    $safeBody = escapeshellarg($body);
    $safeTo = escapeshellarg($to);
    $safeAttachment = escapeshellarg($cvPath);

    if (!empty($cvPath)) {
        // Send email with attachment using mailx
        $cmd = "echo $safeBody | mailx -s $safeSubject -a $safeAttachment $safeTo";
    } else {
        // Send without attachment
        $cmd = "echo $safeBody | mailx -s $safeSubject $safeTo";
    }

    exec($cmd, $output, $status);

    if ($status === 0) {
        echo "Application submitted successfully.";
    } else {
        echo "Failed to send email.";
    }
}
?>

