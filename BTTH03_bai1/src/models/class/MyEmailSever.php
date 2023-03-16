<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
require(realpath($_SERVER['DOCUMENT_ROOT'])."/BTTH03/src/models/interface/EmailServerInterface.php");
require(realpath($_SERVER['DOCUMENT_ROOT'])."/BTTH03/vendor/autoload.php");

class MyEmailServer implements EmailServerInterface {
    public function sendEmail($to, $subject, $message) {
        // Code to send email using SMTP server goes here
        $mail = new PHPMailer();

        
        $mail->isSMTP();
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->SMTPAuth = true;


        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 465;
        $mail->Username = 'minhvu69696969@gmail.com';
        $mail->Password = 'vdlmwmtzeocmnalb';
        $mail->addAddress($to,'minhvu69696969@gmail.com');

        //Attach an image file
        $mail->Body = $message;

        //send the message, check for errors
        if (!$mail->send()) {
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message sent!';
            //Section 2: IMAP
            //Uncomment these to save your message in the 'Sent Mail' folder.
            #if (save_mail($mail)) {
            #    echo "Message saved!";
            #}
        }
            }
}