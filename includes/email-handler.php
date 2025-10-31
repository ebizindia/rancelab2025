<?php
// includes/email-handler.php

function sendCareerEmail($to, $subject, $htmlmessage, $from, $fromname, $cc = [], $bcc = [], $attachments = []) {
    // Ensure $to is an array for consistency
    if (!is_array($to)) {
        $to = array_filter(explode(',', $to));
    }

    // Construct headers
    $headers = "From: $fromname <$from>\r\n";
    $headers .= "MIME-Version: 1.0\r\n";

    // If no attachments, send as HTML email
    if (empty($attachments)) {
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        foreach ($cc as $cc_email) {
            if ($cc_email) $headers .= "Cc: $cc_email\r\n";
        }
        foreach ($bcc as $bcc_email) {
            if ($bcc_email) $headers .= "Bcc: $bcc_email\r\n";
        }
        // Send email to the first recipient (applicant email)
        return mail($to[0], $subject, $htmlmessage, $headers);
    }

    // If there are attachments, use multipart/mixed MIME
    $boundary = md5(time());
    $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";
    foreach ($cc as $cc_email) {
        if ($cc_email) $headers .= "Cc: $cc_email\r\n";
    }
    foreach ($bcc as $bcc_email) {
        if ($bcc_email) $headers .= "Bcc: $bcc_email\r\n";
    }

    // Construct the email body
    $message = "--$boundary\r\n";
    $message .= "Content-Type: text/html; charset=UTF-8\r\n";
    $message .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
    $message .= $htmlmessage . "\r\n";

    // Add attachments
    foreach ($attachments as $attachment) {
        $file_path = $attachment['attachment_filenamepath'];
        $file_name = $attachment['attachment_name'];
        if (file_exists($file_path)) {
            $file_content = chunk_split(base64_encode(file_get_contents($file_path)));
            $message .= "--$boundary\r\n";
            $message .= "Content-Type: application/octet-stream; name=\"$file_name\"\r\n";
            $message .= "Content-Transfer-Encoding: base64\r\n";
            $message .= "Content-Disposition: attachment; filename=\"$file_name\"\r\n\r\n";
            $message .= $file_content . "\r\n";
        }
    }
    $message .= "--$boundary--\r\n";

    // Send email to all recipients
    return mail(implode(',', $to), $subject, $message, $headers);
}
?>
