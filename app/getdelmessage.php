<?php
//inlcude external php file
include "dbcon.php";
//start user session
session_start();

//check if user session exist
if(!isset($_SESSION['user'])){
	//redirect to link
	header('Location: userlogin.php');

}else{
	//set sql statement to select all record from "posts" table
	$sql = "SELECT * FROM posts WHERE post_id='$_GET[post_id]'";
	//check query run
	if($result=mysqli_query($conn,$sql)){
		//fetch record
		$postinfo=mysqli_fetch_array($result);

	}else{
		//diplay error message
		echo "unsucessful". "<br>". mysqli_error($conn);
		
	}
}
?>