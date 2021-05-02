<?php
	include_once('../check/header.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
</head>

<body>
<center>
	<img src="img.JPG" width="10%">
</center>


<table border="1" width="100%">
				<tr>
					<td colspan="3"><br><h2><center>Contact</center></h2><br></td>
					
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


				<!-- <tr>
					<td><h2>Contact Page : </h2></td>
				</tr> -->

				<td>
				<div style="width:100%; max-height:300px; overflow:auto">
				<table  width="100%">
					<h3><u>Teacher Information</u></h3>
				<tr>
					<td><u><b>Name</b></u></td>
					<td><u><b>Contact No</b></u></td>
					<td><u><b>Gender</b></u></td>
					<td><u><b>Education</b></u></td>
					<td><u><b>Subject</b></u></td>
				</tr>
				

				<?php
				$conn = getConnection();
				$sql = "select * from teacher";
				$result = mysqli_query($conn, $sql);
				while($row = mysqli_fetch_assoc($result)){

					echo "	<tr>
								<td>".$row['tname']."</td>
								<td>".$row['tcontact']."</td>
								<td>".$row['tgender']."</td>
								<td>".$row['education']."</td>
								<td>".$row['subject']."</td>	
							</tr>";
				}
			?>
			
			</table>
			</div>
			</td>

						
					<td width="30%">
						<b>School Address : </b>
						<?php 

							$conn = getConnection();
							$sql = "select * from contactus";
							$result = mysqli_query($conn, $sql);
							$row = mysqli_fetch_assoc($result);
							echo $row['contact'];

						 ?>
					</td>
				
</table>

<br><br><br>

<a href="../check/logout.php"><button>Logout</button></a>

</body>
</html>
