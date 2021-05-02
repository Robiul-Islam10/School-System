<?php
	session_start();
	include('../database/db.php');
	//echo $_FILES['pic']['name'];
	if(isset($_REQUEST['submit']))
	{

		$nam = trim($_REQUEST['tname']);     
		$id = trim($_REQUEST['tid']);
		//$sid = trim($_REQUEST['psid']);
		//$nid = trim($_REQUEST['pn']);		
		$pass = trim($_REQUEST['tpass']);
		$co = trim($_REQUEST['con']);
		$gen = $_REQUEST['tgender'];
		$grad = $_REQUEST['edu'];
		$subj = $_REQUEST['sub'];
		$desc="";
		//echo $gen;
		//$pho = trim($_REQUEST['pic']);
		//echo $_FILES['pic']['name'];
		if(isset($_SESSION['name']))
		{
		$r=$_SESSION['ref'];
		$desc = "../upload/".$r.".jpg";
		//echo "1";
		}
		//echo $_FILES['pic']['size'];
		//echo $desc;
			

				if(move_uploaded_file($_FILES['pic']['tmp_name'], $desc))
				{
					echo "Done!";
				}
				else
				{
					echo "Error";
				}
			
			
		//echo $nam;
		
		//echo $pass;
		//echo $grad;
		//echo $unam;
		if($nam!="" && $id!="" && $pass!="" && $gen!="" && $grad!="" && $subj!="" && $co!="")
		{
			//echo "mons";
			$conn = getConnection();
			$sql = "insert into users values('".$r."','".$nam."','".$pass."','3')";
			$sql1 = "insert into teacher values('".$r."','".$nam."','".$co."','".$gen."','".$grad."','".$subj."','".$desc."')";
			mysqli_query($conn, $sql);
			mysqli_query($conn, $sql1);
			//row = mysqli_fetch_assoc($result);
			
			//$count = mysqli_num_rows($result);
			mysqli_close($conn);
			echo "<script>
					alert('Registered');
					window.location.href='../views/regteacher.php';
					</script>";
		}
		else
		{
			header('location: ../views/regteacher.php');
			//echo "d";
		}
		
	}
	else
	{
		header('location: ../views/regteacher.php');
	}
?>