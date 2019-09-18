
Thanks for your message!

<?php
	
	$userName 		= $_POST['name'];
	$userEmail	 	= $_POST['email'];
    $userMessage 	= $_POST['message'];
    
	$to 			= "mizradan@gmail.com";
    $subject 		= "Mail from my personal page";
    
	$body 			= "Information Submitted:";
	$body .= "\r\n Name: " . $userName;
	$body .= "\r\n Email: " . $userEmail;
    $body .= "\r\n Message: " . $userMessage;

    $headers = "Content-Type: text/html; charset=UTF-8\r\n";
    
    mail($to, $subject, $body, $headers);
    header("Location: index.html?mailsend");
?>