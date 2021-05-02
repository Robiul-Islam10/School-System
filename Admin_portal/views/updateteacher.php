<?php
	session_start();
	if(isset($_SESSION['name'])){
		include('../database/db.php');
		$conn = getConnection();
			$latest=$_SESSION['quit'];
			$sql = "SELECT * FROM `teacher` where tid={$latest}";
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_assoc($result);
			
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
			<td align="center" colspan="3"><h1>Teacher Registration</h1></td>
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
				<form method="post" action="../php/upcheckteach.php" onsubmit="return check1()" enctype="multipart/form-data">
				<fieldset>
				<table height=500 align= "center">
				<tr>
					<td align="left"><h3>Name </h3></td>
					<td><h3>:</h3></td>
					<td><h3><input type="text" name="tname" id="tn" value=<?php echo htmlspecialchars($row['tname']); ?> ></h3></td>
					
				</tr>
				<tr>
					<td align="left"><h3>ID </h3></td>
					<td><h3>:</h3></td>
					<td><h3><input type="text" name="tid" value=<?php echo htmlspecialchars($latest); ?> readonly></h3></td>
				</tr>
				
				<tr>
					<td><h3>Contact Number</h3></td>
					<td><h3>:</h3></td>
					
					<td><h3><input type="text" name="con" id="c" value=<?php echo htmlspecialchars($row['tcontact']); ?>></h3></td>
					
				</tr>
				<tr> 
				<td><h3>Gender </h3></td>
				<td><h3>:</h3></td>
				<td>
					<h3>Male<input type="radio" name="tgender" id="gen1" value="Male" />
					Female<input type="radio" name="tgender" id="gen2" value="Female" />
					Other<input type="radio" name="tgender" id="gen3" value="Other" /></h3>
				</td>
				</tr>
				<tr>
					<td><h3>Subject </h3></td>
					<td><h3>:</h3></td>
					
					<td><h3><select name="sub">
						<option value="Bangla">Bangla</option>
						<option value="English">English</option>
						<option value="Mathematics">Mathematics</option>
						<option value="Science">Science</option>
						
					</select></h3></td>
					
				</tr>
				<tr>
					<td><h3>Education Level </h3></td>
					<td><h3>:</h3></td>
					
					<td><h3><select name="edu">
						<option value="Bachelors">Bachelors</option>
						<option value="Masters">Masters</option>
						<option value="Others">Others</option>
					</select></h3></td>
					
				</tr>
				<tr> 
				<td><h3>Photo </h3></td>
				<td><h3>:</h3></td>
				<td><h3><input type="file" name="pic" id="photo"></h3></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<h3><td align="right"><input type="reset" name="" value="Reset">
					<input type="submit" name="submit" onclick="check()" value="Update"></h3>
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
		var unam= document.getElementById('tn').value;
		var pass=document.getElementById('pas').value;
		
		var pa=document.getElementById('photo').value;
		
		var co=document.getElementById('c').value;		
		if(unam=="")
		{
			//onsubmit=false;
			alert("Please Enter Parents Name");
			//alert (flag);
			//location.href = "http://localhost/examfinal/reg.php";
			
			flag=0;
			//alert (flag);
			//return false;
			check1();

		}
		else if(pass=="")
		{
			//onsubmit=false;
			alert("Please Enter Password");
			flag=0;
			check1();
			//location.href = "http://localhost/examfinal/reg.php";
			//return false;
		}
		else if(co=="")
		{
			//onsubmit=false;
			alert("Please Enter Contact Number");
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

