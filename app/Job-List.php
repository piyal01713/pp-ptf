<html>
<head>
	<Title>Job List</Title>
    <link rel="stylesheet" type="text/css" href="job-list.css">
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

        <p class="createbtn">
            <a href="create-post.php">Create New Post</a>
        </p>

        <p>
            <table border="1" width="100%">
                <thead>
                    <tr>
                        <th>Job Title</th>
                        <th>Company</th>
                        <th>Salary</th>
                        <th>Date</th>
                        <th colspan="2">Options</th>
                    </tr>
                </thead>
                <tbody align="center">
                    <?php
                    if(mysqli_num_rows($results) > 0){
                    while($postinfo=mysqli_fetch_array($results)){
                        echo "<tr>";
                        echo "<td>".$postinfo['work']."</td>";
                        echo "<td>".$postinfo['employer']."</td>";
                        echo "<td>RM".$postinfo['salary']."</td>";
                        echo "<td>".$postinfo['date_posted']."</td>";
                        // "\" = escape character
                        echo "<td><a href=\" updatepost.php?id=".$postinfo['id']." \">Edit</a></td>";
                        echo "<td><a href=\" deletepost.php?id=".$postinfo['id']." \">Delete</a></td>";
                        //echo "<td colspan="4">"."<hr>"."</td>";
                        echo "</tr>";
                        
                    }
                }else{
                    echo "<tr>";
                        echo "<td>"."0 results"."</td>";
                        echo "<td>"."0 results"."</td>";
                        echo "<td>RM"."0"."</td>";
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