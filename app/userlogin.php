<?php
include 'dbcon.php';
session_start();

if(isset($_SESSION['user'])){
    	header('Location: index.php');
}

 $sql="SELECT * FROM user ";

 $results=mysqli_query($conn, $sql);

		if(mysqli_num_rows($results) > 0){

			while($userinfo=mysqli_fetch_array($results)){
			$msg = '';

				if (isset($_POST['login'])){
					if ($_POST['username'] == $userinfo['username'] && 
				      $_POST['password'] == $userinfo['password']){
				      	$_SESSION['user'] = $_POST['username'];
						header('Location: index.php');
					}else {
				      $msg = 'Wrong username or password';
				    }
				}
			}
		}else{
			echo "Error: some codes are not correctly placed or one of the code spelling is wrong or does not match, please check back your codes";
		}

	?>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="main.css">
</head>
	<body>
		<form action="userlogin.php" method="Post">
			<div class="middlefield">
				<h2>Job Seekers!</h2>
				<fieldset class="regfieldbox" style="width:250">
					<legend>Login: </legend>
					<table class="fieldtable">
						<tr>
							<td>Username: </td>
							<td>Password: </td>
						</tr>
						<tr>
							<td><input type="text" name="username" maxlength="15" size="20" required autocomplete="off"></td>
							<td><input type="password" name="password" minlength="6" size="15" required></td>

						</tr>
						<tr>
						<td class="err"colspan="2"><?php echo $msg; ?></td>
						</tr>
					</table>
					<br>
					<input type="submit" name="login" value="Login">
					<input type="reset" value="Reset">
				</fieldset>
				<p><i>or</i></p>
				<p><b><i>New user? Sign up <a href="prereg.php">here. </a></b></p>
				<p><b><i><a href="index.php">Back to home page</a></b></p>
			</div>
		<form>
	</body>
</html>