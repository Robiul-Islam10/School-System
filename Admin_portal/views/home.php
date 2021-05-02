<?php
	session_start();
	if(isset($_SESSION['name'])){
		include('../database/db.php');
		$conn = getConnection();
			$sql = "SELECT * FROM `users` ORDER BY ID DESC LIMIT 1";
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_assoc($result);
			$latest=$row['id']+1;
			$_SESSION['ref']=$latest;
			//echo $latest;
			//$count = mysqli_num_rows($result);
			mysqli_close($conn);
	
?>
		<!DOCTYPE html>
		<html>
		
		<head>
			<title>Admin Home Page</title>
			<table width=100%>
			<tr>
			<td width=30% align="center"><img src="scl.png" width="120" height="120"  ></td>
			<td><h1 style=font-size:60px align= "center">Welcome Admin!</h1></td>
			<td width=30%><a href="../php/logout.php" align="center"><h2>Logout</h2></a></td>
			</tr>
			</tr>
			</table>
			
		</head>
		<body>
            <table border="1" width=100%>
			<tr>
			<td align="center" colspan="3"><h1>Student Registration</h1></td>
			</tr>
			<tr>
			<td width=30%>
				<h3><li><a href="home.php">Register Students</a></li></h3>
				<h3><li><a href="regpar.php">Register Parents</a></li></h3>
				<h3><li><a href="regteacher.php">Register Teachers</a></li></h3>
				<h3><li><a href="assstudent.php">Assign Students</a></li></h3>
				<h3><li><a href="assteacher.php">Assign Teachers</a></li></h3>
				<h3><li><a href="delete.php">Delete Accounts</a></li></h3>
				<h3><li><a href="feedback.php">Feedbacks</a></li></h3>
				<h3><li><a href="fines.php">Issue Fines</a></li></h3>
				<h3><li><a href="adminlib.php">Library Contents</a></li></h3>
				<h3><li><a href="adminview.php">View Informations</a></li></h3>
				<h3><li>Homepage Manipulations
					<ul><a href="notice.php">Post Notice</a></ul>
					<ul><a href="admission.php">Admission</a></ul>
					<ul><a href="event.php">Upcoming Events</a></ul>
					<ul><a href="tution.php">Tution Fees</a></ul>
					<ul><a href="highlights.php">Highlights</a></ul>
					<ul><a href="fteach.php">Featured Teachers</a></ul>
					<ul><a href="about.php">Edit About Us</a></ul>
					<ul><a href="contact.php">Edit Contact Us</a></ul>
				</li></h3>
			</td>
			<td>
				<form method="post" action="../php/regcheckstu.php" onsubmit="return check1()" enctype="multipart/form-data">
				<fieldset>
				<table height=500 align= "center">
				<tr>
					<td align="left"><h3>Name </h3></td>
					<td><h3>:</h3></td>
					<td><h3><input type="text" name="sname" id="sn"></h3></td>
					
				</tr>
				<tr>
					<td align="left"><h3>ID </h3></td>
					<td><h3>:</h3></td>
					<td><h3><input type="text" name="sid" value="<?php echo htmlspecialchars($latest); ?>" readonly></h3></td>
				</tr>
				<tr>
					<td><h3>Password </h3></td>
					<td><h3>:</h3></td>
					<td><h3><input type="password" name="spass" id="sp"></h3></td>
				</tr>
				<tr> 
				<td><h3>Gender </h3></td>
				<td><h3>:</h3></td>
				<td>
					<h3>Male<input type="radio" name="sgender" value="Male" id="gen1" />
					Female<input type="radio" name="sgender" value="Female" id="gen2" />
					Other<input type="radio" name="sgender" value="Other" id="gen3" /></h3>
				</td>
				</tr>
				<tr>
					<td><h3>Grade </h3></td>
					<td><h3>:</h3></td>
					<td><h3>
					<select name="class">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						
					</select></h3>
					</td>
				</tr>
				<tr> 
				<td><h3>Photo </h3></td>
				<td><h3>:</h3></td>
				<td><h3><input type="file" name="pic" id="sphoto"></h3></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<h3><td align="right"><input type="reset" name="" value="Reset">
					<input type="submit" name="submit" onclick="check()" value="Register"></h3>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
			</td>
			</tr>
			</table>
		
	<script>
	var flag=1;
	var check = function()
	{
		var unam= document.getElementById('sn').value;
		var pas=document.getElementById('sp').value;
		var pa=document.getElementById('sphoto').value;
			
		if(unam=="")
		{
			//onsubmit=false;
			alert("Please Enter Student Name");
			//alert (flag);
			//location.href = "http://localhost/examfinal/reg.php";
			
			flag=0;
			//alert (flag);
			//return false;
			check1();

		}
		else if(pas=="")
		{
			//onsubmit=false;
			alert("Please Enter Password");
			flag=0;
			check1();
			//location.href = "http://localhost/examfinal/reg.php";
			//return false;
		}
		else if(!document.getElementById('gen1').checked && !document.getElementById('gen2').checked && !document.getElementById('gen3').checked)
		{
			 
			alert("Please Select Gender");
			flag=0;
			check1();
			 //alert("Select Gender");
			 //return false;
		}
		else if(pa=="")
		{
			 
			alert("Please Select Photo");
			flag=0;
			check1();
			 //alert("Select Gender");
			 //return false;
		}
		else
		{
			//onsubmit=true;
			//return true;
			check1();
			//alert(flag);
		}
	}
	var check1 = function()
	{
		if(flag==1)
			return true;
		else
			return false;
	}
	
</script>	
		
		</body>
		
		</html>		
<?php }else{
	header("location: login.php");
} ?>

