<?php

if($_POST["submit"]) {
    $recipient="Jamesneser@gmail.com";
    $subject="Feed1000 Location Request";
    $senderfname=$_POST["fname"];
    $senderlname=$_POST["lname"];
	$senderEmail="James.neser@dimensiondata.com";
    $message=$_POST["location"];

    $mailBody="Name: $senderfname $senderlname\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");
}

?>