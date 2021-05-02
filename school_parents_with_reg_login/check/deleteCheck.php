<?php
	session_start();
	include_once('../database/db.php');

	if(isset($_REQUEST['submit']))
	{
		$sql = "insert into deleterequest values(NULL,NULL,'{$_SESSION['id']}')";
		$con = getConnection();

		if(mysqli_query($con, $sql)){
			$message = "Request successful";
			echo "<script type='text/javascript'>alert('$message');
						window.location = '../page/home.php';
						</script>";
			//header('location: ../page/home.php');	
		}else{
			$message = "Request deny";
			echo "<script type='text/javascript'>alert('$message');
						window.location = '../page/delete.php';
						</script>";
			/*header('location: ../page/reg.php');*/
		}
	}

?>
