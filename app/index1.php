<?php
include'getindex1.php';
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
	            <h1>MY ADS</h1>
	        </div>
	    </header>

	    <nav>
	        <a class="mainlink" href="index.php"> HOME </a>|
	        <a class="mainlink" href="#"> ABOUT </a>
	        <div class="userlink"><a class="username" href="#"> <?php echo $_SESSION['user']; ?> </a>|<a class="mainlink" href="index1.php"> MY ADS </a>|<a class="mainlink" href="create-post.php"> CREATE NEW POST </a>|<a class="loglink" href="logout.php"> LOGOUT </a></div>
	    </nav>
    </div>

     <div class="middlebody">
        <p>
            <table class="maintable"border="0" width="100%">
                <thead>
                    <tr>
                        <th class="mainth">Job Feeds</th>
                        <!-- <th>Companies</th>
                        <th>Salary</th> -->
                        <!-- <th>Address</th>
                        <th>Job Scope</th>
                        <th>Info</th>
                        <th>Job Category</th>
                        <th>Location Category</th> -->
                        <th class="mainth">Date Post</th>
                        <th class="mainth" colspan="2">Option</th>
                    </tr>
                </thead>
                <tbody align="center">
                    <?php
                   if(mysqli_num_rows($results) > 0){
                    while($postinfo=mysqli_fetch_array($results)){
                        echo "<tr>";

                        echo "<td class='hiddenmaintd'>".$postinfo['post_id']."</td>";
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