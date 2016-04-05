<?php

if($conn){
//declare $_POST['variable'] as variable that can escape inputed values
$_POST['location']=mysqli_real_escape_string($conn, $_POST['location']);
$_POST['scope']=mysqli_real_escape_string($conn, $_POST['scope']);
$_POST['addinfo']=mysqli_real_escape_string($conn, $_POST['addinfo']);
$_POST['work']=mysqli_real_escape_string($conn, $_POST['work']);
$_POST['employer']=mysqli_real_escape_string($conn, $_POST['employer']);

//insert data to table "posts"
$sql="INSERT INTO applicant(
	aname,
	age,
	experience,
	contact,
	email,
	post_id) 
VALUES('$_POST[aname]',
	'$_POST[age]',
	'$_POST[experience]',
	'$_POST[contact]',
	'$_POST[email]',
	'$_POST[postid]')";

	//check if query run
	if(mysqli_query($conn, $sql)){
		//redirect to link
		header("Location: addmsg.html");
	}
	else{
		echo "Error: ". "<br>" . $sql . "<br>" . mysqli_error($conn);
	}

}

 error_reporting(E_ALL);
 ini_set('display_errors', 1);

//check if file exist
if(isset($_FILES) && (bool) $_FILES) {

	//allow file extensions format
	$allowedExtensions = array("pdf","doc","docx","gif","jpeg","jpg","png","rtf","txt");

	//set file as array
	$files = array();
	foreach($_FILES as $name=>$file) {
		$file_name = $file['name']; 
		$temp_name = $file['tmp_name'];
		$file_type = $file['type'];
		$path_parts = pathinfo($file_name);
		$ext = $path_parts['extension'];
		if(!in_array($ext,$allowedExtensions)) {
			die("File $file_name has the extensions $ext which is not allowed");
		}
		array_push($files,$file);
	}
	
	// email fields: to, from, subject, and so on
	$to = $_POST['tosend'];
	$from = "farid@pocketpixel.com"; 
	$subject ="test attachment"; 
	$message = '* You have a job application request from:'."\n\n".
	'Name: '.$_POST['aname']."\n\n".
	'Age: ' .$_POST['age']."\n\n".
	'Have Work Experience: '.$_POST['experience']."\n\n".
	'Experience About Previous Jobs: '."\n".$_POST['area']."\n\n".
	'Contact: '.$_POST['contact']."\n\n".
	'Email: '.$_POST['email']."\n\n".
	'(Attachments is provided within the email)';
	$headers = "From: $from";
	
	// boundary 
	$semi_rand = md5(time()); 
	$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 
	 
	// headers for attachment 
	$headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 
	 
	// multipart boundary 
	$message = "This is a multi-part message in MIME format.\n\n" . "--{$mime_boundary}\n" . "Content-Type: text/plain; charset=\"iso-8859-1\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . $message . "\n\n"; 
	$message .= "--{$mime_boundary}\n";
	 
	// preparing attachments
	for($x=0;$x<count($files);$x++){
		$file = fopen($files[$x]['tmp_name'],"rb");
		$data = fread($file,filesize($files[$x]['tmp_name']));
		fclose($file);
		$data = chunk_split(base64_encode($data));
		$name = $files[$x]['name'];
		$message .= "Content-Type: {\"application/octet-stream\"};\n" . " name=\"$name\"\n" . 
		"Content-Disposition: attachment;\n" . " filename=\"$name\"\n" . 
		"Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
		$message .= "--{$mime_boundary}\n";
	}
	// send
	 
	$ok = mail($to, $subject, $message, $headers); 
	if ($ok) { 
		header("Location: sent.php"); 
	} else { 
		echo "<h1>mail could not be sent!</h1>"; 
	} 
}	

//close sql queries
mysqli_close($conn);
?>
<html>
<head>
    <Title>Send</Title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
</html>

