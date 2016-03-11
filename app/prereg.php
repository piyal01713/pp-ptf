<?php
include'dbcon.php';
include'register.php';
date_default_timezone_set("Asia/Kuala_Lumpur");
$regdate = date("Y.m.d");
?>
<html>
<<<<<<< HEAD
<head><title>Register</title>
<link rel="stylesheet" type="text/css" href="main.css">
</head>
	<body>
	<div class="middlefield">
	<h2>Registration Form</h2>
		<fieldset class="regfieldbox">
		<legend>Register: </legend>
				<form  action="" name="myForm" method="Post">
					<table class="fieldtable" align="center" border="0">
					<tbody>
						<tr>
							<td class="viewtd">E-mail: </td>
							<td><input type="email" name="email" required pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}"><br><?php echo $emailvalidation; ?></td>
						</tr>
						<tr>
							<td>Username: </td>
							<td><input type="text" name="username" maxlength="12" size="20" required><br><?php echo $uservalidation; ?></td>
						</tr>
						<tr>
							<td>Password: </td>
							<td><input type="password" name="password" minlength="6" size="20" required></td>
						</tr>
						<tr>
							<td>Confirm Password: </td>
							<td><input type="password" name="confirmpwd" minlength="6" size="20" required><br><?php echo $confirmpwd; ?></td>
						</tr>
						<tr>
							<td>Register as: </td>
							<td><input type="radio" name="type" value="employer">Employer<br>
							<br>
							<input type="radio" name="type" value="employee">Employee</td>
						</tr>
						<tr>
							<td>Date: </td>
							<td><input type="text" name="regdate" value=<?php echo $regdate ?> readonly></td>
						</tr>
					</tbody>
					</table>
					<br>
					<input type="reset" value="Reset">
					<input name="submitreg" type="submit" value="Submit">
				</form>
			</fieldset>
		</div>
=======
<head><title>Job Finder</title>
	<style>
	table, th, td {
	    border: 1px solid white;
	}
	th, td {
	    padding: 5px;
	}
	</style>
<link rel="stylesheet" type="text/css" href="main.css">
</head>
	<body>
	<h2>Borang Mendaftar</h2>
		<form  action="register.php" name="myForm" method="Post">
			<table style="width:55%">
				<tr>
					<td>Daftar sebagai: </td>
					<td><input type="radio" name="type" value="employer">Syarikat</td>
				</tr>
				<tr>
					<td></td>
					<td><input type="radio" name="type" value="employee">Pekerja</td>
				</tr>
				<tr>
					<td>Emel: </td>
					<td><input type="email" name="email" required pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}"></td>
				</tr>
				<tr>
					<td>Nama Pengguna: </td>
					<td><input type="text" name="uname" maxlength="12" size="10" required> *tidak lebih 12 abjad</td>
				</tr>
				<tr>
					<td>Kata Laluan: </td>
					<td><input type="password" name="pwd" minlength="6" size="10" required> *sekurangnya 6 abjad</td>
				</tr>
			<input type="reset" value="Tetap Semula">
			<input type="submit" value="Hantar">
		</form>
>>>>>>> upstream/master
	</body>
</html>