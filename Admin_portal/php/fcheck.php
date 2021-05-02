<?php
	session_start();
	include('../database/db.php');
	//echo $_FILES['pic']['name'];
	if(isset($_REQUEST['submit']))
	{

		$nam = trim($_REQUEST['serial']);     
		$id = trim($_REQUEST['tname']);
		$grad = trim($_REQUEST['quote']);
		
		if($id!="")
		{
			//echo "mons";
			$conn = getConnection();
			
			$sql = "update featured set tid= {$id}, quote='{$grad}' where serial={$nam}";
				
			
			mysqli_query($conn, $sql);
			//mysqli_query($conn, $sql1);
			//mysqli_query($conn, $sql2);
			//mysqli_query($conn, $sql3);
			//row = mysqli_fetch_assoc($result);
			
			//$count = mysqli_num_rows($result);
			mysqli_close($conn);
			echo "<script>
					alert('Updated');
					window.location.href='../views/fteach.php';
					</script>";
		}
		else
		{
			header('location: ../views/fteach.php');
			//echo "d";
		}
		
	}
	else{
		header('location: ../views/fteach.php');
	
	}
?>