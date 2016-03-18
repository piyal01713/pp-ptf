<?php
$to = $_POST['tosend'];

	$subject = 'Application for part time job';

	$body = 'You have a job application request from:'."\n\n\n".
	'Name: '.$_POST['aname']."\n\n".
	'Age: ' .$_POST['age']."\n\n".
	'Have Work Experience: '.$_POST['experience']."\n\n".
	'Experience About Previous Jobs:'.$_POST['area']."\n\n".
	'Attach Resume: '.$_POST['file']."\n\n".
	'Contact: '.$_POST['contact']."\n\n".
	'Email: '.$_POST['email'];

	$headers = 'From: farid@pocketpixel.com';

	if(mail($to, $subject, $body, $headers)){
		echo'Successfully sent!';
		echo '<br>';
		echo'<a href="index.php">BACK TO HOME PAGE</a>';

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