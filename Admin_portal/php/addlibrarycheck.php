<?php
	session_start();
	include('../database/db.php');
	//echo $_FILES['pic']['name'];
	if(isset($_REQUEST['submit']))
	{

		//$nam = trim($_REQUEST['stid']);     
		$id = trim($_REQUEST['bid']);
		$grad = trim($_REQUEST['bname']);
		
		if($id!="" && $grad!="")
		{
			//echo "mons";
			$conn = getConnection();
			
			$sql = "insert into library values({$id}, '{$grad}')";
				
			
			mysqli_query($conn, $sql);
			//mysqli_query($conn, $sql1);
			//mysqli_query($conn, $sql2);
			//mysqli_query($conn, $sql3);
			//row = mysqli_fetch_assoc($result);
			
			//$count = mysqli_num_rows($result);
			mysqli_close($conn);
			echo "<script>
					alert('Added');
					window.location.href='../views/adminlib.php';
					</script>";
		}
		else
		{
			header('location: ../views/adminlib.php');
			//echo "d";
		}
		
	}
	else{
		header('location: ../views/adminlib.php');
	
	}
?>