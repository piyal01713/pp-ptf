<?php
include'getform.php';
?>

<script type="text/javascript">
function show() { document.getElementById('area').style.display = 'block'; }
function hide() { document.getElementById('area').style.display = 'none'; }
</script>

<html>
<head>
<title>Job Finder</title>
<link rel="stylesheet" type="text/css" href="main.css">
</head>
	<body>
		<h2>Apply Form</h2>
		<form  action="send.php" name="myForm" method="Post">
			<table name="formtable" style="width:60%">
				<tr>
					<td>To: </td>
					<td><input type="text" name="tosend" size="30" value="<?php echo $userinfo['email'] ?>" readonly></td>
				</tr>
				<tr>
					<td>Name: </td>
					<td><input type="text" name="aname" size="30" autofocus></td>
				</tr>
				<tr>
					<td>Age: </td>
					<td><input type="number" name="age" min="15" max="60"></td>
				</tr>
				<tr>
					<td>Work Experience: </td>
					<td><input type="radio" name="experience" value="yes" onclick="show('area');">Yes <br><textarea value="None" row="5" column="30" name="area" placeholder="Experience About Previous Job" id="area" style="display:none;"></textarea></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="radio" name="experience" value="no" onclick="hide('area');">No </td>
				</tr>
				<tr>
					<td>Attach Resume: </td>
					<td><input type="file" name="file"></td>
				</tr>
				<tr>
					<td>Phone Number: </td>
					<td><input type="tel" name="contact" size="10" required pattern="(\+?\d[- .]*){10,11}$" required> (Format: 0123456789 / 01123456789) </td>
				</tr>
				<tr>
					<td>E-mail: </span></td>
					<td><input type="email" name="email" required pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}"> (Ex: shahnaz@gmail.com)</td>
				</tr>
			</table>
			<br>
			<a class="cancelbtn" href="index.php">CANCEL</a>
			<input type="reset" value="RESET">
			<input type="submit" value="SUBMIT">
		</form>
	</body>
</html>