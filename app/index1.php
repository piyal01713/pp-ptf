<?php
include'getindex.php';
include'navigation.php';
?>

<!DOCTYPE html>
<html>
    <head>
	
	<Title>Job List</Title>
    
	<!-- Bootstrap -->
	<!-- Required meta tags always come first -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
	
	
	

	
    <!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
	
		<link rel="stylesheet" type="text/css" href="css/theme.css">
		
    </head>
	
    <body>
	
	<!-- Naviation bar -->	
	<nav class="navbar navbar-static-top navbar-dark bg-inverse">
      <a class="navbar-brand" href="#">Part Time Finder</a>
          <ul class="nav navbar-nav">
            <li class="nav-item">
				<a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
              </li>
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo $myadshref; ?>"><?php echo $myads ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $createhref ?>"><?php echo $create ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $loginhref ?>"><?php echo $login ?></a>
        </li>
      </ul>
    </nav>	
	
    <br>
	
    <div class="container">   
        <h2 style="text-align: center;"> My Ads </h2>
	
	<br>			
              <ul class='jobs list-inline'> 
   
                    <?php
                   if(mysqli_num_rows($results) > 0){
                    while($postinfo=mysqli_fetch_array($results)){
                        
                        echo "<li>".
						"<a class=\"postlink\" href=\"viewpost1.php?post_id=".$postinfo['post_id']."\">"
						."<span class='job-employer'>".$postinfo['employer'].
						"</span>"
						."<span class='job-title'>".$postinfo['work']."</span>"
						."<span class = 'job-salary'>RM" .$postinfo['salary'].
						 "</span>"
						."<span class = 'job-publish-date'>". $postinfo['date_posted']."</span>"
						."</a>";
						
                        

                        //Delete & Edit section; "\" --> escape character 
						//Inline CSS styling added here!
						
						echo "<span class='myadDelete'><a class='btn btn-danger' href=\" delmessage.php?post_id=".$postinfo['post_id']." \">Delete</a></span>";
						
                        echo "<span class='myadEdit'><a class='btn btn-secondary' href=\" updatepost.php?post_id=".$postinfo['post_id']." \">Edit</a></span>";
                        
                        echo "</li>";
                        //<a href=\"viewpost.php?id=".$postinfo['id']."\">
                    }
                }else{
                        echo "0 results" ;
                }
                ?>
			  </ul>
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