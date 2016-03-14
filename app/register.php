<?php
include 'dbcon.php';
session_start();

$sql1 = "SELECT username,email FROM user";
$results1 = mysqli_query($conn, $sql1);
$rows = mysqli_num_rows($results1);
while($compare = mysqli_fetch_array($results1)){

$compare['username'];
$compare['email'];

if($_POST['email'] == $compare['email']){

	$emailerror = "This Email Has Been Registered";
	header('Location: userlogin.php')
}elseif($_POST['username'] == $compare['username']){

	$usererror = "This Username Has Been Taken";
	header('Location: userlogin.php')
}else{


	$sql="INSERT INTO user(
			type,
			email,
			username,
			password,
			date_created)
		VALUES('$_POST[type]',
			'$_POST[email]',
			'$_POST[username]',
			'$_POST[password]',
			'$_POST[regdate]')";

		if(mysqli_query($conn, $sql)){
		echo "<h1>You have sucessfully registered</h1><br>";
		echo "<a href='userlogin.php'>Back to login page</a>";
		}else{
				echo "Error: ". "<br>" . $sql . "<br>" . mysqli_error($conn);
		}

mysqli_close($conn);
}

if(isset($_SESSION['user'])){
header('Location: index.php');
}
?>