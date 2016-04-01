<?php
//include external php file
include 'dbcon.php';
//start session
session_start();

    //check connection
    if($conn){
        //check if session exist
        if(isset($_SESSION['user'])){
            //set sql statement to select "type" record from "user" table
            $sql1 = "SELECT type FROM user WHERE username = '$_SESSION[user]' ";
            //run sql statement with query
            $results1 = mysqli_query($conn, $sql1);
            //check if record exist
            if(mysqli_num_rows($results1) > 0){
                //loop fetch all selected record
                while($userinfo1 = mysqli_fetch_array($results1)){
                    //set as variable
                    $type = $userinfo1['type'];
                    //check if "type" record equals to employer
                    if($type == "employer"){
                        //set link
                        $href = "index1.php";
                        //set link title
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