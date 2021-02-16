<?php

if(isset($_POST['send'])){
$name = $_POST['nameUser'];
$email = $_POST['email'];
$message=$_POST['message'];


require_once'config.php';
$mail->setFrom($email,$name);
$mail->addAddress("lmadani.noureddine151997@gmail.com");
// $mail->addCC('lmadani.noureddine151997@gmail.com')  ;
$mail->Subject = 'github';
$mail->Body    = $message;
$mail->send();


}
