<?php
include'getindex.php';
?>
<html>
    <head>
    	<Title>PTF</Title>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>

    <body>
        <div class="tophead">
            <header>
                <div>
                    <h1>PART TIME FINDER </h1>
                </div>
            </header>

            <nav>
                <a class="mainlink" href="index.php"> HOME </a>|
                <a class="mainlink" href="#"> ABOUT </a>
               <div class="userlink"><?php echo $userlink; ?></div>
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
                <table class="maintable" border="0" width="100%">
                    <thead>
                        <tr>
                            <th class="hiddenmainth">User</th>
                            <th class="mainth">By</th>
                            <th class="mainth">Job Feeds</th>
                            <th class="mainth">Date Posted</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if(mysqli_num_rows($results) > 0){
    		                    while($postinfo=mysqli_fetch_array($results)){

                                    echo "<tr>";

                                    $sql2 = "SELECT username FROM user WHERE user_id = '$postinfo[user_id]' ";

                                    $results2 = mysqli_query($conn, $sql2);

                                    if(mysqli_num_rows($results2) > 0){

                                         while($userinfo2=mysqli_fetch_array($results2)){

                                            echo "<td class='maintd'>".$userinfo2['username']."</td>";

                                        }
                                    }

    		                        
    		                        echo "<td class='hiddenmaintd'>".$postinfo['post_id']."</td>";
    		                        echo "<td class='maintd'>"."<a class=\"postlink\" href=\"viewpost.php?post_id=".$postinfo['post_id']."\">"."<b>Job Title: </b>".$postinfo['work']."<br>"."<b>Employer: </b>".$postinfo['employer']."<br>"."<b>Salary(Per Hour): </b>"."RM".$postinfo['salary']."</a>"."</td>";
    		                        echo "<td class='maintd'>".$postinfo['date_posted']."</td>";
    		                        echo "</tr>";
    		                    }
    	                }else{
    	                    echo "<tr>";
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