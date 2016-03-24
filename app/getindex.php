<?php
include 'dbcon.php';
    session_start();

	
    if(isset($_SESSION['user'])){

        $sql1 = "SELECT type FROM user WHERE username = '$_SESSION[user]' ";
        $results1 = mysqli_query($conn, $sql1);

        if(mysqli_num_rows($results1) > 0){

            while($userinfo1 = mysqli_fetch_array($results1)){

                $type = $userinfo1['type'];

                if($type == "employer"){

                    $myads = "|<a class='mainlink' href='index1.php'> MY ADS </a>|";

                    $create = "<a class='mainlink' href='create-post.php'> CREATE NEW POST </a>|";

                }else{

                    $myads = "|<a class='mainlink' href='#'> STATUS </a>|";

                    $create = "";
                }
            }
        }

        $userlink = "<a class='username' href='#'>".$_SESSION['user']." </a>".$myads.$create."<a class='loglink' href='logout.php'> LOGOUT </a>";
    }else{

        $userlink = "<a class='loglink' href='userlogin.php'> LOGIN </a>";
    }

	
	  $_POST['search']=mysqli_real_escape_string($conn, $_POST['search']);
	  
	  $sql = "SELECT * FROM posts WHERE work LIKE '%".$_POST['search']."%' OR employer LIKE '%".$_POST['search']."%' ORDER BY date_posted DESC";

     $results= mysqli_query($conn, $sql);
	
	
    	
?>