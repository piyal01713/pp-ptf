<?php
include'dbcon.php';
include'register.php';
date_default_timezone_set("Asia/Kuala_Lumpur");
$regdate = date("Y.m.d");
?>
<html>
<head><title>Register</title>
<link rel="stylesheet" type="text/css" href="main.css">
</head>
	<body>
	<div class="middlefield">
	<h2>Registration Form</h2>
		<fieldset class="regfieldbox">
		<legend>Register: </legend>
				<form  action="" name="myForm" method="Post">
					<table class="fieldtable" align="center" border="0">
					<tbody>
						<tr>
							<td class="viewtd">Emel: </td>
							<td><input type="email" name="emel" required pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}"><br><?php echo $emailvalid; ?></td>
						</tr>
						<tr>
							<td>Nama Pengguna: </td>
							<td><input type="text" name="pnama" maxlength="12" size="20" required><br><?php echo $uservalid; ?></td>
						</tr>
						<tr>
							<td>Kata Laluan: </td>
							<td><input type="password" name="klaluan" minlength="6" size="20" required></td>
						</tr>
						<tr>
							<td>Pastikan Kata Laluan: </td>
							<td><input type="password" name="pklaluan" minlength="6" size="20" required><br><?php echo $confirmpswd; ?></td>
						</tr>
						<tr>
							<td>Daftar Sebagai: </td>
							<td><input type="radio" name="kerja" value="employer">Syarikat<br>
							<br>
							<input type="radio" name="kerja" value="employee">Pekerja</td>
						</tr>
						<tr>
							<td>Tarikh: </td>
							<td><input type="text" name="tarikhdaf" value=<?php echo $regdate ?> readonly></td>
						</tr>
					</tbody>
					</table>
					<br>
					<input type="reset" value="Tetap Semula">
					<input name="submitreg" type="submit" value="Hantar">
				</form>
			</fieldset>
		</div>
	</body>
</html>