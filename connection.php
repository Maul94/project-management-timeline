<?php
	$db_host 		= 'localhost';
	$db_user 		= 'root';
	$db_pass 		= '';
	$db_database 	= 'database';
	// $db_port		= '3307';

	$conn = mysqli_connect($db_host,$db_user,$db_pass,$db_database,$db_port);


	if (mysqli_connect_error()) {
    	// die('Connect Error: ' . mysqli_connect_error());
    	echo "Gak onok tabele woe!!!!";
	}
	else {
    	// echo 'Success... ' . mysqli_get_host_info($link) . "\n";
    	// return $link;
	}
?>