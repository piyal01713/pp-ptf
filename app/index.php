<?php
    include 'dbcon.php';
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

    <div class="main">
        <header>
            <h1>Job List</h1>
        </header>

        <p>
        <div>
            <form action="index.php" method="post">
                <input type="text" name="search" size="30" placeholder="search any available jobs...">
                <input type="submit" name="submit" value="SEARCH">
            </form>
            <a href="index.php"> HOME </a>|
            <a href="login.php"> LOGIN </a>|
        </div>
        </p>

        <p>
            <table border="1" width="100%">
                <thead>
                    <tr>
                        <th>id</th>
                        <th >Job Feed</th>
                        <!-- <th>Companies</th>
                        <th>Salary</th> -->
                        <!-- <th>Address</th>
                        <th>Job Scope</th>
                        <th>Info</th>
                        <th>Job Category</th>
                        <th>Location Category</th> -->
                        <th>Date of Post</th>
                    </tr>
                </thead>
                <tbody align="center">
                    <?php
                    if(mysqli_num_rows($results) > 0){
		                    while($postinfo=mysqli_fetch_assoc($results)){
		                        echo "<tr>";
		                        echo "<td>".$postinfo['id']."</td>";
		                        echo "<td>"."<a class=\"postlink\" href=\"viewpost.php?id=".$postinfo['id']."\">"."<b>Job Title: </b>".$postinfo['work']."<br>"."<b>Employer: </b>".$postinfo['employer']."<br>"."<b>Salary: </b>"."RM".$postinfo['salary']."</a>"."</td>";
		                        //echo "<td>".$postinfo['location']."</td>";
		                        //echo "<td>".$postinfo['scope']."</td>";
		                        //echo "<td>".$postinfo['addinfo']."</td>";
		                        //echo "<td>".$postinfo['jobcat']."</td>";
		                        //echo "<td>".$postinfo['loccat']."</td>";
		                        echo "<td>".$postinfo['date_posted']."</td>";
		                    
		                        //echo "<td colspan="4">"."<hr>"."</td>";
		                        echo "</tr>";
		                    }
	                }else{
	                    echo "<tr>";
	                        echo "<td>"."0 results"."</td>";
	                        echo "<td>"."0 results"."</td>";
	                        echo "<td>"."0 results"."</td>";
	                        //echo "<td colspan="4">"."<hr>"."</td>";
	                        echo "</tr>";
	                }
                    ?>
                </tbody>
            </table>
    <div>
</body>
</html>