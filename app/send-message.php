<?php
session_start();
include '../constants/config.php';

$myfname = ucwords($_GET['name']);
$myemail = $_GET['email'];
$mymessage = $_GET['message'];
$myphone = $_GET['phone'];
$mymessage = "$mymessage<br><hr>Coordonées de l'expéditeur<br>
Téléphone : $myphone<br>
Email : $myemail<hr>";

require '../mail/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->CharSet = 'UTF-8';
$mail->Encoding = 'base64';
$mail->isSMTP();                                      
$mail->Host = $smtp_host;
$mail->SMTPAuth = true;                           
$mail->Username = 'contact-us@lecoupdejus.fr';               
$mail->Password = '^b9eAB7z&Nfvo7';                       
$mail->SMTPSecure = 'tls';                   
$mail->Port = 587;   

$mail->setFrom($myemail, $myfname);
$mail->addAddress($site_email);           
  
$mail->isHTML(true);

$mail->Subject = 'Contact';
$mail->Body    = $mymessage;
$mail->AltBody = $mymessage;

if(!$mail->send()) {
$_SESSION['reply'] = "012";
header("location:../contact");
} else {
$_SESSION['reply'] = "011";
header("location:../contact");
}

?>