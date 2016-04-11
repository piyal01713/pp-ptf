<?php
//include php external file
include 'dbcon.php';
//start the session
session_start();
//check if user session exist
if(isset($_SESSION['user'])){
	//redirect to link
	header('Location: index.php');
}

//check if the field exists
if(!isset($_POST['email']) && !isset($_POST['username']) && !isset($_POST['password'])){
	// set error message as variable
	$emailerror = "";
	$usererror = "";
	$passerror = "";

}else{

	//set field as variable
	$name = $_POST['username'];
	$email = $_POST['email'];
	//set sql statement to select all username & email
	$sql1 = "SELECT username,email FROM user WHERE username = '$_POST[username]' OR email = '$_POST[email]' ";
	//run sql statement using query
	$results1 = mysqli_query($conn, $sql1);
	//set record row
	$rows = mysqli_num_rows($results1);
	//fetch record
	$compare = mysqli_fetch_array($results1);
	//set record as variable
	$compare['email'];
	$compare['username'];

	//check if password field input is not a match
	if($_POST['confirmpwd'] != $_POST['password']){

		//set password error message
		$passerror = "Your Password Didn't Match";

	//check if username field input is a match
	}elseif($_POST['username'] == $compare['username']){

		//set user error message
		$usererror = "This Username Has Been Taken";

	//check if email field input is a match
	}elseif($_POST['email'] == $compare['email']){

		//set email error message
		$emailerror = "This Email Has Already Been Registered";

	}else{
		//set sql statement to insert all field to database table
		$sql="INSERT INTO user(
				type,
				email,
				username,
				password,
				date_created)
			VALUES('$_POST[type]',
				'$_POST[email]',
				'$_POST[username]',
				'$_POST[password]',
				'$_POST[regdate]')";

			//check if query run
			if(mysqli_query($conn, $sql)){
				//redirect to link
				header("Location: regmsg.html");
			}else{
				//display sql error message
				echo "Error: ". "<br>" . $sql . "<br>" . mysqli_error($conn);

			}
			//close sql quaries
			mysqli_close($conn);
	}

}
?>