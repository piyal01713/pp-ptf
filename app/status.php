<html>
	<head>
		<style>
		table, th, td {
		    border: 1px solid white;
		    border-collapse: collapse;
		}
		th, td {
		    padding: 5px;
		}
		</style>
		<link rel="stylesheet" type="text/css" href="main.css">
	</head>
	<body>
		<div class="tophead">
	    <header>
	        <div>
	            <h1>Status</h1>
	        </div>
	    </header>

	    <nav>
	        <a class="mainlink" href="index.php"> HOME </a>|
	        <a class="mainlink" href="#"> ABOUT </a>
	        <div class="userlink"><a class="username" href="#"> <?php echo $_SESSION['user']; ?> </a>|<a class="mainlink" href="#"> Status </a>|<a class="loglink" href="logout.php"> LOGOUT </a></div>
	    </nav>
    </div>

    <div class="middlebody">
        <p>
            <table class="maintable"border="0" width="100%">
                <thead>
                    <tr>
                        <th class="mainth">No.</th>
                        <th class="mainth">Job Feed</th>
                        <!-- <th>Companies</th>
                        <th>Salary</th> -->
                        <!-- <th>Address</th>
                        <th>Job Scope</th>
                        <th>Info</th>
                        <th>Job Category</th>
                        <th>Location Category</th> -->
                        <th class="mainth" colspan="2">Option</th>
                    </tr>
                </thead>

                
        	</table>
        </p>
	</body>
</html>