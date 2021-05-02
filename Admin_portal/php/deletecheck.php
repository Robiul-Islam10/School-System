<?php
	session_start();
	include('../database/db.php');
	//echo $_FILES['pic']['name'];
	if(isset($_REQUEST['submit']))
	{

		//$nam = trim($_REQUEST['stid']);     
		$id = trim($_REQUEST['stid']);
		$grad = trim($_REQUEST['grade']);
		
		if($id!="" && $grad!="")
		{
			//echo "mons";
			$conn = getConnection();
			if($grad=="Student")
			{
				$sql = "delete from users where id={$id}";
				$sql1= "delete from student where sid={$id}";
				$sql2= "delete from assign where sid={$id}";
				$sql3= "delete from parents where child={$id}";
				$sql4= "delete from deleterequest where sid={$id}";
			}
			else if($grad=="Teachers")
			{
				$sql = "delete from users where id={$id}";
				$sql1= "delete from teacher where tid={$id}";
				$sql2= "delete from assign where tid={$id}";
				//$sql3= "delete from parents where child={$id}";
				$sql4= "delete from deleterequest where tid={$id}";
			}
			
			
			//$sql1 = "insert into parents values('".$r."','".$nam."','".$sid."','".$nid."','".$co."','".$desc."')";
			if($grad=="Student")
			{
				mysqli_query($conn, $sql);
				mysqli_query($conn, $sql1);
				mysqli_query($conn, $sql2);
				mysqli_query($conn, $sql3);
				mysqli_query($conn, $sql4);
			}
			else if($grad=="Teachers")
			{
				mysqli_query($conn, $sql);
				mysqli_query($conn, $sql1);
				mysqli_query($conn, $sql2);
				//mysqli_query($conn, $sql3);
				mysqli_query($conn, $sql4);
			}
			
			mysqli_query($conn, $sql);
			//mysqli_query($conn, $sql1);
			//mysqli_query($conn, $sql2);
			//mysqli_query($conn, $sql3);
			//row = mysqli_fetch_assoc($result);
			
			//$count = mysqli_num_rows($result);
			mysqli_close($conn);
			echo "<script>
					alert('Deleted');
					window.location.href='../views/delete.php';
					</script>";
		}
		else
		{
			header('location: ../views/delete.php');
			//echo "d";
		}
		
	}
	else{
		header('location: ../views/delete.php');
	
	}
?>