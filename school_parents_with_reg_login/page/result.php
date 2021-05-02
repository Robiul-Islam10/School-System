<?php
	include_once('../check/header.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Result</title>
</head>

<body>
<center>
	<img src="img.JPG" width="10%">
</center>


<table border="1" width="100%">
				<tr>
					<td colspan="3"><br><h2><center>Result</center></h2><br></td>
					
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


				<tr>
					<td width="40%">
					<div id="d1" style="width:100%; max-height:300px; overflow:auto">
	
					</div>
				</td>
					<td>
					<form>
						Insert your child's Id : <input type="text" name="sid" id="sid"> <br>
						<br><input type="button" name="" value="load" onclick="loadData()"/>
					</form>
					</td>
				</tr>
</table>

<br><br><br>

	<script type="text/javascript" src="../page/res_ajax.js"></script>

<a href="../check/logout.php"><button>Logout</button></a>

</body>
</html>
