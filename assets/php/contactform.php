<?php

if (isset($_POST['submit'])) {

	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	$mailTo = "lindy.2000@live.com";
	$headers = "From: ".$email;
	$txt = "You have received an email from ".$name." on your website."\n\n".$message;

	mail($mailTo. $subject, $txt, $headers);
	header("Location: index.html");

}