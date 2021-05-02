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
			
			</table>
			
		</head>
		<body>
            <table border="1" width=100%>
			<tr>
			<td align="center" colspan="3"><h1>Featured Teachers</h1></td>
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
				
				<table height=500 width=100%>
				
				<td>
					<form method="post" action="../php/fcheck.php" onsubmit="return check1()" enctype="multipart/form-data">
					<table width=52% height=400 align="center">
					
					<tr>
					
					<td><h3>Serial</h3></td>
					<td><h3>:</h3></td>
					<td><h3><input type="text" name="serial" id="s"></h3></td>
					
					</tr>
					
					<tr>
					
					<td><h3>ID</h3></td>
					<td><h3>:</h3></td>
					<td><h3><input type="text" name="tname" id="tn"></h3></td>
					
					</tr>
					
					<tr>
					<div align="center">
					<td><h3>Quote</h3></td>
					<td><h3>:</h3></td>
					<td><h3><textarea name="quote" id="q" style="resize: none;" rows="5" cols="75"> </textarea></h3></td>
					</div>
					</tr>
					<tr>
					<td colspan="3" align="center"><input type="submit" name="submit" onclick="check()" value="Update"></td>
					</tr>
					</form>
					
				<tr>
			<td colspan="3">
					<table border="1" width=100% height=400>
					<tr>
					<td colspan="2" align="center"><h2>Featured Teachers</h2></td>
					</tr>
					<tr>
					<td align="center" >Serial:</td>
					<td align="center" >ID:</td>
					
					</tr>
					<?php
					//$key="Bangla";
					$conn = getConnection();
					$sql = "select serial,tid from featured";
					$result = mysqli_query($conn, $sql);
					$i=0;
					$n=0;
					
					while($row = mysqli_fetch_assoc($result)){
					?>
					
					<tr>
						<td align="center"><div id="d2"><?php echo $row['serial'] ; ?></div></td>
						<td align="center"><div id="d3"><?php echo $row['tid'] ;?><br></div></td>
					</tr>
					
					<?php 
					$i++;
					}?>
					</table>
				</td>
				</tr>
				<tr>
			<td colspan="3">
					<table border="1" width=100% height=400>
					<tr>
					<td colspan="2" align="center"><h2>All Teachers</h2></td>
					</tr>
					<tr>
					<td align="center" >ID:</td>
					<td align="center" >Name:</td>
					</tr>
					<?php
					//$key="Bangla";
					$conn = getConnection();
					$sql = "select tid,tname from teacher";
					$result = mysqli_query($conn, $sql);
					$i=0;
					$n=0;
					
					while($row = mysqli_fetch_assoc($result)){
					?>
					
					<tr>
						<td align="center"><div id="d2"><?php echo $row['tid'] ; ?></div></td>
						<td align="center"><div id="d3"><?php echo $row['tname'] ;?><br></div></td>
					</tr>
					
					<?php 
					$i++;
					}?>
					</table>
				</td>
				</tr>
			</tr>
					</table>
				</td>	
				
			</table>
		
			</td>
			
			</tr>
			
			</table>
			
			<script>
	var flag=1;
	var check = function()
	{
		var unam= document.getElementById('tn').value;
		var un= document.getElementById('s').value;
		
		var pa=document.getElementById('q').value;
		
				
		if(unam=="")
		{
			//onsubmit=false;
			alert("Please Enter ID");
			//alert (flag);
			//location.href = "http://localhost/examfinal/reg.php";
			
			flag=0;
			//alert (flag);
			//return false;
			check1();

		}
		else if(un=="")
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
			 
			alert("Please Select Quote");
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

