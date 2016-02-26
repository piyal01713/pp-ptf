<?php 
//if(!isset($_SESSION["usernmae"])){header("Location: login.php");}
include "dbcon.php";
$sql = "DELETE FROM posts WHERE post_id='$_GET[post_id]'";

if($result=mysqli_query($conn,$sql)){
		header("refresh:1; url=index1.php");
}
else{
	echo "unsucessful". "<br>". mysqli_error($conn);;
}

?>