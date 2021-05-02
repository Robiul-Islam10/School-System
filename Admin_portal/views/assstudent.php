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
			<td align="center" colspan="3"><h1>Assign Students to Classes</h1></td>
			</tr>
			<tr>
			<td width=30%>
				<h3><li><a href="home.php">Register Students</a></li></h3>
				<h3><li><a href="regpar.php">Register Parents</a></li></h3>
				<h3><li><a href="regteacher.php">Register Teachers</a></li></h3>
				<h3><li><a href="assstudent.php">Assign Students</a></li></h3>
				<h3><li><a href="assteacher.php">Assign Teachers</a></li></h3>
				<h3><li><a href="delete.php">Delete Accounts</a></li></h3>
				<h3><li><a href="feedback.php ">Feedbacks</a></li></h3>
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
				<form method="post" action="../php/assignstudentcheck.php" onsubmit="return check1()" enctype="multipart/form-data">
				<table border="1" height=500 width=100%>
				<tr>
					<td colspan="2" align="center"><h3>Grade : <select name="grade" id="ss" onchange="test(this)">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option></h3> </td>
					
				</tr>
				<tr>
				<td width=50% align="center" height=60><h2>Student List:</h2></td>
				</tr>
				<tr>
				<td align="center">
				
				<div id="d1">
				<table>
				<?php
				$key=1;
				$conn = getConnection();
				$sql = "select sid from student where sclass={$key}";
				$result = mysqli_query($conn, $sql);
				$i=0;
				$n=0;
				while($row = mysqli_fetch_assoc($result)){
				?>
					
					<tr>
						<td align="center"><!--<input type="checkbox" name="{$i}" value="{$row['sid']}">--><?php echo $row['sid'] ;?><br></td>
						
					</tr>
					
				<?php 
				$i++;
				}?>
					
				</table>
				</div>
				</td>
				</tr>
				
				<tr>
					
					
					<h3><td align="center" colspan="2"><input type="text" name="stid" id="input"> <input type="submit" name="submit" onclick="check()" value="Assign"></h3>
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

					xmlHttp.open('POST', '../php/search.php', true);
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
				}
				
				var check = function()
				{
					var unam= document.getElementById('input').value;
				
					if(unam=="")
					{
						//onsubmit=false;
						alert("Please Enter Student ID");
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

<?php }
else
{
	header("location: login.php");
} ?>

