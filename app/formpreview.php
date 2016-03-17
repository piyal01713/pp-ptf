<?php
$name = $_POST['aname'];
$age = $_POST['age'];
$experience = $_POST['experience'];
$area = $_POST['area'];
$file = $_POST['file'];
$contact = $_POST['contact'];
$email = $_POST['email'];

include 'dbcon.php';
session_start();

$sql1 = "SELECT type FROM user WHERE username = '$_SESSION[user]' ";
$results1 = mysqli_query($conn, $sql1);

if(mysqli_num_rows($results1) > 0){
    while($userinfo1 = mysqli_fetch_array($results1)){
        $type = $userinfo1['type'];
        }
}

?>
<html>
<head>
<title>Apply Preview</title>
<link rel="stylesheet" type="text/css" href="main.css">
</head>
	<body>
	<form  action="send.php" name="myForm" method="Post">
            <table style="width:60%">
                <tr>
                    <td>Name: </td>
                    <td><input type="text" name="aname" size="30" value="<?php echo $_POST['aname']; ?>" readonly></td>
                </tr>
                <tr>
                    <td>Age: </td>
                    <td><input type="number" name="age" min="15" max="60" value="<?php echo $_POST['age']; ?>" readonly></td>
                </tr>
                <tr>
                    <td>Work Experience: </td>
                    <td><input type="text" name="experience" value="<?php echo $_POST['experience']; ?>" readonly><br></td>
                </tr>
                <tr>
                    <td>Attach Resume: </td>
                    <td><input type="file" name="file" value="<?php $_GET['file']; ?>" ></td>
                </tr>
                <tr>
                    <td>Phone Number: </td>
                    <td><input type="tel" name="contact" size="10" required pattern="(\+?\d[- .]*){10,11}$" value="<?php echo $_POST['contact']; ?>" readonly></td>
                </tr>
                <tr>
                    <td>E-mail: </span></td>
                    <td><input type="email" name="email" required pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" value="<?php echo $_POST['email']; ?>" readonly></td>
                </tr>
            </table>
            <br>
            <input type="reset" value="Reset">
            <input type="submit" value="Submit">
        </form>
	</body>
</html>