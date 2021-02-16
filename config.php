<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'mail/autoload.php';

// Instantiation and passing true enables exceptions
$mail = new PHPMailer();

   //Server settings
   $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
   $mail->isSMTP();                                            // Send using SMTP
   $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
   $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
   $mail->Username   = 'yourEmailHere';                     // SMTP username
   $mail->Password   = 'YourPasswordHere';                               // SMTP password
   $mail->SMTPSecure = 'ssl';         // Enable TLS encryption; PHPMailer::ENCRYPTION_SMTPS encouraged
   $mail->Port       = 465;    

      // Content
      $mail->isHTML(true);  
      $mail->CharSet = "utf-8";
      echo "hello";