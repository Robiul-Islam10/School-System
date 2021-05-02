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
			
			$sql = "update contactus set contact= '{$id}' where conid=0";
				
			
			mysqli_query($conn, $sql);
			//mysqli_query($conn, $sql1);
			//mysqli_query($conn, $sql2);
			//mysqli_query($conn, $sql3);
			//row = mysqli_fetch_assoc($result);
			
			//$count = mysqli_num_rows($result);
			mysqli_close($conn);
			echo "<script>
					alert('Edited');
					window.location.href='../views/contact.php';
					</script>";
		}
		else
		{
			header('location: ../views/contact.php');
			//echo "d";
		}
		
	}
	else{
		header('location: ../views/contact.php');
	
	}
?>