<?php 
include 'getdelmessage.php';
?>
<html>
	<head>
		<Title>Confirm Delete?</Title>
	    <link rel="stylesheet" type="text/css" href="main.css">
	</head>

	<body>
	<h1>Are you confirm delete this post?</h1>

	<input type="hidden" name="post_id" value="<?php echo $_GET['post_id']; ?>"/>
	
	<a href=\" index.php \">CANCEL</a>

	<?php echo"<a href=\" deletepost.php?post_id=".$postinfo['post_id']." \">CONFIRM</a>"; ?>
	</body>
</html>