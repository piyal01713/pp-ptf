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
<link rel="stylesheet" type="text/css" href="main.css">
</head>
	<body>
	<h2>Registration Form</h2>
		<form  action="register.php" name="myForm" method="Post">
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
				</tr>
			</tbody>
			</table>
			<br>
			<input type="reset" value="Reset">
			<input name="submitreg" type="submit" value="Submit">
		</form>
	</body>
</html>