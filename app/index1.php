<?php
    include 'dbcon.php';
    //include 'resetid.php';
    $_POST['search']=mysqli_real_escape_string($conn, $_POST['search']);

    $sql = "SELECT * FROM posts WHERE work LIKE '%".$_POST['search']."%' OR employer LIKE '%".$_POST['search']."%'";

    $results= mysqli_query($conn, $sql);
?>
<html>
<head>
	<Title>Job List</Title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<div class="tophead">
	    <header>
	        <div>
	            <h1>PART TIME FINDER</h1>
	        </div>
	    </header>

	    <nav>
	        <a class="mainlink" href="index1.php"> HOME </a>|
	        <a class="mainlink" href="#"> ABOUT </a>
	        <div class="userlink"><a class="mainlink" href="#"> USERNAME </a>|<a class="mainlink" href="#"> MY ADS </a>|<a class="mainlink" href="create-post.php"> CREATE NEW POST </a>|<a class="logoutlink" href="index.php"> LOGOUT </a></div>
	    </nav>
    </div>

     <div class="middlebody">
	    <p>
	        <div class="searchalign">
	            <form action="index.php" method="post">
	                <input type="text" name="search" size="30" placeholder="search any available jobs...">
	                <input type="submit" name="submit" value="SEARCH">
	            </form>
	        </div>
	     </p>
        <p>
            <table class="maintable"border="0" width="100%">
                <thead>
                    <tr>
                        <th class="hiddenmainth">User</th>
                        <th class="mainth">User ID</th>
                        <th class="mainth">Job Feed</th>
                        <!-- <th>Companies</th>
                        <th>Salary</th> -->
                        <!-- <th>Address</th>
                        <th>Job Scope</th>
                        <th>Info</th>
                        <th>Job Category</th>
                        <th>Location Category</th> -->
                        <th class="mainth">Date of Post</th>
                        <th class="mainth" colspan="2">Options</th>
                    </tr>
                </thead>
                <tbody align="center">
                    <?php
                    if(mysqli_num_rows($results) > 0){
                    while($postinfo=mysqli_fetch_array($results)){
                        echo "<tr>";
                        echo "<td class='hiddenmaintd'>".$postinfo['post_id']."</td>";
                        echo "<td class='maintd'>".$postinfo['user_id']."</td>";
                        echo "<td class='maintd'>"."<a class=\"postlink\" href=\"viewpost1.php?post_id=".$postinfo['post_id']."\">"."<b>Job Title: </b>".$postinfo['work']."<br>"."<b>Employer: </b>".$postinfo['employer']."<br>"."<b>Salary: </b>"."RM".$postinfo['salary']."</a>"."</td>";
                        //echo "<td>".$postinfo['location']."</td>";
                        //echo "<td>".$postinfo['scope']."</td>";
                        //echo "<td>".$postinfo['addinfo']."</td>";
                        //echo "<td>".$postinfo['jobcat']."</td>";
                        //echo "<td>".$postinfo['loccat']."</td>";
                        echo "<td class='maintd'>".$postinfo['date_posted']."</td>";

                        // "\" = escape character
                        echo "<td class='maintd'><a href=\" updatepost.php?post_id=".$postinfo['post_id']." \">Edit</a></td>";
                        echo "<td class='maintd'><a href=\" delmessage.php?post_id=".$postinfo['post_id']." \">Delete</a></td>";
                        echo "</tr>";
                        //<a href=\"viewpost.php?id=".$postinfo['id']."\">
                    }
                }else{
                    echo "<tr>";
                        echo "<td class='maintd'>"."0 results"."</td>";
                        echo "<td class='maintd'>"."0 results"."</td>";
                        echo "<td class='maintd'>"."0 results"."</td>";
                        echo "<td class='maintd'>"."0 results"."</td>";
                        echo "</tr>";
                }
                    ?>
                </tbody>
            </table>
	    </p>
    </div>
</body>
</html>