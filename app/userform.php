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
		<h2>Apply Form</h2>
		<table style="width:30%">
		<?php
		extract($_POST);

				echo"<tr>";
				echo "<td>Name: </td>";
				echo "<td>$name</td>";
				echo"</tr>";
				echo"<tr>";
				echo "<td>Age: </td>";
				echo "<td>$age";
				echo"</tr>";
				echo"<tr>";
				echo "<td>Work Experience: </td>";
				echo "<td>$job</td>";
				echo"</tr>";
				echo"<tr>";
				echo "<td>Contact Number: </td>";
				echo "<td>$contact</td>";
				echo"</tr>";
				echo"<tr>";
				echo "<td>E-mail: </td>";
				echo "<td>$email</td>";
				echo"</tr>";
		?>
		</table>
		<br>
		<input type="submit" value="Main Page">
	</body>
</html>