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
			<td align="center" colspan="3"><h1>Parents Registration</h1></td>
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
				<form method="post" action="../php/regparcheck.php" onsubmit="return check1()" enctype="multipart/form-data">
				<fieldset>
				<table height=500 align= "center">
				<tr>
					<td align="left"><h3>Name </h3></td>
					<td><h3>:</h3></td>
					<td><input type="text" name="pname" id="pn"></td>
					
				</tr>
				<tr>
					<td align="left"><h3>ID </h3></td>
					<td><h3>:</h3></td>
					<td><h3><input type="text" name="pid" id="pi" value=<?php echo htmlspecialchars($latest); ?> readonly></h3></td>
				</tr>
				<tr>
					<td><h3>Password </h3></td>
					<td><h3>:</h3></td>
					<td><h3><input type="password" name="ppass" id="pas"></h3></td>
				</tr>
				
				<tr>
					<td><h3>Parents of </h3></td>
					<td><h3>:</h3></td>
					
					<td><h3><input type="text" name="psid" id="po"></h3></td>
					
				</tr>
				<tr>
					<td><h3>Contact Number</h3></td>
					<td><h3>:</h3></td>
					
					<td><h3><input type="text" name="con" id="c"></h3></td>
					
				</tr>
				<tr>
					<td><h3>NID </h3></td>
					<td><h3>:</h3></td>
					
					<td><h3><input type="text" name="pn" id="pnid"></h3></td>
					
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
		var unam= document.getElementById('pn').value;
		var pass=document.getElementById('pas').value;
		var ps=document.getElementById('po').value;
		var pa=document.getElementById('photo').value;
		var pn=document.getElementById('pnid').value;
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
		else if(pa=="")
		{
			 
			alert("Please Select Photo");
			flag=0;
			check1();
			 //alert("Select Gender");
			 //return false;
		}
		else if(ps=="")
		{
			 
			alert("Please Enter Child's ID");
			flag=0;
			check1();
			 //alert("Select Gender");
			 //return false;
		}
		else if(pn=="")
		{
			 
			alert("Please Enter NID");
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

