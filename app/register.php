<?php
include 'dbcon.php';
session_start();
if(isset($_SESSION['user'])){
    	header('Location: index.php');
} 
if($conn){

	$sql1="SELECT username,email FROM user WHERE username = '$_POST[username]' ";
	$results1=mysqli_query($conn, $sql1);

			if(mysqli_num_rows($results1) > 0){

				while($userinfo=mysqli_fetch_array($results1)){

				$uservalidation = '';
				$emailvalidation = '';
				$confirmpwd = '';

				$userinfo['username'];
				$userinfo['email'];


					if($_POST['email'] == $userinfo['email']){

						$emailvalidation = 'This email has already been registered';

					}elseif($_POST['username'] == $userinfo['username']){
							
							$uservalidation = 'This username already exist';

					}elseif($_POST['confirmpwd'] == $_POST['password']){

						$sql="INSERT INTO user(
								type,
								email,
								username,
								password,
								date_created)
							VALUES('$_POST[type]',
								'$_POST[email]',
								'$_POST[username]',
								'$_POST[password]',
								'$_POST[regdate]')";

							if(mysqli_query($conn, $sql)){
							echo "<h1>You have sucessfully registered</h1><br>";
							echo "<a href='userlogin.php'>Back to login page</a>";
							}else{
									echo "Error: ". "<br>" . $sql . "<br>" . mysqli_error($conn);
							}
					}else{

						$confirmpwd = 'It is not a match';
					}
					
				}
			}
mysqli_close($conn);
}
?>