<?php
$to = 'farid@pocketpixel.com';

	$subject = "Application for part time job :";

	$body = 'Name: '.$_POST['aname']. 
	 'Age: ' .$_POST['age']. 
	 'Have Work Experience: '.$_POST['experience'].
	 'Attach Resume: '.$_POST['file'].
	 'Contact: '.$_POST['contact'].
	 'Email: '.$_POST['email'];

	$headers = 'From: farid@pocketpixel.com';

	if(mail($to, $subject, $body, $headers)){
		echo'Successfully sent!';

	}else{
		echo 'Error';
	}
?>
<html>
<head>
    <Title>Success!</Title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
</html>