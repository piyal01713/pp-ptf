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
		<h2>Details</h2>
		<table style="width:30%">

			<?php
			extract($_POST);

				echo "<tr>";
				echo "<td>Name: </td>";
				echo "<td>$name</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td>E-mail: </td>";
				echo "<td>$email";
				echo "</tr>";
				echo "<tr>";
				echo "<td>Username: </td>";
				echo "<td>$uname</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td>Password: </td>";
				echo "<td>$pwd</td>";
				echo "</tr>";
			?>
		</table>
		<br>
		<input type="submit" value="OK">
	</body>
</html>