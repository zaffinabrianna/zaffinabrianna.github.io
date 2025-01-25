<?php

$errors = [];

if (!empty($_POST))
{
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	
	if(empty($fname))
	{
		$errors[] = 'First name subject is not filled';
	}
	
	if (empty($lname))
	{
		$errors[] = 'Last name subject is not filled';
	}
	
	if (empty($email))
	{
		$errors[] = 'Email subject is not filled';
	}
	
	if (empty($subject))
	{
		$errors[] = 'Subject is not filled';
	}
	
	if (empty($message))
	{
		$errors[] = 'Message subject is not filed';
	}
	
}
	
?>