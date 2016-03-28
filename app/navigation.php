<?php

include 'dbcon.php';
session_start();

    if($conn){

        if(isset($_SESSION['user'])){

            $sql1 = "SELECT type FROM user WHERE username = '$_SESSION[user]' ";
            $results1 = mysqli_query($conn, $sql1);

            if(mysqli_num_rows($results1) > 0){

                while($userinfo1 = mysqli_fetch_array($results1)){

                    $type = $userinfo1['type'];

                    if($type == "employer"){

                        $href = "index1.php";
                        $title = "MY ADS";

                        $href1 = "create-post.php";
                        $title1 = "CREATE NEW POST";

                    }else{

                        $href = "";
                        $title = "";

                        $href1 = "";
                        $title1 = "";
                    }
                }
            }

            $myadshref = $href;
            $myads = $title;

            $createhref = $href1;
            $create = $title1;

            $loginhref = "logout.php";
            $login = "LOGOUT";

        }else{

            $myadshref = "#";
            $myads = "ABOUT";

            $createhref = "";
            $create = "";

            $loginhref = "userlogin.php";
            $login = "LOGIN";
        }

    }
?>