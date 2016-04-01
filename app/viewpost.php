<?php
//include external php file
include'getviewpost.php';
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



      <div class="container">
		  
        <!-- echo $_GET['id'] is for displaying all the selected value with selected id only-->
	      
		<input type="hidden" name="post_id" value="<?php echo $_GET['post_id']; ?>"/>
		
		<a href='index.php' class='btn btn-link'>Back to all jobs</a>
		
		<div class="row">	
          <div class="col-md-8">
		  
		    <div class="job-title">
             <h1> 
			   <span class ="job-title"> <?php echo $postinfo['work']; ?> </span> 
			 </h1>
		    </div>
		
		
              <h3> Posted on 
			    <span class="job-publish-date"><?php echo $postinfo['date_posted']; ?> </span>
			  </h3>
 
		

            <h2>
			<span class="job-employer"><?php echo $postinfo['employer'];?> </span>
			</h2>

		
		<hr>
		 

          <div class="job-salary">
            RM<?php echo $postinfo['salary']; ?> per hour
          </div>
					
		  <div class="job-location">
            <?php echo $postinfo['location']; ?>
		  </div>	
		

          <div class="job-scope">
            <?php echo $postinfo['scope']; ?>
          </div>
			
		  <div class="job-info">
            <?php echo $postinfo['addinfo']; ?>
          </div>
		
		  <div class="job-category">
            <?php echo $postinfo['jobcat']; ?>
         </div>
					
          <div class="job-locationcat">
            <?php echo $postinfo['loccat']; ?>
         </div>
		
		
        <?php
        echo $apply;
        ?>
     
   </div>
</body>
     
	<footer>
      <p style="text-align: center;">&copy; Part Time Finder 2015</p>
    </footer>

</html>