<?php
	session_start();
	include_once('../database/db.php');
	
	if(!isset($_SESSION['id'])){
		header("location: ../page/login.php");
	}
?>