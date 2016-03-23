<?php 

	$to = $_POST['tosend'];

	$subject = 'Application for part time job';

	$body = 'You have a job application request from:'."\n\n\n".
	'Name: '.$_POST['aname']."\n\n".
	'Age: ' .$_POST['age']."\n\n".
	'Have Work Experience: '.$_POST['experience']."\n\n".
	'Experience About Previous Jobs:'.$_POST['area']."\n\n".
	'Contact: '.$_POST['contact']."\n\n".
	'Email: '.$_POST['email']."\n\n".
	'Attach Resume:';

	$headers = 'From: farid@pocketpixel.com';

	if(mail($to, $subject, $body, $headers)){
		header("Location: sent.php");

	}else{
		echo 'Error!';
	}
?>
<html>
<head>
    <Title>Success!</Title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
</html>

