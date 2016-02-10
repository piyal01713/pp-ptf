<?php
include 'dbcon.php';

if(!isset($_POST['submitBtn'])){
	$sql = "SELECT * FROM posts WHERE id= $_GET[id]";
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

	$update="UPDATE posts SET `work`='$_POST[work]',
		`employer`='$_POST[employer]',
		`salary`='$_POST[salary]',
		`location`='$_POST[location]',
		`scope`='$_POST[scope]',
		`addinfo`='$_POST[addinfo]',
		`jobcat`='$_POST[jobcat]',
		`loccat`='$_POST[loccat]',
		`date_posted`='$_POST[date_posted]' WHERE id='$_POST[id]'";
	     if(mysqli_query($conn, $update)){
		    header('Location: Job-list.php');	
	     }else{
	     	echo "Error: ". "<br>" . $update . "<br>" . mysqli_error($conn);
	     }
}
?>
<html>
<body>
<form name="create-post" action="updatepost.php" method="post">
<h1>Edit Post</h1>
<table border="0">
    <tbody>
        <tr>
            <!-- echo $_GET['id'] is for displaying all the selected value with selected id only-->
	        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"/>
            <td>Job Title:<br><br></td>
            <td><input name="work" type="text" value="<?php echo $postinfo['work']; ?>"><br><br></td>
        </tr>
        <tr>
            <td>Company:<br><br></td>
            <td><input name="employer" type="text" value="<?php echo $postinfo['employer']; ?>"><br><br></td>
        </tr>
        <tr>
            <td>Salary:<br><br></td>
            <td>RM <input name="salary" type="text" value="<?php echo $postinfo['salary']; ?>"> (per hour)<br><br></td>
        </tr>
        <tr>
            <td>Address:<br><br></td>
            <!-- setting text area box size rows= height, cols= width, maxlength= char limit  -->
            <td><textarea rows="7" cols="40" maxlength="2000" name="location"><?php echo $postinfo['location']; ?></textarea><br><br></td>
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
            <form action="demo_form.asp" method="get">
                <input type="submit" name="submitBtn" value="SAVE">
            </form>
        </td>
    </tr>
</table>
</form>
</body>
</html>