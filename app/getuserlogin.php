<?php
include 'dbcon.php';
session_start();

if(isset($_SESSION['user'])){
    	header('Location: index.php');
}

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
				      $msg = 'Wrong username or password';
				    }
				}
			}
		}else{
			echo "Error: some codes are not correctly placed or one of the code spelling is wrong or does not match, please check back your codes";
		}

	?>