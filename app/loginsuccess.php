<?php
session_start();
if(!$_SESSION['username']="username"){
header("location:login.php");
}
?>

<html>
<body>
Login Successful
</body>
</html>