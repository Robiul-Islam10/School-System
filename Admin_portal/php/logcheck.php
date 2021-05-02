<?php
	session_start();
	include('../database/db.php');
	if(isset($_REQUEST['submit']))
	{
		$pass = trim($_REQUEST['pass']);
		$unam = trim($_REQUEST['uid']);
		
		if($pass!="" && $unam!="")
		{
			$conn = getConnection();
			$sql = "select * from users where id='".$unam."' and password='".$pass."'";
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_assoc($result);
			
			$count = mysqli_num_rows($result);
			mysqli_close($conn);
	
			if($count > 0 )
			{
				$_SESSION['name'] = "abc";
				$_SESSION['id'] = $unam;
				$_SESSION['type'] = $row['type'];
				$val=$row['type'];
				echo $val;
				if($val=='1')
				{
					echo "mas";
					header('location: ../views/home.php');
				}
				/*else if($val=='2')
				{
					header('location: ../views/studenthome.php');
				}
				else if($val=='3')
				{
					header('location: ../views/teacherhome.php');
				}
				else if($val=='4')
				{
					header('location: ../views/parentshome.php');
				} */
				//header('location: home.php');
			}
			else
			{
				/*$check=1;
				if($check==1)
				{*/
					//echo "ss";
					/*echo '<script type="text/javascript">',
					'alert("Invalid ID or Worng Password");',
					'</script>'
					;*/
					echo "<script>
					alert('There are no fields to generate a report');
					window.location.href='../views/login.php';
					</script>";
					//$check=2;
				//}
				/*if($check==2)
				{
					//sleep(10);
					//header('location: ../views/login.php');
				}*/
				//header('location: ../views/login.php');
			}
		}
		else
		{
			
			header('location: ../views/login.php');
			
		}
	}
	else
	{
		header('location: ../views/login.php');
		//echo "s1";
		//not submit;
	}
?>
