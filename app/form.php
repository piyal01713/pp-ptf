<?php
include'getform.php';
include'navigation.php';
?>

<!-- for the text box for work experience section -->
<script type="text/javascript">
function show() { document.getElementById('area').style.display = 'block'; }
function hide() { document.getElementById('area').style.display = 'none'; }
</script>

<!DOCTYPE html>
<html>
<head>
<title>Job Finder</title>     
		
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
		
		<h2>Apply for <?php echo $postinfo['work']; ?></h2>
		
		<div class="row">	
          <div class="col-md-8">
		
		
		
		  <form  action="send.php" name="myForm" method="Post" enctype="multipart/form-data">
		
		    <div class="form-group row">
                <label for="inputto" class="col-sm-2 form-control-label">To</label>
				  <div class="col-sm-10">
					<input type="text" class="form-control" name="tosend" size="30" value="<?php echo $userinfo1['email']; ?>" readonly>
		          </div>
			</div>
			
			<div class="form-group row">
			    <label for="inputname" class="col-sm-2 form-control-label"> Name:</label>
				  <div class="col-sm-10">
					<input type="text" class="form-control"name="aname" size="30" autofocus></td>
			      </div>
			</div>
			
			<div class="form-group row">
			    <label for="inputage" class="col-sm-2 form-control-label"> Age:</label>
		           <div class="col-sm-10">
					<td><input type="number" class="form-control" name="age" min="15" max="60"></td>
			       </div>
			</div>
				
			
			<div class="form-group row">
			  <label class="col-sm-2">Work Experience:</label>
			    <div class="col-sm-10">
				  <div class="radio">
				    <label>
					<input type="radio" name="experience" value="yes" onclick="show('area');">Yes <br><textarea row="5" column="30" name="area" placeholder="Experience About Previous Job" id="area" style="display:none;">None</textarea>
					</label>
				
				  </div>
				  <div class="radio">
				    <label>
					<input type="radio" name="experience" value="no" onclick="hide('area');">No 
			        </label>
				  </div>
				</div>
		    </div>
			
			<div class="form-group row">
			  <label class="col-sm-2">Attach Resume:</label>
			    <div class="col-sm-10">
					<input type="file" class="btn btn-secondary" name="file">
                </div>
			</div>
	 
	 
	        <div class="form-group row">
			    <label for="inputphone" class="col-sm-2 form-control-label"> Phone:</label>
				  <div class="col-sm-10">
					<input type="tel" class="form-control" name="contact" size="10" required pattern="(\+?\d[- .]*){10,11}$" required> (Format: 0123456789 / 01123456789)
                  </div>
            </div>				  
			
			<div class="form-group row">
			    <label for="inputemail" class="col-sm-2 form-control-label">Email</label>
				  <div class="col-sm-10">
					<input type="email" class="form-control" name="email" value="<?php echo $userinfo2['email']; ?>" required pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}"> (Ex: shahnaz@gmail.com)
				  </div>
			</div>
		
			<br>
			
			<div class="form-group row">
			  <div class="col-sm-offset-2 col-sm-10">
			    <a class="cancelbtn" href="index.php">CANCEL</a>
			    <input type="reset" class="btn btn-secondary" value="RESET">
			    <input type="submit" class="btn btn-primary" value="SUBMIT">
			  </div>
			</div>
			
		</form>
		
		  </div>
		</div>
	  </div>
	  
	</body>
	
</html>