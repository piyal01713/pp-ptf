<?php
<<<<<<< HEAD
include 'dbcon.php';
	
 $sql="SELECT * FROM user";
 $result=mysqli_query($conn, $sql);

	$msg = '';

	if (isset($_POST['login']) && !empty($_POST['name']) 
	   && !empty($_POST['pwd'])) {
		
	   if ($userinfo['username'] == $userinfo['username'] && 
	      $userinfo['password'] == $userinfo['password']){	      
	      header('Location: index.php');
	   }else {
	      $msg = 'Wrong username or password';
	   }
	}
	?>
=======
session_start();

if(isset($_POST['login'])){
	include_once("dbcon.php");
	$username=$_POST['username']; 
	$password=$_POST['password']; 
	$username = stripslashes($username);
	$password = stripslashes($password);
	$username = mysqli_real_escape_string($conn,$username);
	$password = mysqli_real_escape_string($conn,$password);

	$sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_num_rows($result);

	if($row == 1){
	  $_SESSION['username']="username";
	  $_SESSION['password']="password";
	  header("Location:loginsuccess.php");
	}
	else{
		$fail=true;
	}
}

?>
>>>>>>> upstream/master
<html>
<head><title>Login</title></head>
	<body>
		<form action="login.php" method="Post">
			<center>
				<h2>Job Seekers!</h2>
				<fieldset style="width:250">
					<legend>Login: </legend>
					<table>
						<tr>
							<td>Username: </td>
							<td>Password: </td>
						</tr>
						<tr>
<<<<<<< HEAD
							<td><input type="text" name="name" maxlength="15" size="20" required autocomplete="off"></td>
							<td><input type="password" name="pwd" minlength="6" size="15" required></td>
=======
							<td><input type="text" name="username" maxlength="15" size="20" required autocomplete="off"></td>
							<td><input type="password" name="password" minlength="6" size="15" required></td>
						</tr>
						<tr align="center">
						<td colspan="2">
						<?php

						if($fail===true){
							echo "(Wrong Username or Password)";
						}
							
						?>
						</td>
>>>>>>> upstream/master
						</tr>
					</table>
					<br>
					<input type="submit" name="login" value="Login">
					<input type="reset" value="Reset">
				</fieldset>
				<p><i>or</i></p>
				<p><b><i>New user? Sign up <a href="prereg.php">here. </a></b></p>
			</center>
		<form>
	</body>
</html>