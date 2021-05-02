<?php
	session_start();
	include('../database/db.php');

	if(isset($_REQUEST['submit']))
	{

		$uname = trim($_REQUEST['uname']);
		$pass = trim($_REQUEST['pass']);

		$uid="";
		$sql = "select * from users where name = '{$uname}'";
		$conn = getConnection();
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		$uid = $row['id'];
		//echo $uid;
		
		if($uname == ""){
			header('location: ../page/login.php');
		}else if($pass == ""){
			header('location: ../page/login.php');
		}else{

			$conn = getConnection();
			$sql = "select * from users where name='".$uname."' and password='".$pass."'";
			$result = mysqli_query($conn, $sql);
			
			$count = mysqli_num_rows($result);
			mysqli_close($conn);
	
			if($count > 0 ){
	
				$_SESSION['id'] = $row['id'];
				//echo "1a".$_SESSION['id'];
				header('location: ../page/home.php');
			}

			else{
				//echo "1b".$_SESSION['id'];
				header('location: ../page/login.php');
			}
		}

	}else{
		//echo "1c".$_SESSION['id'];
		header('location: ../page/login.php');
	}
?>
