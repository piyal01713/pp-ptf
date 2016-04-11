<?php
//include external php file
include 'dbcon.php';
//start user session
session_start();

//set sql statement to select "type" record from "user" table with user session
$sql = "SELECT type FROM user WHERE username = '$_SESSION[user]' ";

//run sql statement with query
$results = mysqli_query($conn, $sql);

//check if record exist
if(mysqli_num_rows($results) > 0){
    //loop to fetch record
    while($userinfo = mysqli_fetch_array($results)){
        //set record as variable
        $type = $userinfo['type'];
    }
}

//check if user session not exist or employee exist
if(!isset($_SESSION['user']) OR ($type == "employee")){
    //redirect to link
    header('Location: index.php');
}else{

    //set sql statement to select "user_id" record from "user" table with user session
    $sql1 = "SELECT user_id FROM user WHERE username = '$_SESSION[user]' ";
    //run sql statement with query
    $results1= mysqli_query($conn, $sql1);
    //check if record exist
    if(mysqli_num_rows($results1) > 0){

        //loop to fetch records
        while($userinfo1=mysqli_fetch_array($results1)){
            //set record as variable
            $userid = $userinfo1['user_id'];
        }

    //set sql statement to select all record from "posts" table in a descending order
    $sql = "SELECT * FROM posts WHERE user_id = '$userid' ORDER BY date_posted DESC ";
    //run sql statement with query
    $results= mysqli_query($conn, $sql);

    }
}
?>