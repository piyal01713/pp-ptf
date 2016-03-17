<?php
include 'dbcon.php';
session_start();

    if(!isset($_SESSION['user'])){
        header('Location: userlogin.php');
    }

    $sql = "SELECT * FROM posts WHERE post_id= $_GET[post_id]";
            if($result=mysqli_query($conn, $sql)){
                $postinfo=mysqli_fetch_array($result);
            }else{
                echo "Error: ". "<br>" . $sql . "<br>" . mysqli_error($conn);
            }

if(isset($_POST['editBtn'])){
    header('Location: updatepost.php');
}
?>