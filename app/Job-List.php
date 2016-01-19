<html>
<head>
	<Title>Job List</Title>
    <link rel="stylesheet" type="text/css" href="Job-List.css">
</head>

<body>
    <div class="main">
        <header>
            <h1>Job List</h1>
        </header>

        <p class="createbtn">
            <a href="create-post.php">Create New Post</a>
        </p>

        <p>
            <table border="1" width="100%">
                <thead>
                    <tr>
                        <th>Job Title</th>
                        <th>Company</th>
                        <th>Salary</th>
                        <th>Date</th>
                        </tr>
                </thead>
                <tbody>
                    <tr>
                    <td><?php echo $_POST["job_title"]; ?></td>
                    <td><?php echo $_POST["company"]; ?></td>
                    <td><?php echo $_POST["salary"]; ?></td>
                    <td><?php echo $_POST["date"]; ?></td>
                    </tr>
                    <tr>
                        <td colspan="4"><hr></td>
                    </tr>
                </tbody>
            </table>

    <div>
</body>
</html>