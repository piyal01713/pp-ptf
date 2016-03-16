<?php
include 'dbcon.php';
session_start();

$sql1 = "SELECT type FROM user WHERE username = '$_SESSION[user]' ";
    
    $results1 = mysqli_query($conn, $sql1);

    if(mysqli_num_rows($results1) > 0){
    while($userinfo1 = mysqli_fetch_array($results1)){
        $type = $userinfo1['type'];
        }
    }

$sql = "SELECT email FROM user WHERE username = '$_SESSION[user]' ";
$results = mysqli_query($conn, $sql);

if(isset($_POST['submitbtn'])){
	$to = 'farid@pocketpixel.com';
	$subject = "Application for part time job";
	$body = "Name: '$_POST[aname]', Age: '$_POST[age]', Have Work Experience: '$_POST[experience]', Attach Resume: '$_POST[file]', Contact: '$_POST[contact]', Email: '$_POST[email]' ";
	$headers = 'From: farid@pocketpixel.com';

	if(mail($to, $subject, $body, $headers)){
		echo'Successfully sent!';

	}else{
		echo 'Error';
	}

}else{
	echo "not sent";
}
?>
<html>
<head>
<title>Apply Preview</title>
<link rel="stylesheet" type="text/css" href="main.css">
</head>
	<body>
	<form name="form" action="formpreview.php" method="post">
		<h1>Form Preview</h1>
		<table style="width:30%">
			<tbody>
		<?php

			echo "<tr>";
			echo "<td class=''>Name:</td>";
            echo "<td class=''>".$_POST['aname']."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td class=''>Age:</td>";
            echo "<td class=''>".$_POST['age']."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td class=''>Have Work Experience:</td>";
            echo "<td class=''>".$_POST['experience']."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td class=''>Attach Resume:</td>";
            echo "<td class=''>".$_POST['file']."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td class=''>Contact Number:</td>";
            echo "<td class=''>".$_POST['contact']."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td class=''>Email:</td>";
            echo "<td class=''>".$_POST['email']."</td>";
            echo "</tr>";
		?>
			</tbody>
		</table>
		<br>
		<a class="cancelbtn" href="index.php">CANCEL</a>
		<button type="submit" name='submitbtn' >OK</button>
		</form>
	</body>
</html>