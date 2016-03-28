<?php 
include "dbcon.php";
session_start();

$sql = "DELETE FROM posts WHERE post_id='$_GET[post_id]'";

if($result=mysqli_query($conn,$sql)){

		header("refresh:1; url=index1.php");

}else{

	echo "unsucessful". "<br>". mysqli_error($conn);

}
?>