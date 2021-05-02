<?php
	session_start();
	include('../database/db.php');
	//echo $_FILES['pic']['name'];
	if(isset($_REQUEST['submit']))
	{

		$nam = trim($_REQUEST['sname']);     
		$id = trim($_REQUEST['sid']);	
		$pass = trim($_REQUEST['spass']);
		$gen = $_REQUEST['sgender'];
		$grad = $_REQUEST['class'];
		$desc="";
		//echo $gen;
		//$pho = trim($_REQUEST['pic']);
		//echo $_FILES['pic']['name'];
		if(isset($_SESSION['name']))
		{
		$r=$_SESSION['ref'];
		$desc = "../upload/".$r.".jpg";
		}
		//echo $_FILES['pic']['name'];
		//echo $desc;
			

				if(move_uploaded_file($_FILES['pic']['tmp_name'], $desc))
				{
					echo "Done!";
				}
				else
				{
					echo "Error";
				}
				
		
			
		echo $nam;
		
		echo $pass;
		echo $grad;
		//echo $unam;
		if($nam!="" && $id!="" && $pass!="" && $gen!="" && $grad!="")
		{
			//echo "mons";
			$conn = getConnection();
			$sql = "insert into users values('".$r."','".$nam."','".$pass."','2')";
			$sql1 = "insert into student values('".$r."','".$nam."','".$gen."','".$grad."','".$desc."')";
			mysqli_query($conn, $sql);
			mysqli_query($conn, $sql1);
			//row = mysqli_fetch_assoc($result);
			
			//$count = mysqli_num_rows($result);
			mysqli_close($conn);
			echo "<script>
					alert('Registered');
					window.location.href='../views/home.php';
					</script>";
		}
		else
		{
		    header('location: ../views/reg.php');
			//echo "d";
		}
		
	}
	else{
		header('location: ../views/reg.php');
	
	}
?>