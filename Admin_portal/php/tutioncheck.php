<?php
	session_start();
	include('../database/db.php');
	//echo $_FILES['pic']['name'];
	if(isset($_REQUEST['submit']))
	{

		//$nam = trim($_REQUEST['stid']);     
		$id = trim($_REQUEST['quantity']);
		$grad = trim($_REQUEST['class']);
		
		if($id!="")
		{
			//echo "mons";
			$conn = getConnection();
			
			$sql = "update fees set amount= '{$id}' where grade={$grad}";
				
			
			mysqli_query($conn, $sql);
			//mysqli_query($conn, $sql1);
			//mysqli_query($conn, $sql2);
			//mysqli_query($conn, $sql3);
			//row = mysqli_fetch_assoc($result);
			
			//$count = mysqli_num_rows($result);
			mysqli_close($conn);
			echo "<script>
					alert('Set');
					window.location.href='../views/tution.php';
					</script>";
		}
		else
		{
			header('location: ../views/tution.php');
			//echo "d";
		}
		
	}
	else{
		header('location: ../views/tution.php');
	
	}
?>