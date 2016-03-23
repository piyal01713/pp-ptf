<!DOCTYPE html>
<html lang="en">

<?php
include'getindex.php';
?>
<html>
    <head>
    	<Title>PTF</Title>
     
	 <!-- previous CSS   <link rel="stylesheet" type="text/css" href="main.css"> -->
		
		<!-- Bootstrap -->
		<!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    </head>

    <body>

    <!-- Naviation bar -->	
	<nav class="navbar navbar-static-top navbar-dark bg-inverse">
      <a class="navbar-brand" href="#">Part Time Finder</a>
      <ul class="nav navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
    </nav>
	
	 <div class="jumbotron">
      <div class="container">
        <h1 class="display-3">Part Time Finder</h1>
        <p>Helps connect the ones looking for part-time jobs with the right people! </p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
      </div>
    </div>
	


        <div class="middlebody">
<!--
            <p>
                <div class="searchalign">
                    <form action="index.php" method="post">
                        <input type="text" name="search" size="30" placeholder="search any available jobs...">
                        <input type="submit" name="submit" value="SEARCH">
                    </form>
                </div>
            </p>
	-->
	
	<br>

 <!-- Search bar -->	
	<form action="index.php" method="post">
	  <div class="container">
	   <div class="row">
        <div class="col-lg-12">
          <div class="input-group">
		 
           <input type="text" name="search" class="form-control" placeholder="Search for...">
           <span class="input-group-btn">
           <button name ="submit" class="btn btn-default" type="button">Search</button>
		   
           </span>
          </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->
       </div>	
      </div>
	 </form>
	 


<br>

        <!-- start of table -->
		
			<div class="container">   
              <h2 style="text-align: center;"> Available Jobs </h2>			
						
						<br>
						<table class="table">	
									
									
						    <thead>
								<tr>
								<th>Firstname</th>
								<th>Lastname</th>
								<th>Email</th>
								<th>Something</th>
								</tr>
						    </thead>
							
									
                        <?php
                        if(mysqli_num_rows($results) > 0){
    		                    while($postinfo=mysqli_fetch_array($results)){

								echo "<thead>";
								
                                    echo "<tr>";

                                    $sql2 = "SELECT username FROM user WHERE user_id = '$postinfo[user_id]' ";

                                    $results2 = mysqli_query($conn, $sql2);

                                    if(mysqli_num_rows($results2) > 0){

                                         while($userinfo2=mysqli_fetch_array($results2)){

                                            echo "<td class='maintd'>".$userinfo2['username']."</td>";

                                        }
                                    }

    		                        
    		                        echo "<td class='hiddenmaintd'>".$postinfo['post_id']."</td>";
    		                        echo "<td class='maintd'>"."<a class=\"postlink\" href=\"viewpost.php?post_id=".$postinfo['post_id']."\">"."<b>Job Title: </b>".$postinfo['work']."</a>"."<br>"."<b>Employer: </b>".$postinfo['employer']."<br>"."<b>Salary(Per Hour): </b>"."RM".$postinfo['salary']."</td>";
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
		
		<hr>
		
	<div class="container">	
		 <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
		
		
    </body>
	
	
	
	  <footer>
        <p style="text-align: center;">&copy; Part Time Finder 2015</p>
      </footer>
	  </div>
	
	

</html>