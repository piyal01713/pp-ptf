<?php
include 'dbcon.php';
?>
<!-- <head><title>Job Finder</title>
<style>
table, th, td {
    border: 1px solid white;
}
th, td {
    padding: 5px;
}
</style>
</head>
	<body>
		<h2>Details</h2>
		<table style="width:30%"> -->
<?php 
if($conn){
	$sql="INSERT INTO user(
	register,
	email,
	username,
	password)
VALUES('$_POST[register]',
	'$_POST[email]',
	'$_POST[uname]',
	'$_POST[pwd]')";

if(mysqli_query($conn, $sql)){
	echo "Your post has been saved!<br>";
	echo "<a href='index.php'>Back to Job List</a>";
}
else{
	echo "Error: ". "<br>" . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
}
			?>
		<!-- </table>
		<br>
		<input type="button" onclick="alert('Succed')" value="OK">
	</body>
</html> -->