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
		<h2>Profile Pengguna</h2>
		<table style="width:30%">
		<?php
		extract($_POST);

			echo "<tr>";
			echo "<td>Nama Pengguna: </td>";
			echo "<td>$name</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Emel: </td>";
			echo "<td>$email</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Kata Laluan: </td>";
			echo "<td>$pwd</td>";
			echo "</tr>";

		?>
		</table>
		<a href="userpage.html"><button type="button" value="update">Update Profile</a>
		<a href="index1.php"><button type="button" value="utama">Utama</a>
	</body>
</html>