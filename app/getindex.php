<?php
include 'dbcon.php';


    if($conn){

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