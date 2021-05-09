<?php 	
	$dbhost = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'vf';
	$connect = new mysqli($dbhost, $username, $password, $dbname);
	// check connection
	if($connect->connect_error) {
	  die("Connection Failed : " . $connect->connect_error);
	} else {
	 // echo "Successfully connected";
	}

	session_start();
?>