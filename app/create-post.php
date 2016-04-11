<?php
include 'navigation.php';
include 'getcreatepost.php';
date_default_timezone_set("Asia/Kuala_Lumpur");
$date = date("F j, Y");
?>
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
        
        <h2>Create Post</h2>
        
        <div class="row">   
          <div class="col-md-8">
        
        
        
          <form  action="addpost.php" name="myForm" method="Post" enctype="multipart/form-data">
        
            <div class="form-group row">
                <label for="inputto" class="col-sm-2 form-control-label"> Job Title:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="work" type="text" required>
                  </div>
            </div>
            
            <div class="form-group row">
                <label for="inputname" class="col-sm-2 form-control-label"> Employer:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="Employer" type="text" required></td>
                  </div>
            </div>
            
            <div class="form-group row">
                <label for="inputage" class="col-sm-2 form-control-label"> Salary:</label>
                   <div class="col-sm-10">
                    <td>RM (Per Hour)<input type="number" min="0.01" step="0.01" class="form-control" name="salary"  required></td>
                   </div>
            </div>

            <div class="form-group row">
                <label for="inputage" class="col-sm-2 form-control-label"> Address:</label>
                    <div class="col-sm-10">
                    <td><textarea  class="form-control" rows="7" cols="40" maxlength="2000" name="location" required></textarea></td>
                    </div>
            </div>

            <div class="form-group row">
                <label for="inputage" class="col-sm-2 form-control-label"> Job Scope:</label>
                    <div class="col-sm-10">
                    <td><textarea  class="form-control" rows="7" cols="40" maxlength="2000" name="scope" required></textarea></td>
                    </div>
            </div>

            <div class="form-group row">
                <label for="inputage" class="col-sm-2 form-control-label"> Additional Info:</label>
                    <div class="col-sm-10">
                    <td><textarea  class="form-control" rows="7" cols="40" maxlength="2000" name="addinfo" required></textarea></td>
                    </div>
            </div>

            <div class="form-group row">
                <label for="inputage" class="col-sm-2 form-control-label"> Job Category:</label>
                <div class="col-sm-10">
                    <td>
                    <select name="jobcat">
                    <option values="Services">Services</option>
                    <option values="Food">Food</option>
                    </select>
                    </td>
                </div>
            </div>

            <div class="form-group row">
                <label for="inputage" class="col-sm-2 form-control-label"> Location Category:</label>
                <div class="col-sm-10">
                    <td>
                    <select name="loccat">
                    <option value="Kuala Lumpur">Kuala Lumpur</option>
                    <option value="Selangor">Selangor</option>
                    </select>
                    <input name="date_posted" type="hidden" value="<?php echo $date; ?>" readonly>
                    <input name="userid" type="hidden" value="<?php echo $userid; ?>">
                    </td>
                </div>
            </div>
                    
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