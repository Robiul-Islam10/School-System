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
			<td align="center" colspan="3"><h1>Library Contents</h1></td>
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
				
				<td width=50% align="center"><h2>List:</h2></td>
				<td align="center"><h2>Add New:</h2></td>
				<tr>
				<td>
					<table border="1" width=100% height=400>
					<tr>
					<td align="center">ID:</td>
					<td align="center">Name:</td>
					</tr>
					<?php
					//$key="Bangla";
					$conn = getConnection();
					$sql = "select * from library";
					$result = mysqli_query($conn, $sql);
					$i=0;
					$n=0;
					
					while($row = mysqli_fetch_assoc($result)){
					?>
					
					<tr>
						<td align="center"><div id="d2"><?php echo $row['book_id'] ; ?></div></td>
						<td align="center"><div id="d3"><?php echo $row['book_name'] ;?><br></div></td>
					</tr>
					
					<?php 
					$i++;
					}?>
					</table>
				</td>
				<td>
					<table border="1" width=100% height=400>
					<tr>
					<form method="post" action="../php/addlibrarycheck.php" onsubmit="return check3()" enctype="multipart/form-data">
					<td><div align="center">
					<h3>
					<table>
					<tr>
					<td>Book ID</td>
					<td>: </td>
					<td><input type="text" name="bid" id="bi" /></td>
					</tr>
					<tr>
					<td>Name</td>
					<td>: </td>
					<td><input type="text" name="bname" id="bn" /></td>					
					</tr>
					
					<tr>
					<td colspan="3" align="center">
					<input type="submit" name="submit" onclick="check2()" value="Add">
					</td>
					</tr>
					</table></h3>
					</div></td>
					</form>
					</tr>
					</table>
				</td>
				</tr>
				
	
				<form method="post" action="../php/dellibrarycheck.php" onsubmit="return check1()" enctype="multipart/form-data">
				<tr>
					<h3><td align="center" colspan="2">Book ID: <input type="text" name="del" id="delete"> <input type="submit" name="submit" onclick="check()" value="Delete"></h3>
					</td>
				</tr>
				</form>
			</table>
		
			</td>
			</tr>
			</table>
			
			<script>
			
			var flag=1;
			var flag1=1;
			var check = function()
				{
					var unam= document.getElementById('delete').value;
				
					if(unam=="")
					{
						//onsubmit=false;
						alert("Please Enter Book ID to be Deleted");
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
				
				
				var check2 = function()
				{
					var unam= document.getElementById('bi').value;
					var un= document.getElementById('bn').value;
					if(unam=="")
					{
						//onsubmit=false;
						alert("Please Enter Book ID");
						//alert (flag);
						//location.href = "http://localhost/examfinal/reg.php";
			
						flag1=0;
						//alert (flag);
						//return false;
						check3();

					}
					else if(un=="")
					{
						//onsubmit=false;
						alert("Please Enter Book Name");
						//alert (flag);
						//location.href = "http://localhost/examfinal/reg.php";
			
						flag1=0;
						//alert (flag);
						//return false;
						check3();

					}
					else
					{
						//onsubmit=true;
						//return true;
						check3();
						//alert(flag);
					}
				}
				
				var check3 = function()
				{		
					if(flag1==1)
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

