<?php
session_start();
if(!$_SESSION['username']="username"){
header("location:login.php");
}
else{

	header("location:index.php");
}
?>

<html>
<body>
Log Masuk Berjaya
</body>
</html>