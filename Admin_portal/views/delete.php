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
			<td align="center" colspan="3"><h1>Delete Accounts</h1></td>
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
				<form method="post" action="../php/deletecheck.php" onsubmit="return check1()" enctype="multipart/form-data">
				<table height=500 width=100%>
				<tr>
					<td colspan="2" align="center"><h3>Insert ID: <input type="text" name="stid" id="input">
					<input type="submit" name="submit" onclick="check()" value="Delete"> </h3>
					</td>
					
				</tr>
				<tr >
					<td colspan="2" align="center"><h3>User Type: <select name="grade" id="ss" onchange="test(this)">
						<option value="Student">Student</option>
						<!--<option value="Parents">Parents</option>-->
						<option value="Teachers">Teachers</option></h3> </td>
					
				</tr>
				<tr>
				<td width=50% align="center"><h2>Requested:</h2></td>
				<td align="center"><h2>All:</h2></td>
				</tr>
				<tr>
				<td align="center" colspan="2">
				<table border="1", width=100% height=400>
				<tr>
				<td>
					<div id="d2" align="center">
					<table width=100% height=390>
					
					
					<?php
					//$key="Bangla";
					$conn = getConnection();
					$sql = "select sid from deleterequest where sid IS NOT NULL";
					$result = mysqli_query($conn, $sql);
					$i=0;
					$n=0;
					
					while($row = mysqli_fetch_assoc($result)){
					?>
					
					<tr>
					
						<td align="center"><?php echo $row['sid'] ;?><br></td>
						
					</tr>
					
					<?php 
					$i++;
					}?>
					
					
					</table>
					</div>
				
				</td>
				
				<td>
					<div id="d1" align="center">
					<table width=100% height=390>
					
					<?php
					//$key="Bangla";
					$conn = getConnection();
					$sql = "select sid from student";
					$result = mysqli_query($conn, $sql);
					$i=0;
					$n=0;
					while($row = mysqli_fetch_assoc($result)){
					?>
					
					<tr>
						<td align="center"><?php echo $row['sid'] ;?><br></td>
					</tr>	
					
					
					<?php 
					$i++;
					}?>
					
					</table>
					</div>
				</td>
				</tr>
				</table>
				</td>
				</tr>
				
				
			</table>
		
	</form>
			</td>
			</tr>
			</table>
		
		<script type="text/javascript">
				var flag=1;
				var test= function(e)
				{
					$id=e.value;
					//alert($id);
					//document.getElementById("d1").innerHTML="<tr><td>gel</td></tr>";
					//document.getElementById("d1").innerHTML="sdsad";
					var xmlHttp = new XMLHttpRequest();

					xmlHttp.open('POST', '../php/search2.php', true);
					xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
					var abc = "key="+$id;
					
					xmlHttp.send(abc);

					xmlHttp.onreadystatechange = function()
					{

					
						if(this.readyState == 4 && this.status==200)
						{
							//alert(this.responseText);
							if(this.responseText.length==2)
							{
								document.getElementById('d1').innerHTML ="Empty";
							}
							else
							{
								document.getElementById('d1').innerHTML =this.responseText;
							}
							
							/*var ss=this.responseText;
							while(ss)
							{
							 alert(ss);
							}*/
						}
					}
					
					
					
					var xmlHttp1 = new XMLHttpRequest();

					xmlHttp1.open('POST', '../php/search3.php', true);
					xmlHttp1.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
					var abc1 = "key="+$id;
					
					xmlHttp1.send(abc1);

					xmlHttp1.onreadystatechange = function()
					{

					
						if(this.readyState == 4 && this.status==200)
						{
							//alert(this.responseText);
							if(this.responseText.length==2)
							{
								document.getElementById('d2').innerHTML ="Empty";
							}
							else
							{
								document.getElementById('d2').innerHTML =this.responseText;
							}
							
							/*var ss=this.responseText;
							while(ss)
							{
							 alert(ss);
							}*/
						}
					}
				}
				
				var check = function()
				{
					var unam= document.getElementById('input').value;
				
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

