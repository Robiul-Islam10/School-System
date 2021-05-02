<?php
	session_start();
	include('../database/db.php');
	//echo $_FILES['pic']['name'];
	if(isset($_REQUEST['submit']))
	{

		//$nam = trim($_REQUEST['stid']);     
		$id = trim($_REQUEST['stid']);
		$grad = trim($_REQUEST['grade']);
		$clas= trim($_REQUEST['class']);
		if($id!="" && $grad!="" && $clas!="")
		{
			//echo "mons";
			$conn = getConnection();
			if($clas==1)
			{
				if($grad=="Bangla")
				{
					$sql = "insert into assign (cid,tid,timing) values('1001','".$id."','8-9')";
				}
				else if($grad=="English")
				{
					$sql = "insert into assign (cid,tid,timing) values('1002','".$id."','9-10')";
				}
				else if($grad=="Mathematics")
				{
					$sql = "insert into assign (cid,tid,timing) values('1003','".$id."','10-11')";
				}
				else if($grad=="Science")
				{
					$sql = "insert into assign (cid,tid,timing) values('1004','".$id."','11-12')";
				}
				//$sql = "insert into assign (sid,cid) values('".$id."','1001')";
				//$sql1 = "insert into assign (sid,cid) values('".$id."','1002')";
				//$sql2 = "insert into assign (sid,cid) values('".$id."','1003')";
				//$sql3 = "insert into assign (sid,cid) values('".$id."','1004')";
			}
			else if($clas==2)
			{
				if($grad=="Bangla")
				{
					$sql = "insert into assign (cid,tid,timing) values('2001','".$id."','8-9')";
				}
				else if($grad=="English")
				{
					$sql = "insert into assign (cid,tid,timing) values('2002','".$id."','9-10')";
				}
				else if($grad=="Mathematics")
				{
					$sql = "insert into assign (cid,tid,timing) values('2003','".$id."','10-11')";
				}
				else if($grad=="Science")
				{
					$sql = "insert into assign (cid,tid,timing) values('2004','".$id."','11-12')";
				}
			}
			else if($clas == 3)
			{
				if($grad=="Bangla")
				{
					$sql = "insert into assign (cid,tid,timing) values('3001','".$id."','8-9')";
				}
				else if($grad=="English")
				{
					$sql = "insert into assign (cid,tid,timing) values('3002','".$id."','9-10')";
				}
				else if($grad=="Mathematics")
				{
					$sql = "insert into assign (cid,tid,timing) values('3003','".$id."','10-11')";
				}
				else if($grad=="Science")
				{
					$sql = "insert into assign (cid,tid,timing) values('3004','".$id."','11-12')";
				}
			}
			else if($clas ==4)
			{
				if($grad=="Bangla")
				{
					$sql = "insert into assign (cid,tid,timing) values('4001','".$id."','8-9')";
				}
				else if($grad=="English")
				{
					$sql = "insert into assign (cid,tid,timing) values('4002','".$id."','9-10')";
				}
				else if($grad=="Mathematics")
				{
					$sql = "insert into assign (cid,tid,timing) values('4003','".$id."','10-11')";
				}
				else if($grad=="Science")
				{
					$sql = "insert into assign (cid,tid,timing) values('4004','".$id."','11-12')";
				}
			}
			else if ($clas == 5)
			{
				if($grad=="Bangla")
				{
					$sql = "insert into assign (cid,tid,timing) values('5001','".$id."','8-9')";
				}
				else if($grad=="English")
				{
					$sql = "insert into assign (cid,tid,timing) values('5002','".$id."','9-10')";
				}
				else if($grad=="Mathematics")
				{
					$sql = "insert into assign (cid,tid,timing) values('5003','".$id."','10-11')";
				}
				else if($grad=="Science")
				{
					$sql = "insert into assign (cid,tid,timing) values('5004','".$id."','11-12')";
				}
			}
			
			//$sql1 = "insert into parents values('".$r."','".$nam."','".$sid."','".$nid."','".$co."','".$desc."')";
			mysqli_query($conn, $sql);
			//mysqli_query($conn, $sql1);
			//mysqli_query($conn, $sql2);
			//mysqli_query($conn, $sql3);
			//row = mysqli_fetch_assoc($result);
			
			//$count = mysqli_num_rows($result);
			mysqli_close($conn);
			echo "<script>
					alert('Assigned');
					window.location.href='../views/assteacher.php';
					</script>";
		}
		else
		{
			header('location: ../views/assteacher.php');
			//echo "d";
		}
		
	}
	else{
		header('location: ../views/assteacher.php');
	
	}
?>