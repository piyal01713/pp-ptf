<?php
include'getviewpost.php'
?>
<html>
<head>
    <Title>View Post</Title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<h1>View Post</h1>
<table class="viewtable" border="0" width="50%">
    <tbody>
        <tr>
            <td>Job Title:<br><br></td>
            <td><?php echo $postinfo['work']; ?><br><br></td>
        </tr>
        <tr>
            <td>Employer:<br><br></td>
            <td><?php echo $postinfo['employer']; ?><br><br></td>
        </tr>
        <tr>
            <td>Salary:<br><br></td>
            <td>RM<?php echo $postinfo['salary']; ?> per hour<br><br></td>
        </tr>
        <tr >
            <td>Address:<br><br></td>
            <td><?php echo $postinfo['location']; ?><br><br></td>
        </tr>
        <tr>
            <td>Scope of Work:<br><br></td>
            <td><?php echo $postinfo['scope']; ?><br><br></td>
        </tr>
        <tr>
            <td>Additional Info:<br><br></td>
            <td><?php echo $postinfo['addinfo']; ?><br><br></td>
        </tr>
        <tr>
            <td>Job Category:<br><br></td>
            <td><?php echo $postinfo['jobcat']; ?><br><br></td>
        </tr>
        <tr>
            <td>Location Category:<br><br></td>
            <td><?php echo $postinfo['loccat']; ?><br><br></td>
        </tr>
        <tr>
            <td>Date Post:<br><br></td>
            <td><?php echo $postinfo['date_posted']; ?><br><br></td>
        </tr>
        <tr>
        <?php
        echo $apply;
        ?>
        </tr>
    </tbody>
</table>
</body>
</html>