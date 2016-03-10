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
	<h2>Borang Mendaftar</h2>
		<form  action="register.php" name="myForm" method="Post">
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
				</tr>
			</table>
			<br>
			<input type="reset" value="Tetap Semula">
			<input type="submit" value="Hantar">
		</form>
	</body>
</html>