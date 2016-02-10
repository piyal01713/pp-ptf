<html>
<head>
    <Title>Create Post</Title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<!-- Form for data input -->
<form name="create-post" action="addpost.php" method="post">
<?php
date_default_timezone_set("Asia/Kuala_Lumpur");
$date = date("Y.m.d");
?>
<h1>Create Post</h1>
    <table border="0">
        <tbody>
            <tr>
                <td>Job Title:<br><br></td>
                <td><input name="work" type="text"><br><br></td>
            </tr>
            <tr>
                <td>Company:<br><br></td>
                <td><input name="employer" type="text"><br><br></td>
            </tr>
            <tr>
                <td>Salary:<br><br></td>
                <td>RM <input name="salary" type="text"> (per hour)<br><br></td>
            </tr>
            <tr>
                <td>Address:<br><br></td>
                <!-- setting text area box size rows= height, cols= width, maxlength= char limit  -->
                <td><textarea rows="7" cols="40" maxlength="2000" name="location"></textarea><br><br></td>
            </tr>
            <tr>
                <td>Job Scope:<br><br></td>
                <!-- setting text area box size rows= height, cols= width, maxlength= char limit  -->
                <td><textarea rows="7" cols="40" maxlength="2000" name="scope"></textarea><br><br></td>
            </tr>
            <tr>
                <td>Additional Info:<br><br></td>
                <!-- setting text area box size rows= height, cols= width, maxlength= char limit  -->
                <td><textarea rows="7" cols="40" maxlength="2000" name="addinfo"></textarea><br><br></td>
            </tr>
            <tr>
                <td>Job Category:<br><br></td>
                <!-- setting text area box size rows= height, cols= width, maxlength= char limit  -->
                <td><select name="jobcat">
                    <option values="Services">Services</option>
                    <option values="Food">Food</option>
                </select><br><br></td>
            </tr>
            <tr>
                <td>Location Category:<br><br></td>
                <!-- setting text area box size rows= height, cols= width, maxlength= char limit  -->
                <td><select name="loccat">
                <option value="Kuala Lumpur">Kuala Lumpur</option>
                <option value="Selangor">Selangor</option>
                </select><br><br></td>
            </tr>
            <tr>
                <td>Date of Post:<br><br></td>
                <td><input name="date_posted" type="text" value="<?php echo $date; ?>" readonly><br><br></td>
            </tr>
        </tbody>
    </table>
    <table ="0">
        <tr>
            <td>
                <form action="demo_form.asp" method="get">
                    <input type="reset" name="resetBtn" value="CLEAR">
                    <input type="submit" name="submitBtn" value="POST">
                </form>
            </td>
        </tr>
    </table>
</form>
</body>
</html>