<?php
	session_start();
	include('../database/db.php');
	//echo $_FILES['pic']['name'];
	if(isset($_REQUEST['submit']))
	{

		$nam = trim($_REQUEST['tname']);     
		
		//echo $gen;
		//$pho = trim($_REQUEST['pic']);
		//echo $_FILES['pic']['name'];
		if(isset($_SESSION['name']))
		{
		$r= $nam;
		$desc = "../upload/".$r.".jpg";
		
		//echo $r;
		}
		unlink($desc);
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
		if($nam!="")
		{
			//echo "mons";
			$conn = getConnection();
			$sql = "update pictures set filepath= '{$desc}' where serial={$nam}";
			
			mysqli_query($conn, $sql);
			
			//row = mysqli_fetch_assoc($result);
			
			//$count = mysqli_num_rows($result);
			mysqli_close($conn);
			echo "<script>
					alert('Updated');
					window.location.href='../views/highlights.php';
					</script>";
		}
		else
		{
			header('location: ../views/highlights.php');
			//echo "d";
		}
		
	}
	else
	{
		header('location: ../views/highlights.php');
		
	}
?>