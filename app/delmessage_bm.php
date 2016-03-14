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
	<Title>Pengesahan Padam?</Title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>

	<h1>Adakah anda pasti mahu memadam pos ini?</h1>
	<input type="hidden" name="post_id" value="<?php echo $_GET['post_id']; ?>"/>
		<?php
		    $sql = "SELECT * FROM posts WHERE post_id= $_GET[post_id]";
			if($result=mysqli_query($conn, $sql)){
				$postinfo=mysqli_fetch_array($result);
<<<<<<< HEAD
				echo"<a href=\" index1.php \">BATAL </a>";
				 echo"<a href=\" deletepost.php?post_id=".$postinfo['post_id']." \">PASTI</a>";
=======
				echo"<a href=\" index.php \">CANCEL </a>";
				 echo"<a href=\" deletepost.php?post_id=".$postinfo['post_id']." \">CONFIRM</a>";
>>>>>>> upstream/master
			}else{
				echo "Error: ". "<br>" . $sql . "<br>" . mysqli_error($conn);
			}
		?>

</body>
</html>