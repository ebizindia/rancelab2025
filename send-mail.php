<?php
function send_mail($to, $subject, $body, $from = 'noreply@rancelab.com', $replyTo = null) {
    $headers = "From: $from\n";
    if ($replyTo) {
        $headers .= "Reply-To: $replyTo\n";
    }
    $headers .= "Content-Type: text/plain; charset=UTF-8\n";

    $emailContent = "To: $to\n";
    $emailContent .= "Subject: $subject\n";
    $emailContent .= $headers . "\n";
    $emailContent .= $body;

    $msmtp = popen("/usr/bin/msmtp -t", 'w');
    fwrite($msmtp, $emailContent);
    pclose($msmtp);
}

