<?php
include 'dbcon.php';
$sql = "SELECT * FROM posts WHERE id= $_GET[id]";

$result=mysqli_query($conn,$postinfo);

$postinfo=mysqli_fetch_array($result);

?>
<html>
<body>
<form name="create-post" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<h1>Edit Post</h1>
<table border="0">
    <tbody>
        <tr>
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
                <td>Location:<br><br></td>
                <!-- setting text area box size rows= height, cols= width, maxlength= char limit  -->
                <td><textarea rows="7" cols="40" maxlength="2000" name="location" value="<?php echo $postinfo['location']; ?>"></textarea><br><br></td>
        </tr>
        <tr>
                <td>Job Scope:<br><br></td>
                <!-- setting text area box size rows= height, cols= width, maxlength= char limit  -->
                <td><textarea rows="7" cols="40" maxlength="2000" name="scope" value="<?php echo $postinfo['scope']; ?>"></textarea><br><br></td>
        </tr>
        <tr>
                <td>Additional Info:<br><br></td>
                <!-- setting text area box size rows= height, cols= width, maxlength= char limit  -->
                <td><textarea rows="7" cols="40" maxlength="2000" name="addinfo" value="<?php echo $postinfo['addinfo']; ?>"></textarea><br><br></td>
        </tr>
        <tr>
                <td>Job Category:<br><br></td>
                <!-- setting text area box size rows= height, cols= width, maxlength= char limit  -->
                <td><select name="jobcat" value="<?php echo $postinfo['jobcat']; ?>">
                <option values="Services">Services</option>
                <option values="Food">Food</option>
                </select>
                <br><br></td>
        </tr>
        <tr>
                <td>Location Category:<br><br></td>
                <!-- setting text area box size rows= height, cols= width, maxlength= char limit  -->
                <td><select name="loccat" value="<?php echo $postinfo['loccat']; ?>">
                <option value="Kuala Lumpur">Kuala Lumpur</option>
                <option value="Selangor">Selangor</option>
                </select>
                <br><br></td>
        </tr>
        <tr>
                <td>Date:<br><br></td>
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
<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"/>
</form>
<?php
if(isset($_POST['submitBtn'])){
	$update= "UPDATE posts SET `work`='$_POST[work]',`employer`='$_POST[employer]',`salary`='$_POST[salary]',`location`='$_POST[location]',`scope`='$_POST[scope]',`addinfo`='$_POST[addinfo]',`jobcat`='$_POST[jobcat]',
	 `loccat`='$_POST[loccat]',`date_posted`='$_POST[date_posted]' WHERE id = $_POST[id]";
	 mysqli_query($update) or die (mysqli_error());
	 header("Location: Job-list.php");
}
?>
<script>
function myFunction() {
    document.getElementById("PTF Test").reset();
}
</script>
</body>
</html>