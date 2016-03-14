<?php
include 'dbcon.php';
	
 $sql="SELECT * FROM user";
 $result=mysqli_query($conn, $sql);

	$msg = '';

	if (isset($_POST['login']) && !empty($_POST['name']) 
	   && !empty($_POST['pwd'])) {
		
	   if ($userinfo['username'] == $userinfo['username'] && 
	      $userinfo['password'] == $userinfo['password']){	      
	      header('Location: index.php');
	   }else {
	      $msg = 'Salah memasukkan nama pengguna atau kata laluan';
	   }
	}
	?>
<html>
<head><title>Log Masuk</title></head>
	<body>
		<form action="login.php" method="Post">
			<center><br>
				<h2>Mencari Pekerja atau Pekerjaan?</h2>
				<fieldset style="width:250">
					<legend>Log Masuk: </legend>
					<table>
						<tr>
							<td>Nama pengguna: </td>
							<td>Kata Laluan: </td>
						</tr>
						<tr>
							<td><input type="text" name="name" maxlength="15" size="20" required autocomplete="off"></td>
							<td><input type="password" name="pwd" minlength="6" size="20" required></td>

						</tr>
					</table>
					<br>
					<input type="submit" name="login" value="Log Masuk">
					<input type="reset" value="Tetap Semula">
				</fieldset>
				<p><i>atau</i></p>
				<p><b><i>Pangguna Baru? Mendaftar <a href="prereg.php">sini. </a></b></p>
			</center>
		<form>
	</body>
</html>