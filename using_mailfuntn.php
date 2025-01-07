<?php
	$to ="shifananasrin941@gmail.com";
	$subject ="Test Email";
	$message="Hello shifana";
	$headers="From:snehakaliyath@gmail.com";
	if(mail($to,$subject,$message,$headers)){
		echo "Email sent successfully.";
	}
	else{
		echo "Failed to send email.";	
	}
?>