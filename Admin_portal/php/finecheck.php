<?php
	session_start();
	include('../database/db.php');
	//echo $_FILES['pic']['name'];
	if(isset($_REQUEST['submit']))
	{

		//$nam = trim($_REQUEST['stid']);     
		$id = trim($_REQUEST['fine']);
		$id1 = trim($_REQUEST['quantity']);
		$grad = trim($_REQUEST['pay']);
		//echo $grad;
		echo $id;
		echo $id1;
		
		if($id!="" && $grad!="" && $id1!="")
		{
			//echo "mons";
			$conn = getConnection();
			
			$sql = "update issuefine set amount='{$id1}', ground='{$grad}', status=1 where sid={$id}";
			
			
			mysqli_query($conn, $sql);
			//mysqli_query($conn, $sql1);
			//mysqli_query($conn, $sql2);
			//mysqli_query($conn, $sql3);
			//row = mysqli_fetch_assoc($result);
			
			//$count = mysqli_num_rows($result);
			mysqli_close($conn);
			echo "<script>
					alert('Issued');
					window.location.href='../views/fines.php';
					</script>";
		}
		else
		{
			header('location: ../views/fines.php');
			//echo "d";
		}
		
	}
	else{
		header('location: ../views/fines.php');
	
	}
?>