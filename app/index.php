<?php
//include external php file
include'getindex.php';
include'navigation.php';
?>
<!DOCTYPE html>
<html lang="en">
<html>

    <head>
    	<Title>PTF</Title>
     
		
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
            <li class="nav-item active">
				<a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
              </li>
        <li class="nav-item">
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
	
	 <div class="jumbotron">
      <div class="container">
        <h1 class="display-3">Part Time Finder</h1>
        <p>Helps connect the ones looking for part-time jobs with the right people! </p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
      </div>
    </div>
	


        <div class="middlebody">

	
	<br>

 <!-- Search bar -->	
	<form action="index.php" method="post">
	  <div class="container">
	   <div class="row">
        <div class="col-lg-12">
          <div class="input-group">
		 
           <input type="text" name="search" class="form-control" placeholder="Search for...">
           <span class="input-group-btn">
           <button name ="submit" class="btn btn-default" type="submit">Search</button>
		   
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
              <ul class='jobs list-inline'> 							
                <?php
            
		          //check if table record exist
                  if(mysqli_num_rows($results) > 0){
	                  //loop to fetch all records
                      while($postinfo=mysqli_fetch_array($results)){
                       //display the records
                       echo "<li>".
                            "<a class=\"postlink\" href=\"viewpost.php?post_id=".$postinfo['post_id']."\" target=\"_blank\">"
                            ."<span class='job-employer'>".$postinfo['employer']."</span>"
                            ."<span class ='job-title'>".$postinfo['work']."</span>"
                            ."<span class = 'job-category label label-default'>".$postinfo['jobcat']."</span>"
                            ."<span class = 'job-salary'>RM" .$postinfo['salary']. "(Per Hour)</span>" 
                            ."<span class = 'job-publish-date'>". $postinfo['date_posted']."</span>"
                            ."</a>
                            </li>";
                      
                      }

                  }else{
          					//display message if no record were found
                    echo "No Results";
                  }

                ?>
              </ul>
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