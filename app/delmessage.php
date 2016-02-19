<?php 
//if(!isset($_SESSION["usernmae"])){header("Location: login.php");}
include "dbcon.php";

$sql = "SELECT * FROM posts WHERE id='$_GET[id]'";

if($result=mysqli_query($conn,$sql)){
	$postinfo=mysqli_fetch_array($result);
	//header("refresh:1; url=job-list.php");
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

	<h1>Are you sure you want to delete this post?</h1>
	<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"/>
		<?php
		    $sql = "SELECT * FROM posts WHERE id= $_GET[id]";
			if($result=mysqli_query($conn, $sql)){
				$postinfo=mysqli_fetch_array($result);
				echo"<a href=\" index1.php \">CANCEL </a>";
				 echo"<a href=\" deletepost.php?id=".$postinfo['id']." \">CONFIRM</a>";
			}else{
				echo "Error: ". "<br>" . $sql . "<br>" . mysqli_error($conn);
			}
		?>

</body>
</html>