<?php
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
<html>
<head><title>Login</title></head>
	<body>
		<form action="login.php" method="Post">
			<center><br>
				<h2>Looking forJob or Worker?</h2>
				<fieldset style="width:250">
					<legend>Login: </legend>
					<table>
						<tr>
							<td>User Name: </td>
							<td>Password: </td>
						</tr>
						<tr>
							<td><input type="text" name="name" maxlength="15" size="20" required autocomplete="off"></td>
							<td><input type="password" name="pwd" minlength="6" size="20" required></td>

						</tr>
					</table>
					<br>
					<input type="submit" name="login" value="Login">
					<input type="reset" value="Reset">
				</fieldset>
				<p><i>or</i></p>
				<p><b><i>New user? Register <a href="prereg.php">here. </a></b></p>
			</center>
		<form>
	</body>
</html>