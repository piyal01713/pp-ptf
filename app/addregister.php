<?php
session_start();
include 'dbcon.php';

//insert data to table "posts"
$sql="INSERT INTO posts(
	name,
	email,
	uname,
	pwd)
VALUES('$_POST[name]',
	'$_POST[email]',
	'$_POST[uname]',
	'$_POST[pwd]')";

if(mysqli_query($conn, $sql)){
	echo "Your detail has been saved!<br>";
	echo "<a href='prereg.php'>Back</a>";
}
else{
	echo "Error: ". "<br>" . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>