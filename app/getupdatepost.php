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

if(!isset($_SESSION['user']) OR ($type == "employee")){
    header('Location: index.php');
}

if(!isset($_POST['submitBtn'])){
    $sql = "SELECT * FROM posts WHERE post_id= $_GET[post_id]";
        if($result=mysqli_query($conn, $sql)){
            $postinfo=mysqli_fetch_array($result);
            if($_GET['post_id'] == 0){
                header('Location: index.php');
            }
        }else{
            echo "Error: ". "<br>" . $sql . "<br>" . mysqli_error($conn);
        }
}

if(isset($_POST['submitBtn'])){
    
$_POST['location']=mysqli_real_escape_string($conn, $_POST['location']);
$_POST['scope']=mysqli_real_escape_string($conn, $_POST['scope']);
$_POST['addinfo']=mysqli_real_escape_string($conn, $_POST['addinfo']);
$_POST['work']=mysqli_real_escape_string($conn, $_POST['work']);
$_POST['employer']=mysqli_real_escape_string($conn, $_POST['employer']);

    $update="UPDATE posts SET `work`='$_POST[work]',
        `employer`='$_POST[employer]',
        `salary`='$_POST[salary]',
        `location`='$_POST[location]',
        `scope`='$_POST[scope]',
        `addinfo`='$_POST[addinfo]',
        `jobcat`='$_POST[jobcat]',
        `loccat`='$_POST[loccat]',
        `date_posted`='$_POST[date_posted]' WHERE post_id='$_POST[post_id]'";
         if(mysqli_query($conn, $update)){
            header('Location: index1.php'); 
         }else{
            echo "Error: ". "<br>" . $update . "<br>" . mysqli_error($conn);
         }
}
?>