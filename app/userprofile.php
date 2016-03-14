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
		<h2>User Profile</h2>
		<table style="width:30%">
		<?php
		extract($_POST);

			echo "<tr>";
			echo "<td>User Name: </td>";
			echo "<td>$name</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>E-mail: </td>";
			echo "<td>$email</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Password: </td>";
			echo "<td>$pwd</td>";
			echo "</tr>";

		?>
		</table>
		<a href="userpage.html"><button type="button" value="update">Update Profile</a>
		<a href="index1.php"><button type="button" value="utama">Home</a>
	</body>
</html>