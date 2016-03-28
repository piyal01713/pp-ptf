<?
include'dbcon.php';
session_start();

 $sql = "SELECT * FROM posts WHERE post_id= $_GET[post_id]";
    
    if($result=mysqli_query($conn, $sql)){

        $postinfo=mysqli_fetch_array($result);
        $postinfo['user_id'];

        $sql1 = "SELECT email FROM user WHERE user_id= '$postinfo[user_id]' ";
        $result1 = mysqli_query($conn, $sql1);
        $userinfo1 = mysqli_fetch_array($result1);
        $userinfo1['email'];

        $sql2 = "SELECT email FROM user WHERE username= '$_SESSION[user]' ";
        $result2 = mysqli_query($conn, $sql2);
        $userinfo2 = mysqli_fetch_array($result2);
        $userinfo2['email'];

    }else{

        echo "Error";
    }
?>