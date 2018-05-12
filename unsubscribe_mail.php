<?php

	require_once 'vendor/swiftmailer-5.x/lib/swift_required.php';

//	require_once '../swift_required.php';
	
	function send_mail($recipient, $subject="", $message="") {
		if (strpos($recipient, ",") !== true) {
			$recipient = preg_split("/[,]+/", $recipient);
		}
		$transport = (new Swift_SmtpTransport('in-v3.mailjet.com', 25))
		  ->setUsername('')
		  ->setPassword('');
		$mailer = new Swift_Mailer($transport);
		
		$message = (new Swift_Message($subject))
			->setFrom(['' => 'Webmaster'])
			//->setTo([$recipient]) //Recipients
			->setTo($recipient) //Recipients

			//Recipients
			->setBody($message); //Bodymessage
			
		if ($mailer->send($message) > 0) {
		  return 1;
		return 0;
	}
	}
?>
