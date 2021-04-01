<?php 
require "../session.php";

use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 

require 'vendor/autoload.php'; 

$mail = new PHPMailer(true); 

$email = $_GET['id'];
try {
    $mail->SMTPDebug = 2;									 
    $mail->isSMTP();											 
    $mail->Host	 = 'smtp.gmail.com;';					 
    $mail->SMTPAuth = true;							 
    $mail->Username = 'kartikpatil0822@gmail.com';
    $mail->Password = 'skp@0822';

    $mail->SMTPSecure = 'tls';							 
    $mail->Port	 = 587; 

    //$mail->setFrom('asshelar@dktes.com', 'Alankar Shelar');		 
    //$mail->addAddress('alankarshelar5620@gmail.com'); 
    //$mail->addAddress('alankarshelar89@gmail.com', 'AS'); 

        //From email address and name
        $mail->From = "kartikpatil0822@gmail.com";
        $mail->FromName = "Admin";
        //$_SESSION['email'] = "kartikpatil2200@gmail.com";
        //To address and name
        $mail->addAddress($email, "Student");
        //$mail->addAddress("vishalkharade@icloud.com","student...."); //Recipient name is optional

        //Address to which recipient will reply
        $mail->addReplyTo("kartikpatil0822@gmail.com", "Reply");

        //CC and BCC
        //$mail->addCC("cc@example.com");
        //$mail->addBCC("bcc@example.com");

        //$mail->addAttachment("img1.jpg");

    $mail->isHTML(true);								 
    $mail->Subject = 'Query status'; 
    $mail->Body = 'Your query is resolved '; 
    $mail->AltBody = ''; 
    $mail->send(); 
    //echo "Mail has been sent successfully!";
    $_SESSION['flash'] = "Email sent";
    header("Location: ../index.php");
} 
    catch (Exception $e) 
    { 
        //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"; 
        $_SESSION['error'] = "unable to send mail";
        header("Location: ../index.php");

} 



?> 
