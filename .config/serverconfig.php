<?php
	
	
	$host ="localhost";
	$user = "root";
	$pass = "Webbie@1994";
	$dbname = "invest";

	$cxn = mysqli_connect($host, $user, $pass, $dbname);

    if (!$cxn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
        ?>

?>

