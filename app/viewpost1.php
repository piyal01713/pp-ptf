<?php
//if(!isset($_SESSION["username"])){header("Location: login.php");}
include 'dbcon.php';

	$sql = "SELECT * FROM posts WHERE post_id= $_GET[post_id]";
			if($result=mysqli_query($conn, $sql)){
				$postinfo=mysqli_fetch_array($result);
			}else{
				echo "Error: ". "<br>" . $sql . "<br>" . mysqli_error($conn);
			}

if(isset($_POST['editBtn'])){
	header('Location: updatepost.php');
}
?>
<html>
<head>
    <Title>View Post</Title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<form name="create-post" action="updatepost.php" method="post">
<h1>View Post</h1>
<table border="0" width="50%">
    <tbody>
        <tr>
        <!-- echo $_GET['id'] is for displaying all the selected value with selected id only-->
	        <input type="hidden" name="post_id" value="<?php echo $_GET['post_id']; ?>"/>
            <td>Job Title:<br><br></td>
            <td><?php echo $postinfo['work']; ?><br><br></td>
        </tr>
        <tr>
            <td>Company:<br><br></td>
            <td><?php echo $postinfo['employer']; ?><br><br></td>
        </tr>
        <tr>
            <td>Salary:<br><br></td>
            <td>RM<?php echo $postinfo['salary']; ?> per hour<br><br></td>
        </tr>
        <tr >
            <td>Address:<br><br></td>
            <td><?php echo $postinfo['location']; ?><br><br></td>
        </tr>
        <tr>
            <td>Job Scope:<br><br></td>
            <td><?php echo $postinfo['scope']; ?><br><br></td>
        </tr>
        <tr>
            <td>Additional Info:<br><br></td>
            <td><?php echo $postinfo['addinfo']; ?><br><br></td>
        </tr>
        <tr>
            <td>Job Category:<br><br></td>
            <td><?php echo $postinfo['jobcat']; ?><br><br></td>
        </tr>
        <tr>
            <td>Location Category:<br><br></td>
            <td><?php echo $postinfo['loccat']; ?><br><br></td>
        </tr>
        <tr>
            <td>Date of Post:<br><br></td>
            <td><?php echo $postinfo['date_posted']; ?><br><br></td>
        </tr>
        <tr>
        <?php
            $sql = "SELECT * FROM posts WHERE post_id= $_GET[post_id]";
		if($result=mysqli_query($conn, $sql)){
			$postinfo=mysqli_fetch_array($result);
			 echo"<td colspan='2'><a class='editlink' href=\" updatepost.php?post_id=".$postinfo['post_id']." \">EDIT</a></td></td>";
		}else{
			echo "Error: ". "<br>" . $sql . "<br>" . mysqli_error($conn);
		}
            ?>
        </tr>
    </tbody>
</table>
</form>
</body>
</html>