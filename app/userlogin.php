<?php
include'getuserlogin.php';

//for navigation bar
include'navigation.php';

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
		
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
	
<!--Navigation bar -->	
	<nav class="navbar navbar-static-top navbar-dark bg-inverse">
      <a class="navbar-brand" href="#">Part Time Finder</a>
          <ul class="nav navbar-nav">
            <li class="nav-item">
				<a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $myadshref; ?>"><?php echo $myads ?></a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="<?php echo $createhref ?>"><?php echo $create ?></a>
            </li>
            <li class="nav-item active">
               <a class="nav-link" href="<?php echo $loginhref ?>"><?php echo $login ?></a>
            </li>
          </ul>
    </nav>
	
<br>	
	
	<div class="container">
	  <div class="row">	
          <div class="col-md-8">
		  
		    <h2>Login</h2>
	
		    <form action="userlogin.php" method="Post">
	
<!-- Form -->				
	            <div class="form-group row">
                  <label for="username" class="col-sm-2 form-control-label">Username</label>
				    <div class="col-sm-8">
					  <input type="text" class="form-control" name="username" maxlength="15" size="20" required autocomplete="off">
					</div>
				</div>
							
				<div class="form-group row">
			      <label for="password" class="col-sm-2 form-control-label">Password </label>
				    <div class="col-sm-8">
					  <input type="password" name="password" class="form-control" minlength="6" size="15" required>
					</div>
				</div>
				
						<?php echo $msg; ?>
						
				<div class="form-group row">
			      <div class="col-sm-offset-2 col-sm-10">
					<input type="submit" name="login" class="btn btn-primary" value="Login">
					<input type="reset" class="btn btn-secondary" value="Reset">
				  </div>
			    </div>
				
				<p style="margin-top:20px">New user? Sign up <a href="prereg.php">here. </a></p>
				<a href="index.php">Back to home page</a>
			
		    <form>
		  </div>
		</div>
	</div>
  </body>
  
  <hr>
	
	<footer>
        <p style="text-align: center;">&copy; Part Time Finder 2015</p>
    </footer>
  
</html>