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
			if($grad==1)
			{
				$sql = "insert into assign (sid,cid) values('".$id."','1001')";
				$sql1 = "insert into assign (sid,cid) values('".$id."','1002')";
				$sql2 = "insert into assign (sid,cid) values('".$id."','1003')";
				$sql3 = "insert into assign (sid,cid) values('".$id."','1004')";
			}
			else if($grad==2)
			{
				$sql = "insert into assign (sid,cid) values('".$id."','2001')";
				$sql1 = "insert into assign (sid,cid) values('".$id."','2002')";
				$sql2 = "insert into assign (sid,cid) values('".$id."','2003')";
				$sql3 = "insert into assign (sid,cid) values('".$id."','2004')";
			}
			else if($grad == 3)
			{
				$sql = "insert into assign (sid,cid) values('".$id."','3001')";
				$sql1 = "insert into assign (sid,cid) values('".$id."','3002')";
				$sql2 = "insert into assign (sid,cid) values('".$id."','3003')";
				$sql3 = "insert into assign (sid,cid) values('".$id."','3004')";
			}
			else if($grad ==4)
			{
				$sql = "insert into assign (sid,cid) values('".$id."','4001')";
				$sql1 = "insert into assign (sid,cid) values('".$id."','4002')";
				$sql2 = "insert into assign (sid,cid) values('".$id."','4003')";
				$sql3 = "insert into assign (sid,cid) values('".$id."','4004')";
			}
			else if ($grad == 5)
			{
				$sql = "insert into assign (sid,cid) values('".$id."','5001')";
				$sql1 = "insert into assign (sid,cid) values('".$id."','5002')";
				$sql2 = "insert into assign (sid,cid) values('".$id."','5003')";
				$sql3 = "insert into assign (sid,cid) values('".$id."','5004')";
			}
			
			//$sql1 = "insert into parents values('".$r."','".$nam."','".$sid."','".$nid."','".$co."','".$desc."')";
			mysqli_query($conn, $sql);
			mysqli_query($conn, $sql1);
			mysqli_query($conn, $sql2);
			mysqli_query($conn, $sql3);
			//row = mysqli_fetch_assoc($result);
			
			//$count = mysqli_num_rows($result);
			mysqli_close($conn);
			echo "<script>
					alert('Assigned');
					window.location.href='../views/assstudent.php';
					</script>";
		}
		else
		{
			header('location: ../views/assstudent.php');
			//echo "d";
		}
		
	}
	else{
		header('location: ../views/assstudent.php');
	
	}
?>