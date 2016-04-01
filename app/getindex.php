<?php
//include external php file
include 'dbcon.php';

	//check connection
    if($conn){

		//escape user string input
        $_POST['search']=mysqli_real_escape_string($conn, $_POST['search']);

		//set sql statement to select all record from "posts" table that matches the input
        $sql = "SELECT * FROM posts WHERE work LIKE '%".$_POST['search']."%' OR employer LIKE '%".$_POST['search']."%' ORDER BY date_posted DESC";

		//run sql statement with query
        $results= mysqli_query($conn, $sql);

    }else{

        echo "The database cannot be connected right now. Please try again later";

    }

?>