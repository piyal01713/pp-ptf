<?php

//create variable
$servername = "127.0.0.1";
$username = "root";
$password = "shaolin";
$db = "ptf";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check if connection is a success
if(!$conn){

    die("Connection failed: " . mysqli_connect_error());
    
}else{
	//echo "Connection is a success";
}

?>