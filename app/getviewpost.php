<?php
include 'dbcon.php';
session_start();

    $sql1 = "SELECT type FROM user WHERE username = '$_SESSION[user]' ";
    $results1 = mysqli_query($conn, $sql1);

    if(mysqli_num_rows($results1) > 0){

    while($userinfo = mysqli_fetch_array($results1)){

        $type = $userinfo['type'];

        }
    }

    $sql = "SELECT * FROM posts WHERE post_id= $_GET[post_id]";
    if($result=mysqli_query($conn, $sql)){

        $postinfo=mysqli_fetch_array($result);

        if((!isset($_SESSION['user'])) OR ($type == "employee")){

		//&nbsp alert!
		
         $apply = "<a class='btn btn-primary' href=\" form.php?post_id=".$postinfo['post_id']." \">APPLY</a>";

        }else{

            $apply = "<td colspan='2'></td>";
        }

    }else{

        echo "Error: ". "<br>" . $sql . "<br>" . mysqli_error($conn);
    }

    if(isset($_POST['editBtn'])){

    	header('Location: updatepost.php');
    }
?>