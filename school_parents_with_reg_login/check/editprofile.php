<?php

	require_once('../check/header.php');

	$uid="";
	$sql = "select * from users where id = '{$_SESSION['id']}'";
	$conn = getConnection();
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	$uid = $row['id'];
	//echo $uid;

	if(isset($_POST['update'])){
		
		$uname 		= $_POST['name'];
		$upassword 	= $_POST['password'];
		$uemail 		= $_POST['email'];
	
		if(!empty($uname) && !empty($upassword) && !empty($uemail)){
			$conn = getConnection();
			$sql = "Update users set name='{$uname}', password='{$upassword}', email='{$uemail}' where id='{$uid}'";


			if(mysqli_query($conn, $sql)){
				header("location: ../page/profile.php");
			}else{
				header("location: ../page/profile.php?error=sql_error");
			}

		}else{
			header("location: ../page/profile.php?error=null_found");
		}
	}else{
		header("location: ../page/profile.php?error=invalid_request");
	}
?>