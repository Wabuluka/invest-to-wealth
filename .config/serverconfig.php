<?php
	
	
	$host ="localhost";
	$user = "root";
	$pass = "Webbie@1994";
	$dbname = "invest";

	$cxn = mysqli_connect($host, $user, $pass, $dbname)
		or die ('Could not establish connection to database' .mysql_error());


?>

