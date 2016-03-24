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


        $_POST['search']=mysqli_real_escape_string($conn, $_POST['search']);

        $sql = "SELECT * FROM posts WHERE work LIKE '%".$_POST['search']."%' OR employer LIKE '%".$_POST['search']."%' ORDER BY date_posted DESC";

        $results= mysqli_query($conn, $sql);

        //if(mysqli_num_rows($results) > 0){

            //while($postinfo=mysqli_fetch_array($results)){


                //$sql2 = "SELECT username FROM user WHERE user_id = '$postinfo[user_id]' ";

                //$results2 = mysqli_query($conn, $sql2);

                //if(mysqli_num_rows($results2) > 0){

                     //while($userinfo2=mysqli_fetch_array($results2)){

                         //$userinfo2['username'];

                   //}
                //}
                
                //$list = "<li>".
                //"<a class=\"postlink\" href=\"viewpost.php?post_id=".$postinfo['post_id']."\">".
                //"<span>".$postinfo['employer']."</span>".
                //"<span class ='job-title'>".$postinfo['work']."</span>".
                //"<span class ='job-category'>".$postinfo['jobcat']."</span>".
                //"<span class ='job-publish-date'>".$postinfo['date_posted']."</span>".
                //"</a>
                //</li>
                //<hr>";
               
            //}
        //}else{
            
        //}
    }

?>