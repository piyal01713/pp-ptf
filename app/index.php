<html>
<head>
	<Title>Job List</Title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<?php
    include 'dbcon.php';
    $sql = "SELECT * FROM posts";
    $results= mysqli_query($conn, $sql);
?>
<body>

    <div class="main">
        <header>
            <h1>Success!</h1>
        </header>
    <div>
</body>
</html>