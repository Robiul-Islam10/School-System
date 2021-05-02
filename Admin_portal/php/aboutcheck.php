<?php
	session_start();
	include('../database/db.php');
	//echo $_FILES['pic']['name'];
	if(isset($_REQUEST['submit']))
	{

		//$nam = trim($_REQUEST['stid']);     
		$id = trim($_REQUEST['body']);
		//$grad = trim($_REQUEST['bname']);
		
		if($id!="")
		{
			//echo "mons";
			$conn = getConnection();
			
			$sql = "update about set us= '{$id}' where aid=0";
				
			
			mysqli_query($conn, $sql);
			//mysqli_query($conn, $sql1);
			//mysqli_query($conn, $sql2);
			//mysqli_query($conn, $sql3);
			//row = mysqli_fetch_assoc($result);
			
			//$count = mysqli_num_rows($result);
			mysqli_close($conn);
			echo "<script>
					alert('Edited');
					window.location.href='../views/about.php';
					</script>";
		}
		else
		{
			header('location: ../views/about.php');
			//echo "d";
		}
		
	}
	else{
		header('location: ../views/about.php');
	
	}
?>