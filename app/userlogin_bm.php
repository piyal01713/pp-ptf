<?php
include 'dbcon.php';
session_start();

 $sql="SELECT * FROM user ";

 $results=mysqli_query($conn, $sql);

		if(mysqli_num_rows($results) > 0){

			while($userinfo=mysqli_fetch_array($results)){
			$msg = '';

				if (isset($_POST['login'])){
					if ($_POST['username'] == $userinfo['username'] && 
				      $_POST['password'] == $userinfo['password']){
				      	$_SESSION['user'] = $_POST['username'];
						header('Location: index.php');
					}else {
				      $msg = 'Salah memasukkan nama pengguna atau kata laluan';
				    }
				}
			}
		}else{
			echo "Error: some codes are not correctly placed or one of the code spelling is wrong or does not match, please check back your codes";
		}

	?>
<html>
<head>
<title>Log Masuk</title>
<link rel="stylesheet" type="text/css" href="main.css">
</head>
	<body>
		<form action="userlogin.php" method="Post">
			<center>
				<h2>Mencari Kerja atau Pekerja?</h2>
				<fieldset style="width:250">
					<legend>Log Masuk: </legend>
					<table>
						<tr>
							<td>Nama Pengguna: </td>
							<td>Kata Laluan: </td>
						</tr>
						<tr>
							<td><input type="text" name="username" maxlength="15" size="20" required autocomplete="off"></td>
							<td><input type="password" name="password" minlength="6" size="15" required></td>
						</tr>
						<tr>
						<td class="err"colspan="2"><?php echo $msg; ?></td>
						</tr>
					</table>
					<br>
					<input type="submit" name="login" value="Log Masuk">
					<input type="reset" value="Tetap semula">
				</fieldset>
				<p><i>or</i></p>
				<p><b><i>Pengguna Baru? Mendaftar <a href="prereg.php">sini. </a></b></p>
			</center>
		<form>
	</body>
</html>