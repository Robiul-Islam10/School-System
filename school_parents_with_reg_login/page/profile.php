<?php
	require_once('../check/header.php');
	/*$conn = getConnection();
				$sql = "select password from users where name = '{$_SESSION['name']}'";
				$result = mysqli_query($conn, $sql);
				$row = mysqli_fetch_assoc($result);
				echo $row['password'];*/
?>

<!DOCTYPE html>
<html>
<head>
	<title>User Profile</title>
</head>

<body>
<center>
	<img src="img.JPG" width="10%">
</center>

<table border="1" width="100%">
				<tr>
					<td colspan="3"><br><h2><center>User Profile</center></h2><br></td>
					
				</tr>
				<tr>
				<td rowspan="2" width="30%">
					<li><a href="home.php"><button><b>Home</b></button></a><br><br></li> 
					<li><a href="profile.php"><button><b>Profile</b></button></a><br><br></li> 
					<li><a href="payment.php"><button><b>Payment Information</b></button></a><br><br></li> 
					<li><a href="result.php"><button><b>Result</b></button></a><br><br></li> 
					<li><a href="attendance.php"><button><b>Attendance</b></button></a><br><br></li> 
					<li><a href="notice.php"><button><b>Notice</b></button></a><br><br></li> 
					<li><a href="course.php"><button><b>Assigned Course</b></button></a><br><br></li> 
					<li><a href="syllabus.php"><button><b>Download syllabus</b></button></a><br><br></li> 
					<li><a href="contact.php"><button><b>Contact</b></button></a><br><br></li> 
					<li><a href="feedback.php"><button><b>Give Feedback</b></button></a><br><br></li> 
					<li><a href="delete.php"><button><b>Request for delete account</b></button></a><br><br></li> 
					<li><a href="AboutUs.php"><button><b>About Us</b></button></a><br><br></li> 
				</td>
				</tr>




				<td>
				
				<table height=500 width=100%>
		
				<tr>
				<td width=50% align="center"><h3>Current Profile:</h3></td>
				<td align="center"><h3>Update Profile:</h3></td>
				<tr>
				<td>
					<table border="1" width=100% height=400>
					<tr>
					<td>
					<table>
					<tr>
					<td>Id</td>
					<td>: </td>
					<td>
					<?php
						$conn = getConnection();
						$sql = "select * from users where id = '{$_SESSION['id']}'";
						$result = mysqli_query($conn, $sql);
						$row = mysqli_fetch_assoc($result);
						echo $row['id'];
					?>
						
					</td>
					</tr>

					<tr>
					<td>Name</td>
					<td>: </td>
					<td>
					<?php
						$conn = getConnection();
						$sql = "select * from users where id = '{$_SESSION['id']}'";
						$result = mysqli_query($conn, $sql);
						$row = mysqli_fetch_assoc($result);
						echo $row['name'];
					?>
						
					</td>
					</tr>
					<tr>
					<td>Password</td>
					<td>: </td>
				<td>
					<?php
					$conn = getConnection();
					$sql = "select * from users where id = '{$_SESSION['id']}'";
					$result = mysqli_query($conn, $sql);
					$row = mysqli_fetch_assoc($result);
					echo $row['password'];
					?>

				</td>					
					</tr>
					<tr>
					<td>Email</td>
					<td>: </td>
					<td>
						<?php
					$conn = getConnection();
					$sql = "select * from users where id = '{$_SESSION['id']}'";
					$result = mysqli_query($conn, $sql);
					$row = mysqli_fetch_assoc($result);
					echo $row['email'];
					?>
						
					</td>
					</tr>

					<tr>
					<td>Gender</td>
					<td>: </td>
					<td>
						<?php
					$conn = getConnection();
					$sql = "select * from users where id = '{$_SESSION['id']}'";
					$result = mysqli_query($conn, $sql);
					$row = mysqli_fetch_assoc($result);
					echo $row['gender'];
					?>
						
					</td>
					</tr>
					
					</table>
					</td>
					</tr>
					</table>
				</td>
				<td>
					<form method="post" action="../check/editprofile.php">

					<table border="1" width=100% height=400>
					<tr>
					<td><div align="center">
					<h3>
					<table>
					<tr>
					<td>Name</td>
					<td>: </td>
					<td><input type="text" name="name" id="name" /></td>
					</tr>
					<tr>
					<td>Password</td>
					<td>: </td>
					<td><input type="password" name="password" id="password" /></td>					
					</tr>
					<tr>
					<td>Email</td>
					<td>: </td>
					<td><input type="email" name="email" id="email" /></td>					
					</tr>
					
					<tr>
					<td colspan="3" align="center">
					<input type="submit" name="update" onclick="f1()" value="update">
					</td>
					</tr>
					</table></h3>
					</div></td>
					
					</tr>
					</table>
					</form>
				</td>
				</tr>
				
			</table>
		</fieldset>
	
			</td>
			</tr>
			</table>





</table>
	</form>

<br><br><br>

<a href="../check/logout.php"><button>Logout</button></a>

<script>

		var f1 = function(){
		
			var name= document.getElementById('name').value;
			var password = document.getElementById('password').value;
			var email = document.getElementById('email').value;

			if (name == "") {
   					alert("User Name must be filled");
    				return false;
				}
			if (password == "") {
   					alert("Password must be filled");
    				return false;
				}
			if (email == "") {
   				alert("Email must be filled");
    			return false;
			}
		}

	</script>

</body>
</html>
