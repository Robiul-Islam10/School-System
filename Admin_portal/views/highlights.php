<?php
	session_start();
	include('../database/db.php');
	if(isset($_SESSION['name'])){	
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
			<td align="center" colspan="3"><h1>Highlights</h1></td>
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
			<form method="post" action="../php/highcheck.php" onsubmit="return check1()" enctype="multipart/form-data">	
				<table height=300 width=20% align="center">
				
				<tr>
				<td width=20% align="center"><h2>Add:</h2></td>
				
				<tr>
				<td>
					<table align="center" width=50% height=200>
					<tr>
					<td><div align="center"><h3>Serial </h3></div></td>
					<td><div align="center">:</div></td>
					<td><div align="left"><input type="text" name="tname" id="tn"></div></td>
					</tr>
					<tr>
					<td><div align="center"><h3>Image </h3></div></td>
					<td><div align="center">:</div></td>
					<td><div align="left"><input type="file" name="pic" id="photo"></div></td>
					</tr>
					<tr>
					<h3><td colspan="3" align="center"><input type="submit" name="submit" onclick="check()" value="Update"></td></h3>
					</tr>
					</table>
				</td>
				</tr>
					
					
			</table>
		
			</form>
			</td>
			</tr>
			</table>
			
			<script>
	var flag=1;
	var check = function()
	{
		var unam= document.getElementById('tn').value;
		
		
		var pa=document.getElementById('photo').value;
		
				
		if(unam=="")
		{
			//onsubmit=false;
			alert("Please Enter Serial");
			//alert (flag);
			//location.href = "http://localhost/examfinal/reg.php";
			
			flag=0;
			//alert (flag);
			//return false;
			check1();

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

