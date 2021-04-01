<?php 
require "../session.php";

use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 

require './vendor/autoload.php'; 

$mail = new PHPMailer(true); 

try { 
	$mail->SMTPDebug = 2;									 
	$mail->isSMTP();											 
	$mail->Host	 = 'smtp.gmail.com;';					 
	$mail->SMTPAuth = true;							 
	$mail->Username = 'kartikp0822@gmail.com';
	$mail->Password = 'Pass@123';
	
	$mail->SMTPSecure = 'tls';							 
	$mail->Port	 = 587; 

	//$mail->setFrom('asshelar@dktes.com', 'Alankar Shelar');		 
	//$mail->addAddress('alankarshelar5620@gmail.com'); 
	//$mail->addAddress('alankarshelar89@gmail.com', 'AS'); 
	
		//From email address and name
		$mail->From = "kartikp0822@gmail.com";
		$mail->FromName = "Admin";

		//To address and name
		// $mail->addAddress($_SESSION['email'], "User");
		$mail->addAddress("kartikpatil2200@gmail.com", "User");
		//$mail->addAddress("vishalkharade@icloud.com","student...."); //Recipient name is optional

		//Address to which recipient will reply
		$mail->addReplyTo("kartikpatil0822@gmail.com", "Reply");

		//CC and BCC
		//$mail->addCC("cc@example.com");
		//$mail->addBCC("bcc@example.com");
	
	    //$mail->addAttachment("img1.jpg");
	
	$mail->isHTML(true);								 
	$mail->Subject = 'Your Query...'; 
	$mail->Body = 'According to your registered query, the necessary actions have taken and the Query is resolved'; 
	$mail->AltBody = 'Body in plain text for non-HTML mail clients'; 
	$mail->send(); 
	echo "Mail has been sent successfully!"; 
	//$_SESSION['flash'] = "Email sent";
	//header('Location: list_queries.php');
	//die();
} 
catch (Exception $e) 
{ 
	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"; 
	//$_SESSION['error'] = "Unable to send mail";
	// header('Location: list_queries.php');
	// die();
} 

?> 
