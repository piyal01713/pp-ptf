<?php
//if(!isset($_SESSION["username"])){header("Location: login.php");}
include 'dbcon.php';
if(!isset($_POST['submitBtn'])){
	$sql = "SELECT * FROM posts WHERE post_id= $_GET[post_id]";
		if($result=mysqli_query($conn, $sql)){
			$postinfo=mysqli_fetch_array($result);
		}else{
			echo "Error: ". "<br>" . $sql . "<br>" . mysqli_error($conn);
		}
}

if(isset($_POST['submitBtn'])){
	
$_POST['location']=mysqli_real_escape_string($conn, $_POST['location']);
$_POST['scope']=mysqli_real_escape_string($conn, $_POST['scope']);
$_POST['addinfo']=mysqli_real_escape_string($conn, $_POST['addinfo']);
$_POST['work']=mysqli_real_escape_string($conn, $_POST['work']);
$_POST['employer']=mysqli_real_escape_string($conn, $_POST['employer']);

	$update="UPDATE posts SET `work`='$_POST[work]',
		`employer`='$_POST[employer]',
		`salary`='$_POST[salary]',
		`location`='$_POST[location]',
		`scope`='$_POST[scope]',
		`addinfo`='$_POST[addinfo]',
		`jobcat`='$_POST[jobcat]',
		`loccat`='$_POST[loccat]',
		`date_posted`='$_POST[date_posted]' WHERE post_id='$_POST[post_id]'";
	     if(mysqli_query($conn, $update)){
		    header('Location: index1.php');	
	     }else{
	     	echo "Error: ". "<br>" . $update . "<br>" . mysqli_error($conn);
	     }
}
?>
<html>
<head>
    <Title>Edit Post</Title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<form name="create-post" action="updatepost.php" method="post">
<h1>Edit Post</h1>
<table border="0" width="40%">
    <tbody>
        <tr>
            <!-- echo $_GET['id'] is for displaying all the selected value with selected id only-->
	        <input type="hidden" name="post_id" value="<?php echo $_GET['post_id']; ?>"/>
            <td>Job Title:<br><br></td>
            <td><input required name="work" type="text" value="<?php echo $postinfo['work']; ?>" ><br><br></td>
        </tr>
        <tr>
            <td>Company:<br><br></td>
            <td><input required name="employer" type="text" value="<?php echo $postinfo['employer']; ?>"><br><br></td>
        </tr>
        <tr>
            <td>Salary:<br><br></td>
            <td>RM <input required name="salary" type="number" value="<?php echo $postinfo['salary']; ?>"> (per hour)<br><br></td>
        </tr>
        <tr>
            <td>Address:<br><br></td>
            <!-- setting text area box size rows= height, cols= width, maxlength= char limit  -->
            <td><textarea required rows="7" cols="40" maxlength="2000" name="location"><?php echo $postinfo['location']; ?></textarea><br><br></td>
        </tr>
        <tr>
            <td>Job Scope:<br><br></td>
            <td><textarea rows="7" cols="40" maxlength="2000" name="scope"><?php echo $postinfo['scope']; ?></textarea><br><br></td>
        </tr>
        <tr>
            <td>Additional Info:<br><br></td>
            <td><textarea rows="7" cols="40" maxlength="2000" name="addinfo"><?php echo $postinfo['addinfo']; ?></textarea><br><br></td>
        </tr>
        <tr>
            <td>Job Category:<br><br></td>
            <!-- Dropdown list for category -->
            <td><select name="jobcat">
	            <option value="<?php echo $postinfo['jobcat']; ?>" selected><?php echo $postinfo['jobcat']; ?></option>
	            <option values="Services">Services</option>
	            <option values="Food">Food</option>
            </select><br><br></td>
        </tr>
        <tr>
            <td>Location Category:<br><br></td>
            <!-- setting text area box size rows= height, cols= width, maxlength= char limit  -->
            <td><select name="loccat">
                <option value="<?php echo $postinfo['loccat']; ?>"><?php echo $postinfo['loccat']; ?></option>
                <option value="Kuala Lumpur">Kuala Lumpur</option>
                <option value="Selangor">Selangor</option>
            </select><br><br></td>
        </tr>
        <tr>
            <td>Date of Post:<br><br></td>
            <td><input name="date_posted" type="text" value="<?php echo $postinfo['date_posted']; ?>"><br><br></td>
        </tr>
    </tbody>
</table>

<table ="0">
    <tr>
        <td>
            <a class="cancelbtn" href="index1.php">CANCEL</a>
            <form action="demo_form.asp" method="get">
                <input type="submit" name="submitBtn" value="SAVE">
            </form>
        </td>
    </tr>
</table>
</form>
</body>
</html>