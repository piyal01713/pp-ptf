<?php
date_default_timezone_set("Asia/Kuala_Lumpur");
$regdate = date("Y.m.d");
$msg = '';

$sql1="SELECT username FROM user ";
$results1=mysqli_query($conn, $sql1);

		if(mysqli_num_rows($results1) > 0){

			while($userinfo=mysqli_fetch_array($results1)){
			$userinfo['username'];
			}
		}
?>
<html>
<head><title>Job Finder</title>
<<<<<<< HEAD
	<style>
	table, th, td {
	    border: 1px solid white;
	}
	th, td {
	    padding: 5px;
	}
	</style>
=======
<link rel="stylesheet" type="text/css" href="main.css">
>>>>>>> upstream/master
</head>
	<body>
	<h2>Borang Mendaftar</h2>
		<form  action="register.php" name="myForm" method="Post">
<<<<<<< HEAD
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
=======
			<table style="width:50%" border="0">
			<tbody>
				<tr>
					<td>E-mail: </td>
					<td><input type="email" name="email" required pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}"></td>
				</tr>
				<tr>
					<td>Username:<?php echo $msg; ?></td>
					<td><input type="text" name="username" maxlength="12" size="10" required> (not more than 12 characters)</td>
				</tr>
				<tr>
					<td>Password: </td>
					<td><input type="password" name="password" minlength="6" size="10" required> (at least 6 characters)</td>
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
>>>>>>> upstream/master
				</tr>
			</tbody>
			</table>
			<br>
<<<<<<< HEAD
			<input type="reset" value="Tetap Semula">
			<input type="submit" value="Hantar">
=======
			<input type="reset" value="Reset">
			<input name="submitreg" type="submit" value="Submit">
>>>>>>> upstream/master
		</form>
	</body>
</html>