<?php 
include "dbcon.php";

$sql = "DELETE FROM posts WHERE id='$_GET[id]'";

if(mysqli_query($conn,$sql)){
	header("refresh:1; url=Job-list.php");
}
else{
	echo "unsucessful". "<br>". mysqli_error($conn);;
}

?>