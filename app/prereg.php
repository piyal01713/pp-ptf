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
<script>
	function validateForm() {
	    var x = document.forms["myForm"]["email"].value;
	    var atpos = x.indexOf("@");
	    var dotpos = x.lastIndexOf(".");
	    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
	        alert("Not a valid e-mail address");
	        return false;
	    }
	}
</script>
</head>
	<h2>Registration Form</h2>
		<form  action="register.php" name="myForm" onsubmit="return validateForm();" method="Post">
			<table style="width:40%">
				<tr>
					<td>Name: </td>
					<td><input type="text" name="name" size="30"></td>
				</tr>
				<tr>
					<td>E-mail: </td>
					<td><input type="email" name="email" value=" "></td>
				</tr>
				<tr>
					<td>Username: </td>
					<td><input type="text" name="uname" maxlength="12" size="10"> (not more than 12 characters)</td>
				</tr>
				<tr>
					<td>Password: </td>
					<td><input type="password" name="pwd" minlength="6" size="10"> (at least 6 characters)</td>
				</tr>
			</table>
			<br>
			<input type="reset" value="Reset">
			<input type="submit" value="Submit">
		</form>
	</body>
</html>