<?php
	session_start();
	include('../database/db.php');
	//echo $_FILES['pic']['name'];
	if(isset($_REQUEST['submit']))
	{

		//$nam = trim($_REQUEST['stid']);     
		$id = trim($_REQUEST['del']);
		//$grad = trim($_REQUEST['grade']);
		
		if($id!="")
		{
			//echo "mons";
			$conn = getConnection();
			
			$sql = "delete from library where book_id={$id}";
				
			
			mysqli_query($conn, $sql);
			//mysqli_query($conn, $sql1);
			//mysqli_query($conn, $sql2);
			//mysqli_query($conn, $sql3);
			//row = mysqli_fetch_assoc($result);
			
			//$count = mysqli_num_rows($result);
			mysqli_close($conn);
			echo "<script>
					alert('Deleted');
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