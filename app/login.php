<?php
include 'dbcon.php';
?>
<html>
<head><title>Job Finder</title></head>
	<body>
		<form action="process.php" method="Post">
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
							<td><input type="text" name="name" maxlength="15" size="20" required autocomplete="off"></td>
							<td><input type="password" name="pwd" minlength="6" size="15"></td>
						</tr>
					</table>
					<br>
					<input type="submit" value="Login">
					<input type="reset" value="Reset">
				</fieldset>
				<p><i>or</i></p>
				<p><b><i>New user? Sign up <a href="prereg.php">here. </a></b></p>
			</center>
		<form>
	</body>
</html>