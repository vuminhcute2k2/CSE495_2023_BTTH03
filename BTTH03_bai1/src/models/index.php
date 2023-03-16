<?php
require(realpath($_SERVER['DOCUMENT_ROOT'])."/BTTH03/src/models/class/EmailSender.php");
require(realpath($_SERVER['DOCUMENT_ROOT'])."/BTTH03/src/models/class/MyEmailSever.php");
//require(realpath($_SERVER['DOCUMENT_ROOT'])."/BTTH03/src/models/interface/EmailServerInterface.php");
//require '/vendor/phpmailer/phpmailer/src/PHPMailer.php';
$MyEmailServer = new MyEmailServer();
$emailSender = new EmailSender($MyEmailServer);
$emailSender->send("linhchi1750@gmail.com", "Hello", "This is a test email.");