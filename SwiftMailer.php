<?php

require_once 'send_mail.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$recipient = $_POST['recipient'];
	$message = $_POST['message'];
	$subject = $_POST['subject'];
	
	send_mail($recipient, $subject, $message);
	  
	//redirect to the 'thank you' page
	
	header("refresh:1;url=/M6_project/public/home.php");
	
	echo "Your message has been successfully sent out. Please contact us for any further enquiry";
}
?>