<?php
include 'dbcon.php'; 
if($conn){
		
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

		if(mysqli_query($conn, $sql)){
		echo "<h1>You have sucessfully registered</h1><br>";
		echo "<a href='userlogin.php'>Back to login page</a>";
		}else{
				echo "Error: ". "<br>" . $sql . "<br>" . mysqli_error($conn);
		}	
	    
mysqli_close($conn);
}
?>