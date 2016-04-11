<?php
//include external php file
include 'dbcon.php';
session_start();

    //check if user session exist
    if(!isset($_SESSION['user'])){
        //redirect to this page
        header('Location: userlogin.php');
    }
    //set sql statement select all record form "posts" table with selected id
    $sql = "SELECT * FROM posts WHERE post_id= $_GET[post_id]";
    
    //check if query run
    if($result=mysqli_query($conn, $sql)){
        //fetch record
        $postinfo=mysqli_fetch_array($result);
    }else{
        echo "Error: ". "<br>" . $sql . "<br>" . mysqli_error($conn);
    }
?>