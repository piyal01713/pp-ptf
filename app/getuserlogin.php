<?php
//include external php file
include 'dbcon.php';
//start session
session_start();

//check if user session exist
if(isset($_SESSION['user'])){
	//redierct to link
    header('Location: index.php');
}

//set sql statement to select all record from "user" table
$sql="SELECT username,password FROM user ";
//run sql statement with query
$results=mysqli_query($conn, $sql);

//check if record exist
if(mysqli_num_rows($results) > 0){
	//loop to fetch record
	while($userinfo=mysqli_fetch_array($results)){

	//set error message
	$msg = '';

		//check login button is clicked
		if (isset($_POST['login'])){
			//check if username & password field input is a match
			if ($_POST['username'] == $userinfo['username'] && $_POST['password'] == $userinfo['password']){
				//set user session
		      	$_SESSION['user'] = $_POST['username'];
		      	//redirect to link
				header('Location: index.php');
			}else {
				//set error message
			    $msg = 'Wrong username or password';
		    }
		}
	}
}else{
	//display error message
	echo "Error: some codes are not correctly placed or one of the code spelling is wrong or does not match, please check back your codes";
}

?>