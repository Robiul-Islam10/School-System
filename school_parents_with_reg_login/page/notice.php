<?php
	include_once('../check/header.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Notice</title>

</head>

<body>
<center>
	<img src="img.JPG" width="10%">
</center>


<table border="1" width="100%">
				<tr>
					<td colspan="3"><br><h2><center>Notice</center></h2><br></td>
					
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
				<div style="width:100%; max-height:300px; overflow:auto">
				<table  width="100%">
					
				<tr>
					<td><u><b>Notice No</b></u></td>
					<!-- <td><u><b>Type</b></u></td> -->
					<td><u><b>Title</b></u></td>
					<td><u><b>Content</b></u></td>
					<!-- <td><u><b>Status</b></u></td> -->
					<td><u><b>Date</b></u></td>
				</tr>
				

				<?php
				$conn = getConnection();
				$sql = "select * from notice";
				$result = mysqli_query($conn, $sql);
				while($row = mysqli_fetch_assoc($result)){

					echo "	<tr>
								<td>".$row['noid']."</td>
								<td>".$row['title']."</td>
								<td>".$row['content']."</td>
								<td>".$row['date/time']."</td>
							</tr>";
				}
			?>
			
			</table>
			</div>
			</td>


				<!-- <tr>
					<td >
            		<div style="width:100%; max-height:300px; overflow:auto">
            			<h2>Notice board</h2><br>
						<li><a href="/notice/schedule.pdf" download>mid term schedule</a></li><br>
						<li><a href="/notice/schedule.pdf" download>final term schedule</a></li><br>
						<li><a href="/notice/schedule.pdf" download>notice for scholarship</a></li><br>
						<li><a href="/notice/schedule.pdf" download>class cancel</a></li><br>
						<li><a href="/notice/schedule.pdf" download>break for eid-ul-azha</a></li><br>
						<li><a href="/notice/schedule.pdf" download>break for eid-ul-fitr</a></li><br>
						<li><a href="/notice/schedule.pdf" download>mid term schedule</a></li><br>
						<li><a href="/notice/schedule.pdf" download>final term schedule</a></li><br>
						<li><a href="/notice/schedule.pdf" download>notice for scholarship</a></li><br>
			        </div>
			        </td>
					<td>
						
					</td>
				</tr> -->
</table>

<br><br><br>

<a href="../check/logout.php"><button>Logout</button></a>

</body>
</html>
