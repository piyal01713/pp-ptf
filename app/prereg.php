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
	<body>
	<h2>Registration Form</h2>
		<form  action="register.php" name="myForm" method="Post">
			<table style="width:50%">
				<tr>
					<td>Register as: </td>
					<td><input type="radio" name="type" value="employer">Employer</td>
				</tr>
				<tr>
					<td></td>
					<td><input type="radio" name="type" value="employee">Employee</td>
				</tr>
				<tr>
					<td>E-mail: </td>
					<td><input type="email" name="email" required pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}"></td>
				</tr>
				<tr>
					<td>Username: </td>
					<td><input type="text" name="uname" maxlength="12" size="10" required> (not more than 12 characters)</td>
				</tr>
				<tr>
					<td>Password: </td>
					<td><input type="password" name="pwd" minlength="6" size="10" required> (at least 6 characters)</td>
				</tr>
			</table>
			<br>
			<input type="reset" value="Reset">
			<input type="submit" value="Submit">
		</form>
	</body>
</html>