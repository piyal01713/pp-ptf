<?php 
include "dbcon.php";
session_start();

if(!isset($_SESSION['user'])){

	header('Location: userlogin.php');

}else{

	$sql = "SELECT * FROM posts WHERE post_id='$_GET[post_id]'";

	if($result=mysqli_query($conn,$sql)){

		$postinfo=mysqli_fetch_array($result);

	}else{

		echo "unsucessful". "<br>". mysqli_error($conn);
		
	}
}
?>