<?php
	$name = $_POST['fname'];
	$name = $_POST['lname'];
	$message = $_POST['message'];
	
	
	$email_from = 'jrobinson21@stu.ncu.edu.jm';
	
	$email_subject = "New Form Submission";
	
	$email_body = "User Name: $name.\n".
					"User Email: $visitor_email.\n".
						"User Message: $message.\n";
						
						
	$to = "jorainerobinson16@gmail.com";
	
	$headers = "From: $email_from \r\n";
	
	$headers = "Reply-To: $visitor_email \r\n";
	
	mail($to,$email_subject,$email_body,$headers);
	
	header("Location: index.html");
