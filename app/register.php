<?php
include 'dbcon.php';
session_start();

if(isset($_SESSION['user'])){
header('Location: index.php');
}

if(!isset($_POST['email']) && !isset($_POST['username']) && !isset($_POST['password'])){

	$emailerror = "";
	$usererror = "";
	$passerror = "";

}else{

	$name = $_POST['username'];
	$email = $_POST['email'];

	$sql1 = "SELECT username,email FROM user WHERE username = '$_POST[username]' OR email = '$_POST[email]' ";
	$results1 = mysqli_query($conn, $sql1);
	$rows = mysqli_num_rows($results1);
	$compare = mysqli_fetch_array($results1);

	$compare['email'];
	$compare['username'];
	
	if($_POST['confirmpwd'] != $_POST['password']){

		$passerror = "Your Password Didn't Match";

	}elseif($_POST['username'] == $compare['username']){

		$usererror = "This Username Has Been Taken";

	}elseif($_POST['email'] == $compare['email']){

		$emailerror = "This Email Has Already Been Registered";

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
				header("Location: regmsg.html");
			}else{

				echo "Error: ". "<br>" . $sql . "<br>" . mysqli_error($conn);

			}

			mysqli_close($conn);
	}

}
?>