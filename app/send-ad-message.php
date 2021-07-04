<?php
session_start();
require '../constants/config.php';

$ad_id = $_POST['adid'];
$receiver_mail = $_POST['mailto'];
$title = $_POST['ref'];
$sendermail = $_POST['email'];
$senderphone = $_POST['phone'];
$sendermsg = $_POST['message'];

$msgtosend = "$sendermsg<hr>Coordonées de l'éxpéditeur<br>Email : $sendermail , Téléphone : $senderphone"  ;

require '../mail/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->CharSet = 'UTF-8';
$mail->Encoding = 'base64';
$mail->isSMTP();                                      
$mail->Host = $smtp_host;
$mail->SMTPAuth = true;                           
$mail->Username = $smtp_user;               
$mail->Password = $smtp_pass;                       
$mail->SMTPSecure = 'tls';                   
$mail->Port = 587;   

$mail->setFrom($sendermail, $site_title);
$mail->addAddress($receiver_mail);  

$mail->isHTML(true); 

$mail->Subject = ''.$title.'';
$mail->Body    = $msgtosend;
$mail->AltBody = '';

if(!$mail->send()) {
$_SESSION['reply'] = "012";
header("location:../ad/$ad_id");
} else {
$_SESSION['reply'] = "011";
header("location:../ad/$ad_id");
}

?>