<?php
require 'PHPMailer\Exception.php';
require 'PHPMailer\PHPMailer.php';
require 'PHPMailer\SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


function Send_Mail($to,$subject,$body)
{
//require 'class.phpmailer.php';
$from       = "from@yourwebsite.com";
$mail       = new PHPMailer();
$mail->IsSMTP(true);            // use SMTP
$mail->IsHTML(true);
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->Host       = "smtp.gmail.com"; // SMTP host
$mail->SMTPSecure   = "tls";  
$mail->Port       =  587;                    // set the SMTP port
$mail->Username   = "leonelacorvera90@gmail.com";  // SMTP  username
$mail->Password   = "acrppcgrjrkainys";  // SMTP password
$mail->SetFrom($from, 'Validacion de usuario');
$mail->AddReplyTo($from,'Validacion de usuario');
$mail->Subject    = $subject;
$mail->MsgHTML($body);
$address = $to;
$mail->AddAddress($address, $to);
$mail->Send(); 
}


?>