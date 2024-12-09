<?php 
	$to="yusraash44@gmail.com";
	$subject="Random";
	$message="Hello How are you I hope you are fine Please bring some sweets tomorrow for nothing special but enjoying ordinary days";
	$headers="From:swafwanasheri17@gmail.com";
	if (mail($to,$subject,$message,$headers))
	{
		echo "Email sent successfully";
	
	}
	else
	{
		echo"Failed to Send Email";
	}
?>
