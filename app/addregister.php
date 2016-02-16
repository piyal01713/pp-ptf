<?php
session_start();
include 'dbcon.php';

if($conn){
//insert data to table "posts"
$sql="INSERT INTO user(
	email,
	username,
	password,
	type,
	date_created)
VALUES('$_POST[email]',
	'$_POST[uname]',
	'$_POST[pwd]',
	'$_POST[type]',
	'$_POST[datectd]')";

if(mysqli_query($conn, $sql)){
	echo "You have successfully registered a new account!<br>";
	echo "<a href='login.php'>login</a>";
}
else{
	echo "Error: ". "<br>" . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>