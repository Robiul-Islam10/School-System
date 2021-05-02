<?php
	session_start();
	include('../database/db.php');
	//echo $_FILES['pic']['name'];
	if(isset($_REQUEST['submit']))
	{

		//$nam = trim($_REQUEST['stid']);     
		$id = trim($_REQUEST['idont']);
		//$grad = trim($_REQUEST['bname']);
		
		if($id!="")
		{
			//echo "mons";
			$conn = getConnection();
			
			$sql = "update message set isRespond= 1, response='Thank you for your feedback, We will look into the issue' where pid={$id}";
				
			
			mysqli_query($conn, $sql);
			//mysqli_query($conn, $sql1);
			//mysqli_query($conn, $sql2);
			//mysqli_query($conn, $sql3);
			//row = mysqli_fetch_assoc($result);
			
			//$count = mysqli_num_rows($result);
			mysqli_close($conn);
			echo "<script>
					alert('Marked');
					window.location.href='../views/feedback.php';
					</script>";
		}
		else
		{
			header('location: ../views/feedback.php');
			//echo "d";
		}
		
	}
	else{
		header('location: ../views/feedback.php');
	
	}
?>