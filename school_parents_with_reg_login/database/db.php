<?php

	$server = "localhost";
	$user = "root";
	$password = "";
	$database = "project";


	function getConnection(){
		global $server, $user, $password, $database;
	
		$conn = mysqli_connect($server, $user, $password, $database);
		return $conn;
	}
?>