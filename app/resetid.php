 <?php
session_start();
include 'dbcon.php';
if($conn){

//insert data to table "posts"
$sql="ALTER TABLE posts AUTO_INCREMENT = 1";

if(mysqli_query($conn, $sql)){
}
else{
	echo "Error: ". "<br>" . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>
<html>
<head>
    <Title>Success!</Title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
</html>