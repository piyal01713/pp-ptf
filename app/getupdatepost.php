<?php
//include external php file
include 'dbcon.php';
//start session
session_start();

//set sql statement to select "type" record from "user" table with user session
$sql1 = "SELECT type FROM user WHERE username = '$_SESSION[user]' ";
    
    //run sql statement with query
    $results1 = mysqli_query($conn, $sql1);

    //check if record exist
    if(mysqli_num_rows($results1) > 0){
    //loop to fetch records
    while($userinfo = mysqli_fetch_array($results1)){
        //set record as variable
        $type = $userinfo['type'];

        }
    }

//check if user session not exist or user session as employee exist
if(!isset($_SESSION['user']) OR ($type == "employee")){
    //redirect to link
    header('Location: index.php');
}

//check if submitBtn is not clicked
if(!isset($_POST['submitBtn'])){
    //set sql statement to select all record from "posts" table with user session
    $sql = "SELECT * FROM posts WHERE post_id= $_GET[post_id]";
        //check if query run
        if($result=mysqli_query($conn, $sql)){
            //loop to fetch records
            $postinfo=mysqli_fetch_array($result);
            //check if post-id exist
            if($_GET['post_id'] == 0){
                //redirect to link
                header('Location: index.php');
            }

        }else{
            echo "Error: ". "<br>" . $sql . "<br>" . mysqli_error($conn);
        }
}

//check if submitBtn is clicked
if(isset($_POST['submitBtn'])){

//escaped field input
$_POST['location']=mysqli_real_escape_string($conn, $_POST['location']);
$_POST['scope']=mysqli_real_escape_string($conn, $_POST['scope']);
$_POST['addinfo']=mysqli_real_escape_string($conn, $_POST['addinfo']);
$_POST['work']=mysqli_real_escape_string($conn, $_POST['work']);
$_POST['employer']=mysqli_real_escape_string($conn, $_POST['employer']);

    //set sql statement to update all record from "posts" table
    $update="UPDATE posts SET `work`='$_POST[work]',
        `employer`='$_POST[employer]',
        `salary`='$_POST[salary]',
        `location`='$_POST[location]',
        `scope`='$_POST[scope]',
        `addinfo`='$_POST[addinfo]',
        `jobcat`='$_POST[jobcat]',
        `loccat`='$_POST[loccat]',
        `date_posted`='$_POST[date_posted]' WHERE post_id='$_POST[post_id]'";
        //check if query run
         if(mysqli_query($conn, $update)){
            //redirect to link
            header('Location: index1.php'); 
         }else{
            //display echo error
            echo "Error: ". "<br>" . $update . "<br>" . mysqli_error($conn);
         }
}
?>