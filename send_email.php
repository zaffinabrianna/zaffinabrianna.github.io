<?php
	
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$fname = isset($_POST["fname"]) ? strip_tags(trim($_POST['fname'])) : ' ';
	$lname = isset($_POST["lname"]) ? strip_tags(trim($_POST['lname'])) : ' ';
	$email = isset($_POST["email"]) ? strip_tags(trim($_POST['email'])) : ' ';
	$subject = isset($_POST["subject"]) ? strip_tags(trim($_POST['subject'])) : ' ';
	$message = isset($_POST["message"]) ? strip_tags(trim($_POST['message'])) : ' ';
	
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
	
	else if (!filter_var($email, FILTER_VALIDATE_EMAIL))
	{
		$errors[] = 'Not a valid email address';
	}
	
	if (empty($message))
	{
		$errors[] = 'Message subject is not filed';
	}
	
	if(empty($errors))
	{
		$recipient = "uwuZaffina@gmail.com";
		
		$headers = "From: $fname $lname <$email>";
		
		if(mail($recipient, $subject, $message, $headers))
		{
			echo "Email sent successfully!";
		}
		
		else 
		{
			echo "Failed to send email. Please try again later.";
		}
	}
	
	else
	{
		echo "The form contains the following errors:<br>";
			
		foreach($errors as $error)
		{
			echo "- $error<br>";
		}
	}
}

else
{
	header("HTTP/1.1 403 Forbidden");
	echo "You are not allowed to access this page.";
}

?>