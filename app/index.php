<?php
    include 'dbcon.php';
    session_start();

    if(isset($_SESSION['user'])){

        $sql1 = "SELECT type FROM user WHERE username = '$_SESSION[user]' ";
        $results1 = mysqli_query($conn, $sql1);

        if(mysqli_num_rows($results1) > 0){

            while($userinfo1 = mysqli_fetch_array($results1)){
                $type = $userinfo1['type'];

                if($type == "employer"){
                    $myads = "|<a class='mainlink' href='index1.php'> MY ADS </a>|";
                    $create = "<a class='mainlink' href='create-post.php'> CREATE NEW POST </a>|";
                }else{
                    $myads = "|<a class='mainlink' href='#'> STATUS </a>|";
                    $create = "";
                }
            }
        }

        $userlink = "<a class='username' href='#'>".$_SESSION['user']." </a>".$myads.$create."<a class='loglink' href='logout.php'> LOGOUT </a>";
    }else{
        $userlink = "<a class='loglink' href='userlogin.php'> LOGIN </a>";
    }

    $_POST['search']=mysqli_real_escape_string($conn, $_POST['search']);

    $sql = "SELECT * FROM posts WHERE work LIKE '%".$_POST['search']."%' OR employer LIKE '%".$_POST['search']."%'";

    $results= mysqli_query($conn, $sql);


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
                            <th class="mainth">User ID</th>
                            <th class="mainth">Job Feed</th>
                            <th class="mainth">Date of Post</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if(mysqli_num_rows($results) > 0){
    		                    while($postinfo=mysqli_fetch_array($results)){
    		                        echo "<tr>";
    		                        echo "<td class='hiddenmaintd'>".$postinfo['post_id']."</td>";
    		                        echo "<td class='maintd'>".$postinfo['user_id']."</td>";
    		                        echo "<td class='maintd'>"."<a class=\"postlink\" href=\"viewpost.php?post_id=".$postinfo['post_id']."\">"."<b>Job Title: </b>".$postinfo['work']."<br>"."<b>Employer: </b>".$postinfo['employer']."<br>"."<b>Salary: </b>"."RM".$postinfo['salary']."</a>"."</td>";
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