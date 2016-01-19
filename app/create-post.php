<html>
<style type="tex/css">

.textbox {
	margin: auto;
	padding: 0px 10px 0px 0px;
}

</style>

<?php

$date = date("d/m/Y");

?>
<body>

<table border="0">
    <tbody>
        <tr>
            <!-- Form for data input -->
            <form name="create-post" action="Job-List.php" method="post">
                <td>Job Title:<br><br></td>
                <td><input name="job_title" type="text"><br><br></td>
        </tr>
        <tr>
                <td>Company:<br><br></td>
                <td><input name="company" type="text"><br><br></td>
        </tr>
        <tr>
                <td>Salary:<br><br></td>
                <td><input name="salary" type="text"> per hour<br><br></td>
        </tr>
        <tr>
                <td>Date:<br><br></td>
                <td><input name="date" type="text" value="<?php echo $date; ?>"><br><br></td>
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
            </form>
        </td>
    </tr>
</table>

<script>
function myFunction() {
    document.getElementById("PTF Test").reset();
}
</script>

</body>

</html>