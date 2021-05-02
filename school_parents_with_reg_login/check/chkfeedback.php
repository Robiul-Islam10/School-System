<?php 
	
	require_once('../check/header.php');
	//echo $_SESSION['id'];
	$id=$_SESSION['id'];
	//echo $id;

	if(isset($_POST['submit'])){
		
		$comm = $_POST['comment'];
	
		if(!empty($comm)){
			$conn = getConnection();
			$sql = "insert into message values('$id','','$comm','')";


			if(mysqli_query($conn, $sql)){
				header("location: ../page/feedback.php");
			}else{
				header("location: ../page/feedback.php?error=sql_error");
			}

		}else{
			header("location: ../page/feedback.php?error=null_found");
		}
	}else{
		header("location: ../page/feedback.php?error=invalid_request");
	}

 ?>