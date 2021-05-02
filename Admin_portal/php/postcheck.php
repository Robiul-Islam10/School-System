<?php
	session_start();
	include('../database/db.php');
	//echo $_FILES['pic']['name'];
	if(isset($_REQUEST['submit']))
	{

		//$nam = trim($_REQUEST['stid']);     
		$id = trim($_REQUEST['title']);
		$grad = trim($_REQUEST['content']);
		
		if($id!="" && $grad!="")
		{
			//echo "mons";
			$conn = getConnection();
			
			$sql = "insert into notice values('','a','{$id}','{$grad}','c','NULL')";
				
			
			mysqli_query($conn, $sql);
			//mysqli_query($conn, $sql1);
			//mysqli_query($conn, $sql2);
			//mysqli_query($conn, $sql3);
			//row = mysqli_fetch_assoc($result);
			
			//$count = mysqli_num_rows($result);
			mysqli_close($conn);
			echo "<script>
					alert('Posted');
					window.location.href='../views/notice.php';
					</script>";
		}
		else
		{
			echo "<script>
					alert('Error! Empty Field');
					window.location.href='../views/notice.php';
					</script>";
		}
		
	}
	else{
		header('location: ../views/notice.php');
	
	}
?>