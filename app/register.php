<?php
include 'dbcon.php';
session_start();

if(isset($_SESSION['user'])){
header('Location: index.php');
}

if(($_POST['email'] == "") && ($_POST['username'] == "")){

	$emailerror = "";
	$usererror = "";
	$passerror = "";

}else{

	$sql1 = "SELECT username,email FROM user WHERE username = '$_POST[username]' ";
	$results1 = mysqli_query($conn, $sql1);
	$rows = mysqli_num_rows($results1);
	$compare = mysqli_fetch_array($results1);
	$affected = mysqli_affected_rows($conn);

	$compare['email'];
	$compare['username'];
	
	if($_POST['confirmpwd'] != $_POST['password']){

		$passerror = "Your Password Didn't Match";

	}elseif($_POST['username'] == $compare['username']){

		$usererror = "This Username Has Been Taken";

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
			echo "<center>";
			echo "<h1>You have sucessfully registered</h1><br>";
			echo "<a href='userlogin.php'>Please login after register</a>";
			echo "</center>";
			}else{
				//echo "Error: ". "<br>" . $sql . "<br>" . mysqli_error($conn);
				$emailerror = "This Email Has Already Exist";
			}

			mysqli_close($conn);
	}

}
?>