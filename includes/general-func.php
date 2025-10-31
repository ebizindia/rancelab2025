<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function sendAMail(
    $to,
    $subject,
    $from,
    $fromname = '',
    $htmlmessage = '',
    $textmessage = '',
    $html = true,
    $type = 'phpmail',
    $smtpdetails = array(),
    $cc = array(),
    $bcc = array(),
    $reply_to = array(),
    $inlineimages = array(),
    $attachments = array()
)
{    
	try {
        $mail = new PHPMailer(true);

        // Use sendmail/msmtp
        $mail->IsMail(); // This uses the system's sendmail (which is msmtp)

        $mail->From = $from;
        if ($fromname != '') {
            $mail->FromName = $fromname;
        }

        foreach ($to as $t) {
            $mail->AddAddress($t);
        }

        foreach ($cc as $c) {
            $mail->AddCC($c);
        }

        foreach ($bcc as $b) {
            $mail->AddBCC($b);
        }

        foreach ($reply_to as $r) {
            if (is_array($r)) {
                $rep_to = $r['email_id'];
                $rep_to_nm = $r['name'];
            } else {
                $rep_to = $r;
                $rep_to_nm = '';
            }
            if (filter_var($rep_to, FILTER_VALIDATE_EMAIL)) {
                $mail->AddReplyTo($rep_to, $rep_to_nm);
            }
        }

        $mail->Subject = $subject;

        if ($html) {
            $mail->Body = $htmlmessage;
            $mail->IsHTML(true);
            $mail->AltBody = $textmessage;
        } else {
            $mail->Body = $textmessage;
            $mail->isHTML(false);
        }

        foreach ($attachments as $a) {
            $mail->AddAttachment($a['attachment_filenamepath'], $a['attachment_name'], $a['encoding'], $a['contenttype']);
        }

        foreach ($inlineimages as $img) {
            $mail->AddEmbeddedImage($img['image_filenamepath'], $img['image_identifier'], $img['image_filenamepath'], 'base64', 'image/jpeg');
        }

        $mail->Send();
    } catch (phpmailerException $e) {
        die($e->errorMessage() . '<br>');
        return false;
    }
    return true;
}


function sendAMail2(
    $to,
    $subject,
    $from,
    $fromname = '',
    $htmlmessage = '',
    $textmessage = '',
    $html = true,
    $type = 'phpmail',
    $smtpdetails = array(),
    $cc = array(),
    $bcc = array(),
    $reply_to = array(),
    $inlineimages = array(),
    $attachments = array()
)
 {
    try {
        $mail = new PHPMailer(true);
        $mail->SMTPDebug = 0; // Change to 2 for debug

        // Use sendmail/msmtp
        $mail->IsMail();

        $mail->From = $from;
        if ($fromname != '') {
            $mail->FromName = $fromname;
        }

        foreach ($to as $t) {
            $mail->AddAddress($t);
        }

        foreach ($cc as $c) {
            $mail->AddCC($c);
        }

        foreach ($bcc as $b) {
            $mail->AddBCC($b);
        }

        foreach ($reply_to as $r) {
            if (is_array($r)) {
                $rep_to = $r['email_id'];
                $rep_to_nm = $r['name'];
            } else {
                $rep_to = $r;
                $rep_to_nm = '';
            }
            if (filter_var($rep_to, FILTER_VALIDATE_EMAIL)) {
                $mail->AddReplyTo($rep_to, $rep_to_nm);
            }
        }

        $mail->Subject = $subject;

        if ($html) {
            $mail->Body = $htmlmessage;
            $mail->IsHTML(true);
            $mail->AltBody = $textmessage;
        } else {
            $mail->Body = $textmessage;
            $mail->isHTML(false);
        }

        foreach ($attachments as $a) {
            $mail->AddAttachment($a['attachment_filenamepath'], $a['attachment_name'], $a['encoding'], $a['contenttype']);
        }

        foreach ($inlineimages as $img) {
            $mail->AddEmbeddedImage($img['image_filenamepath'], $img['image_identifier'], $img['image_filenamepath'], 'base64', 'image/jpeg');
        }

        $mail->Send();
    } catch (phpmailerException $e) {
        die($e->errorMessage() . '<br>');
        return false;
    }
    return true;
}

