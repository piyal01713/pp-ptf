<?php
include 'dbcon.php';
session_start();
if(isset($_SESSION['user'])){
    	header('Location: index.php');
} 
if($conn){

	$sql1="SELECT pnama,emel FROM user WHERE pnama = '$_POST[pnama]' ";
	$results1=mysqli_query($conn, $sql1);

			if(mysqli_num_rows($results1) > 0){

				while($userinfo=mysqli_fetch_array($results1)){

				$uservalid = '';
				$emailvalid = '';
				$confirmpswd = '';

				$userinfo['pnama'];
				$userinfo['emel'];


					if($_POST['emel'] == $userinfo['emel']){

						$emailvalid = 'Emel ini telah mendaftar';

					}elseif($_POST['pnama'] == $userinfo['pnama']){
							
							$uservalid = 'This username already exist';

					}elseif($_POST['confirmpswd'] == $_POST['password']){

						$sql="INSERT INTO user(
								emel,
								pnama,
								klaluan,
								pklaluan,
								kerja,
								tarikhdaf)
							VALUES('$_POST[emel]',
								'$_POST[pnama]',
								'$_POST[klaluan]',
								'$_POST[pklaluan]',
								'$_POST[kerja]',
								'$_POST[tarikhdaf]')";

							if(mysqli_query($conn, $sql)){
							echo "<h1>Anda telah berjaya mendaftar</h1><br>";
							echo "<a href='userlogin_bm.php'>Log Masuk semula</a>";
							}else{
									echo "Error: ". "<br>" . $sql . "<br>" . mysqli_error($conn);
							}
					}else{

						$confirmpswd = 'It is not a match';
					}
					
				}
			}
mysqli_close($conn);
}
?>