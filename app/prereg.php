<?php

date_default_timezone_set("Asia/Kuala_Lumpur");
$date = date("Y.m.d");

?>
<html>
<head><title>Job Finder</title>
<style>
table, th, td {
    border: 1px solid white;
}
th, td {
    padding: 5px;
}
</style>
</head>
	<h2>Registration Form</h2>
		<form  action="addregister.php" method="Post">
			<table style="width:30%">
				<tr>
					<td>Name: </td>
					<td><input type="text" name="name" size="30" required></td>
				</tr>
				<tr>
					<td>E-mail: </td>
					<td><input type="email" name="email" required></td>
				</tr>
				<tr>
					<td>Username: </td>
					<td><input type="text" name="uname" maxlength="12" size="10" required> (not more than 12 characters)</td>
				</tr>
				<tr>
					<td>Password: </td>
					<td><input type="password" name="pwd" minlength="6" size="10" required> (at least 6 characters)</td>
				</tr>
				<tr>
				<td>Date registered:</td>
				<td><input type="text" name="datectd" value="<?php echo $date; ?>" readonly></td>
				</tr>
			</table>
			<br>
			<input type="reset" value="Reset">
			<input type="submit" value="Submit">
		</form>
	</body>
</html>