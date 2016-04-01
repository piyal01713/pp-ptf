<?php
//include external php file
include'dbcon.php';
include'register.php';
//set local timezone
date_default_timezone_set("Asia/Kuala_Lumpur");
//set input date function as varianle
$regdate = date("Y.m.d");
?>
<html>
<head>
<title>Register</title>
<link rel="stylesheet" type="text/css" href="main.css">
</head>
	<body>
	<div class="middlefield">
	<h2>Registration Form</h2>
		<fieldset class="regfieldbox">
		<legend>Register: </legend>
				<form  action="" name="prereg.php" method="post">
					<table class="fieldtable" align="center" border="0">
					<tbody>
						<tr>
							<td class="viewtd">E-mail: </td>
							<td><input type="email" name="email" value="<?php echo $email; ?>" required pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}"><br><?php echo $emailerror; ?></td>
						</tr>
						<tr>
							<td>Username: </td>
							<td><input type="text" name="username" maxlength="12" size="20" value="<?php echo $name; ?>" required><br><?php echo $usererror; ?></td>
						</tr>
						<tr>
							<td>Password: </td>
							<td><input type="password" name="password" minlength="6" size="20" required></td>
						</tr>
						<tr>
							<td>Confirm Password: </td>
							<td><input type="password" name="confirmpwd" minlength="6" size="20" required><br><?php echo $passerror; ?></td>
						</tr>
						<tr>
							<td>Register as: </td>
							<td><input type="radio" name="type" value="employer" required>Employer<br>
							<br>
							<input type="radio" name="type" value="employee">Employee</td>
						</tr>
						<tr>
							<td><input type="hidden" name="regdate" value=<?php echo $regdate ?> readonly></td>
						</tr>
					</tbody>
					</table>
					<br>
					<input type="reset" value="Reset">
					<input name="submitreg" type="submit" value="Submit">
				</form>
			</fieldset>
			<p><b><i><a href="userlogin.php">Login page</a></b></p>
			<p><b><i><a href="index.php">Back to Home page </a></b></p>
		</div>
	</body>
</html>