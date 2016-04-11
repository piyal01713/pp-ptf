<?php
//include external php file
include 'dbcon.php';

//check if user session exist
if(!isset($_SESSION['user'])){
    //redirect to link
    header('Location: userlogin.php');
}

//set sql statement to select userid record from "user" table with user session
$sql="SELECT user_id FROM user WHERE username = '$_SESSION[user]' ";

//run sql statement with query
$results=mysqli_query($conn, $sql);

//check if record exist
if(mysqli_num_rows($results) > 0){
    //loop to fetch record
    while($userinfo=mysqli_fetch_array($results)){
        //set record as variable
        $userid =  $userinfo['user_id'];
    }

}else{
    //display error message
    echo "Error: some codes are not correctly placed or one of the code spelling is wrong or does not match, please check back your codes";
}
?>