<?php
	session_start();
	include_once('../database/db.php');

	if(isset($_REQUEST['submit']))
	{

		$name = trim($_REQUEST['uname']);
		$pass = trim($_REQUEST['pass']);
		$repass = trim($_REQUEST['repass']);
		$email = trim($_REQUEST['email']);
		$gender =trim($_REQUEST['gender']);

		if($name == ""){
			header('location: ../page/reg.php');
		}else if($pass == ""){
			header('location: ../page/reg.php');
		}else if($repass == ""){
			header('location: ../page/reg.php');
		}else if($email == ""){
			header('location: ../page/reg.php');
		}else{

		
		if($pass == $repass){
				
				$sql = "insert into users values('','{$name}','{$pass}','{$email}','{$gender}')";
				$con = getConnection();

				if(mysqli_query($con, $sql)){
					header('location: ../page/login.php');	
				}else{
					header('location: ../page/reg.php');
				}

			}else{
				header('location: ../page/reg.php');
			}
		}		
	}

?>
