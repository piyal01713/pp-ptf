<?php 
//if(!isset($_SESSION["usernmae"])){header("Location: login.php");}
include "dbcon.php";
session_start();

if(!isset($_SESSION['user'])){
	header('Location: userlogin.php');
}else{

	$sql = "SELECT * FROM posts WHERE post_id='$_GET[post_id]'";

	if($result=mysqli_query($conn,$sql)){
		$postinfo=mysqli_fetch_array($result);
		//header("refresh:1; url=job-list.php");
	}
	else{
		echo "unsucessful". "<br>". mysqli_error($conn);;
	}
}

?>
<html>
<head>
	<Title>Confirm Delete?</Title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>

	<h1>Are you confirm delete this post?</h1>
	<input type="hidden" name="post_id" value="<?php echo $_GET['post_id']; ?>"/>
		<?php
		    $sql = "SELECT * FROM posts WHERE post_id= $_GET[post_id]";
			if($result=mysqli_query($conn, $sql)){
				$postinfo=mysqli_fetch_array($result);
				echo"<a href=\" index.php \">CANCEL </a>";
				 echo"<a href=\" deletepost.php?post_id=".$postinfo['post_id']." \">CONFIRM</a>";
			}else{
				echo "Error: ". "<br>" . $sql . "<br>" . mysqli_error($conn);
			}
		?>

</body>
</html>