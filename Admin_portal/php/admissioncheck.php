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
			
			$sql = "update admission set instructions= '{$id}' where adid=0";
				
			
			mysqli_query($conn, $sql);
			//mysqli_query($conn, $sql1);
			//mysqli_query($conn, $sql2);
			//mysqli_query($conn, $sql3);
			//row = mysqli_fetch_assoc($result);
			
			//$count = mysqli_num_rows($result);
			mysqli_close($conn);
			echo "<script>
					alert('Set');
					window.location.href='../views/admission.php';
					</script>";
		}
		else
		{
			header('location: ../views/admission.php');
			//echo "d";
		}
		
	}
	else{
		header('location: ../views/admission.php');
	
	}
?>