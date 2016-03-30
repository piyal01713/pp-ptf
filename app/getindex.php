<?php
include 'dbcon.php';


    if($conn){

        $_POST['search']=mysqli_real_escape_string($conn, $_POST['search']);

        $sql = "SELECT * FROM posts WHERE work LIKE '%".$_POST['search']."%' OR employer LIKE '%".$_POST['search']."%' ORDER BY date_posted DESC";

        $results= mysqli_query($conn, $sql);

    }else{

        echo "The database cannot be connected right now. Please try again later";

    }

?>