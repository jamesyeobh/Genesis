<?php

require_once 'unsubscribe_mail.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$recipient = $_POST['recipient'];
	$writemessage = $_POST['message'];
	$link= "http://localhost/M6_project/public/unsubscribe.php?email=$recipient";
	$linkcontent ="<br><br><a href=$link >Unsubscribe</a>";
	$message = $writemessage.$linkcontent;
	
	//echo $message;
	$subject = $_POST['subject'];
	
	send_mail($recipient, $subject, $message);
	  
	//redirect to the 'thank you' page
	
	header("refresh:1;url=/M6_project/public/home.php");
	
	echo "Your message has been successfully sent out.";
}
?>
