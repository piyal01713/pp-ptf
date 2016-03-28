<?php
include 'dbcon.php';
session_start();

if(!isset($_SESSION['user'])){
        header('Location: userlogin.php');
}

$sql="SELECT user_id FROM user WHERE username = '$_SESSION[user]' ";

    $results=mysqli_query($conn, $sql);

        if(mysqli_num_rows($results) > 0){

            while($userinfo=mysqli_fetch_array($results)){
                $userid =  $userinfo['user_id'];
            }
        }else{
            echo "Error: some codes are not correctly placed or one of the code spelling is wrong or does not match, please check back your codes";
        }
?>
<html>
<head>
    <Title>Create Post</Title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<!-- Form for data input -->
<form name="create-post" action="addpost.php" method="post">
<?php
date_default_timezone_set("Asia/Kuala_Lumpur");
$date = date("Y.m.d");
?>

<h1>Create Post</h1>
    <table border="0">
        <tbody>
            <tr>
                <td>Job Title:<br><br></td>
                <td><input name="work" type="text" required><br><br></td>
            </tr>
            <tr>
                <td>Employer:<br><br></td>
                <td><input name="employer" type="text" required><br><br></td>
            </tr>
            <tr>
                <td>Salary:<br><br></td>
                <td>RM <input name="salary" type="number" required> (Per Hour)<br><br></td>
            </tr>
            <tr>
                <td>Address:<br><br></td>
                <!-- setting text area box size rows= height, cols= width, maxlength= char limit  -->
                <td><textarea rows="7" cols="40" maxlength="2000" name="location" required></textarea><br><br></td>
            </tr>
            <tr>
                <td>Scope of Work:<br><br></td>
                <!-- setting text area box size rows= height, cols= width, maxlength= char limit  -->
                <td><textarea rows="7" cols="40" maxlength="2000" name="scope"></textarea><br><br></td>
            </tr>
            <tr>
                <td>Additinal Info:<br><br></td>
                <!-- setting text area box size rows= height, cols= width, maxlength= char limit  -->
                <td><textarea rows="7" cols="40" maxlength="2000" name="addinfo"></textarea><br><br></td>
            </tr>
            <tr>
                <td>Job Category:<br><br></td>
                <!-- setting text area box size rows= height, cols= width, maxlength= char limit  -->
                <td><select name="jobcat">
                    <option values="Services">Services</option>
                    <option values="Food">Food</option>
                </select><br><br></td>
            </tr>
            <tr>
                <td>Location Category:<br><br></td>
                <!-- setting text area box size rows= height, cols= width, maxlength= char limit  -->
                <td><select name="loccat">
                <option value="Kuala Lumpur">Kuala Lumpur</option>
                <option value="Selangor">Selangor</option>
                </select><br><br></td>
            </tr>
            <tr>
                <td>Date Post:<br><br></td>
                <td><input name="date_posted" type="text" value="<?php echo $date; ?>" readonly><br><br></td>
            </tr>
        </tbody>
    </table>
    <input name="userid" type="hidden" value="<?php echo $userid; ?>">
    <table ="0">
        <tr>
            <td>
                <a class="cancelbtn" href="index.php">CANCEL</a>
                <form action="demo_form.asp" method="get">
                    <input class="button" type="reset" name="resetBtn" value="RESET">
                    <input class="button" type="submit" name="submitBtn" value="POST">
                </form>
            </td>
        </tr>
    </table>
</form>
</body>
</html>