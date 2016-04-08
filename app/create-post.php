<?php
include 'dbcon.php';

//for navigation bar
include'navigation.php';

session_start();

if(!isset($_SESSION['user'])){
        header('Location: userlogin.php');
		
}

$sql="SELECT user_id FROM user WHERE username = '$_SESSION[user]' ";

    $results=mysqli_query($conn, $sql);

        if(mysqli_num_rows($results) > 0){

            while($userinfo=mysqli_fetch_array($results)){
                $userid =  $userinfo['user_id'];
            }
        }else{
            echo "Error: some codes are not correctly placed or one of the code spelling is wrong or does not match, please check back your codes";
        }
?>
<html>
<head>
    <Title>Create Post</Title>
    
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
            <li class="nav-item active">
               <a class="nav-link" href="<?php echo $createhref ?>"><?php echo $create ?></a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="<?php echo $loginhref ?>"><?php echo $login ?></a>
            </li>
          </ul>
    </nav>
	

<br>
	
	
	<div class="container">
	  <div class="row">	
          <div class="col-md-8">
              <h1>Create Post</h1>
			  
<!-- Form for data input -->
              <form name="create-post" action="addpost.php" method="post">

<!-- Gets today's date -->			  
<?php
    date_default_timezone_set("Asia/Kuala_Lumpur");
    $date = date("F j, Y");
?>
  
                <div class="form-group row">
                  <label for="jobtitle" class="col-sm-2 form-control-label">Job Title</label>
				    <div class="col-sm-8">
                      <input name="work" class="form-control" type="text" required>
					</div>
				</div>
				
				<div class="form-group row">
                  <label for="employer" class="col-sm-2 form-control-label">Employer</label>
				    <div class="col-sm-8">
                     <input name="employer" class="form-control" type="text" required>
					</div>
				</div>
            
			    <div class="form-group row">
                  <label for="salary" class="col-sm-2 form-control-label">Salary:
                RM</label>
				    <div class="col-sm-8">
                      <input name="salary" class="form-control" type="number" required> (Per Hour)
					</div>
				</div>
            
			    <div class="form-group row">
                  <label for="address" class="col-sm-2 form-control-label">Address</label>
				    <div class="col-sm-8">
                <!-- setting text area box size rows= height, cols= width, maxlength= char limit  -->
                    <textarea rows="7" cols="40" maxlength="2000" class="form-control" name="location" required></textarea>
					</div>
				</div>
                
				<div class="form-group row">
                  <label for="scope" class="col-sm-2 form-control-label">Scope of Work</label>
				    <div class="col-sm-8">
<!-- setting text area box size rows= height, cols= width, maxlength= char limit  -->
                    <textarea rows="7" cols="40" maxlength="2000" class="form-control" name="scope"></textarea>
                    </div>
				</div>
				
				
				<div class="form-group row">
                  <label for="addinfo" class="col-sm-2 form-control-label">Additional Info</label>
				    <div class="col-sm-8">
<!-- setting text area box size rows= height, cols= width, maxlength= char limit  -->
                    <textarea rows="7" cols="40" maxlength="2000" class="form-control" name="addinfo"></textarea>
					</div>
				</div>
				
                <div class="form-group row">
                  <label for="jobcat" class="col-sm-2 form-control-label">Job Category</label>
				    <div class="col-sm-8">
<!-- setting text area box size rows= height, cols= width, maxlength= char limit  -->
                      <select class="form-control" name="jobcat">
                        <option values="Services">Services</option>
                        <option values="Food">Food</option>
                      </select>
					</div>
			    </div>
                
				<div class="form-group row">
                  <label for="location" class="col-sm-2 form-control-label">Location Category</label>
				    <div class="col-sm-8">
<!-- setting text area box size rows= height, cols= width, maxlength= char limit  -->
                        <select class="form-control" name="loccat">
                          <option value="Kuala Lumpur">Kuala Lumpur</option>
                          <option value="Selangor">Selangor</option>
                        </select>
					</div>
			    </div>	
					
					
                <div class="form-group row">
                  <label for="employer" class="col-sm-2 form-control-label">Date  </label>
				    <div class="col-sm-8">
                      <input class="form-control" name="date_posted" type="text" value="<?php echo $date; ?>" readonly>
					</div>
				</div>
            
	<input name="userid" type="hidden" value="<?php echo $userid; ?>">
  
                <div class="form-group row">
			      <div class="col-sm-offset-2 col-sm-10">
                    <a class="cancelbtn" href="index.php">CANCEL</a>
                    <form action="demo_form.asp" method="get">
					  <input class="btn btn-primary" type="submit" name="submitBtn" value="POST">
                      <input class="btn btn-secondary" type="reset" name="resetBtn" value="RESET">
                    </form>
				  </div>
			    </div>
           
       
    
</form>
</body>
</html>