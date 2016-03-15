<?php
//if(!isset($_SESSION["username"])){header("Location: login.php");}
include 'dbcon.php';
session_start();

    if(!isset($_SESSION['user'])){
        header('Location: userlogin.php');
    }

	$sql = "SELECT * FROM posts WHERE post_id= $_GET[post_id]";
			if($result=mysqli_query($conn, $sql)){
				$postinfo=mysqli_fetch_array($result);
			}else{
				echo "Error: ". "<br>" . $sql . "<br>" . mysqli_error($conn);
			}

if(isset($_POST['editBtn'])){
	header('Location: userpage_bm.php');
}
?>
<html>
	<head><title>Job Finder</title>
		<style>
		table, th, td {
		    border: 1px solid white;
		}
		th, td {
		    padding: 5px;
		}
		</style>
	</head>
	<body>
		<h2>Profile Pengguna</h2>
		<table style="width:30%">
		
		<?php
		extract($_POST);

			echo "<tr>";
			echo "<td>Nama Pengguna: </td>";
			echo "<td>$nama</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Emel: </td>";
			echo "<td>$emel</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Kata Laluan: </td>";
			echo "<td>$pswd</td>";
			echo "</tr>";

		?>
		</table>
		<?php
            $sql = "SELECT * FROM posts WHERE post_id= $_GET[post_id]";
			if($result=mysqli_query($conn, $sql)){
				$postinfo=mysqli_fetch_array($result);
				 echo"<td colspan='2'><a class='editlink' href=\" userpage_bm.php?post_id=".$postinfo['post_id']." \">EDIT</a></td></td>";
			}else{
				echo "Error: ". "<br>" . $sql . "<br>" . mysqli_error($conn);
			}
        ?>
		<a href="userpage_bm.html"><button type="button" value="update">Update Profile</a>
		<a href="index1.php"><button type="button" value="utama">Utama</a>
	</body>
</html>