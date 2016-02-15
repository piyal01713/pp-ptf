<html>
<head>
	<Title>Job List</Title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<?php
    include 'dbcon.php';
    $sql = "SELECT * FROM posts";
    $results= mysqli_query($conn, $sql);
?>
<body>

    <div class="main">
        <header>
            <h1>Job List</h1>
        </header>

        <p class="buttonalign">
            <a href="create-post.php">Create New Post</a>
        </p>

        <p>
            <table border="1" width="100%">
                <thead>
                    <tr>
                        <th>id</th>
                        <th colspan="4">Job Feed</th>
                        <!-- <th>Companies</th>
                        <th>Salary</th> -->
                        <!-- <th>Address</th>
                        <th>Job Scope</th>
                        <th>Info</th>
                        <th>Job Category</th>
                        <th>Location Category</th> -->
                        <th>Date of Post</th>
                        <th colspan="2">Options</th>
                    </tr>
                </thead>
                <tbody align="center">
                    <?php
                    if(mysqli_num_rows($results) > 0){
                    while($postinfo=mysqli_fetch_array($results)){
                        echo "<tr>";
                        echo "<td>".$postinfo['id']."</td>";
                        echo "<td colspan='4'>"."<a class=\"postlink\" href=\"viewpost.php?id=".$postinfo['id']."\">"."<b>Job Title: </b>".$postinfo['work']."<br>"."<b>Employer: </b>".$postinfo['employer']."<br>"."<b>Salary: </b>"."RM".$postinfo['salary']."</a>"."</td>";
                        //echo "<td>".$postinfo['location']."</td>";
                        //echo "<td>".$postinfo['scope']."</td>";
                        //echo "<td>".$postinfo['addinfo']."</td>";
                        //echo "<td>".$postinfo['jobcat']."</td>";
                        //echo "<td>".$postinfo['loccat']."</td>";
                        echo "<td>".$postinfo['date_posted']."</td>";

                        // "\" = escape character
                        echo "<td><a href=\" updatepost.php?id=".$postinfo['id']." \">Edit</a></td>";
                        echo "<td><a href=\" delmessage.php?id=".$postinfo['id']." \">Delete</a></td>";
                        //echo "<td colspan="4">"."<hr>"."</td>";
                        echo "</tr>";
                        //<a href=\"viewpost.php?id=".$postinfo['id']."\">
                    }
                }else{
                    echo "<tr>";
                        echo "<td>"."0 results"."</td>";
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