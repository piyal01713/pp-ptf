<?php
session_start();
include 'dbcon.php';

if($conn){

//insert data to table "posts"
$sql="INSERT INTO posts(
	work,
	employer,
	salary,
	location,
	scope,
	addinfo,
	jobcat,
	loccat,
	date_posted) 
VALUES('$_POST[work]',
	'$_POST[employer]',
	'$_POST[salary]',
	'$_POST[location]',
	'$_POST[scope]',
	'$_POST[addinfo]',
	'$_POST[jobcat]',
	'$_POST[loccat]',
	'$_POST[date_posted]')";


if(mysqli_query($conn, $sql)){
	echo "Your post has been saved!<br>";
}
else{
	echo "Error: ". "<br>" . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>
<html>
<body>
<a href="Job-list.php">Back to Job List</a>
</body>
</html>