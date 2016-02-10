<?php 
include "dbcon.php";

$sql = "DELETE FROM posts WHERE id='$_GET[id]'";

if(mysqli_query($conn,$sql)){
	header("refresh:1; url=job-list.php");
}
else{
	echo "unsucessful". "<br>". mysqli_error($conn);;
}

?>
<html>
<head>
	<Title>Confirm Delete?</Title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<h1>Are you sure you want to Delete</h1>
	<a href="delmessage.php">Yes></a>
</body>
</html>