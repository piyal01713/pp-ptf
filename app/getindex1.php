<?php
include 'dbcon.php';
    session_start();

    $sql = "SELECT type FROM user WHERE username = '$_SESSION[user]' ";
    
    $results = mysqli_query($conn, $sql);

    if(mysqli_num_rows($results) > 0){
    while($userinfo = mysqli_fetch_array($results)){
        $type = $userinfo['type'];
        }
    }

    if(!isset($_SESSION['user']) OR ($type == "employee")){
        header('Location: index.php');
    }else{

        $sql1 = "SELECT user_id FROM user WHERE username = '$_SESSION[user]' ";

        $results1= mysqli_query($conn, $sql1);

        if(mysqli_num_rows($results1) > 0){
            while($userinfo1=mysqli_fetch_array($results1)){
                $userid = $userinfo1['user_id'];
            }
            $sql = "SELECT * FROM posts WHERE user_id = '$userid' ORDER BY date_posted DESC ";

            $results= mysqli_query($conn, $sql);
        }
    }
?>