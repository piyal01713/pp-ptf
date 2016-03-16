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
	$body = "Nama: '$_POST[aname]', Umur: '$_POST[age]', Pengalaman Bekerja: '$_POST[experience]', Lampirkan Resume: '$_POST[file]', Nombor Telefon: '$_POST[contact]', Emel: '$_POST[email]' ";
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
	<form name="form" action="formpreview_bm.php" method="post">
		<h1>Lihat Borang</h1>
		<table style="width:30%">
			<tbody>
		<?php

			echo "<tr>";
			echo "<td class=''>Nama:</td>";
            echo "<td class=''>".$_POST['aname']."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td class=''>Umur:</td>";
            echo "<td class=''>".$_POST['age']."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td class=''>Pengalaman Bekerja:</td>";
            echo "<td class=''>".$_POST['experience']."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td class=''>Lampirkan Resume:</td>";
            echo "<td class=''>".$_POST['File']."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td class=''>Nombor Telefon:</td>";
            echo "<td class=''>".$_POST['contact']."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td class=''>Emel:</td>";
            echo "<td class=''>".$_POST['email']."</td>";
            echo "</tr>";
		?>
			</tbody>
		</table>
		<br>
		<a class="cancelbtn" href="index.php">BATAL</a>
		<button type="submit" name='submitbtn' >OK</button>
		</form>
	</body>
</html>