<?php
	
		include('../database/db.php');
	
?>
		<!DOCTYPE html>
		<html>
		
		<head>
			<title>Admin Home Page</title>
			<table width=100%>
			<tr>
			<td width=30% align="center">></td>
			<td align="center"><img src="scl.png" width="220" height="220"></td>
			<td width=30% align="center"><a href="login.php" align="center"><h2>Login</h2></a></td>
			</tr>
			
			</table>
			
		</head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<body>
            <table border="1" width=100%>
			<tr>
			<td align="center" colspan="3"><h1>International School</h1></td>
			</tr>
			
			</table>
			<table border="1" width=100%>
			<tr>
			<td colspan="2">
			<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<body>



<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="../upload/1.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="../upload/2.JPG" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="../upload/3.JPG" style="width:100%">
  <div class="text"></div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
		</td>
		<?php
		
				$conn = getConnection();
				$sql = "SELECT us FROM `about` where aid=0";
				$result = mysqli_query($conn, $sql);
				$row = mysqli_fetch_assoc($result);
				$latest=$row['us'];
				
				//echo $latest;
				//$count = mysqli_num_rows($result);
				mysqli_close($conn); 
		?>
		</tr>
		<tr>
		<td width=50% align="center"><h2>About Us</h2></td>
		<td align="center"><h3><?php echo $latest; ?></h3></td>
		</tr>
		<?php
		
				$conn = getConnection();
				$sql = "SELECT contact FROM `contactus` where conid=0";
				$result = mysqli_query($conn, $sql);
				$row = mysqli_fetch_assoc($result);
				$latest=$row['contact'];
				
				//echo $latest;
				//$count = mysqli_num_rows($result);
				mysqli_close($conn); 
		?>
		</tr>
		<tr>
		<td align="center"><h3><?php echo $latest; ?></h3></td>
		<td width=50% align="center"><h2>Contact Us</h2></td>
		</tr>
		</table>
		<table width=100% border="1">
		<tr>
		<td colspan="2" align="center"><h2>Our Teachers</h2></td>
		</tr>
		<?php
		
				$conn = getConnection();
				$sql = "SELECT * FROM `featured` where serial=1";
				$result = mysqli_query($conn, $sql);
				$row = mysqli_fetch_assoc($result);
				$latest=$row['tid'];
				
				//echo $latest;
				//$count = mysqli_num_rows($result);
				

				$sql2 = "SELECT * FROM `featured` where serial=2";
				$result2 = mysqli_query($conn, $sql2);
				$row2 = mysqli_fetch_assoc($result2);
				$latest2=$row2['tid'];
				
				$sql3 = "SELECT * FROM `teacher` where tid={$latest}";
				$result3 = mysqli_query($conn, $sql3);
				$row3 = mysqli_fetch_assoc($result3);
				//$latest2=$row2['tid'];
				
				$sql4 = "SELECT * FROM `teacher` where tid={$latest2}";
				$result4 = mysqli_query($conn, $sql4);
				$row4 = mysqli_fetch_assoc($result4);
				
				//echo $latest;
				//$count = mysqli_num_rows($result);
				mysqli_close($conn);		
		?>
		<tr>
		<td colspan="2" align="center">
		<table width=70%>
		<tr>
		<td align="center"><img src="<?php echo $row3["tphoto"];?>" width="220" height="220"></td>
		<td align="center"><img src="<?php echo $row4["tphoto"];?>" width="220" height="220"></td>
		</tr>
		<tr>
		<td width=50% align="center"><h4><?php echo $row3['tname']; ?></h4></td>
		<td align="center"><h4><?php echo $row4['tname']; ?></h4></td>
		</tr>
		<tr>
		<td width=50% align="center"><h4><?php echo $row['quote']; ?></h4></td>
		<td align="center"><h4><?php echo $row2['quote']; ?></h4></td>
		</tr>
		</table>
		</td>
		</tr>
		</table>
		<table width=100% border="1">
		<tr>
		<td align="center" width=50%><h2>Notice:</h2></td>
		<td align="center" width=50%><h2>Upcoming Events:</h2></td>
		</tr>
		<tr>
		<td align="center">
		<?php
				//$key="Bangla";
				$conn = getConnection();
				$sql = "select title from notice where type='a'";
				$result = mysqli_query($conn, $sql);
				$i=0;
				$n=0;
				$content = "";
				while($row = mysqli_fetch_assoc($result)){
				
					
					
						//<td align="center"><div id="d1"><?php echo $row['pid'] ;<br></div></td>
						$content .= "<div align='center' style='border: 1px solid #000; background-color: #eee;width:143px;cursor:pointer' onclick='test(this.innerHTML)'>".$row['title']."</div>";
					
				
				}
				echo $content;
		?>
		</td>
		
		<td align="center">
		<?php
				//$key="Bangla";
				$conn = getConnection();
				$sql = "select title from notice where type='e'";
				$result = mysqli_query($conn, $sql);
				$i=0;
				$n=0;
				$content = "";
				while($row = mysqli_fetch_assoc($result)){
				
					
					
						//<td align="center"><div id="d1"><?php echo $row['pid'] ;<br></div></td>
						$content .= "<div align='center' style='border: 1px solid #000; background-color: #eee;width:143px;cursor:pointer' onclick='test(this.innerHTML)'>".$row['title']."</div>";
					
				
				}
				echo $content;
		?>
		</td>
		<tr>
		<td colspan="2" align="center">
		<div id="text"></div>
		</td>
		</tr>
		</tr>
		</table>
		<table border="1" width=100%>
		<tr>
		<td align="center" width=50%><h2>Admission Instructions:</h2></td>
		<td align="center" width=50%><h2>Tution Fees:</h2></td>
		</tr>
		<?php
		
				$conn = getConnection();
				$sql = "SELECT instructions FROM `admission` where adid=0";
				$result = mysqli_query($conn, $sql);
				$row = mysqli_fetch_assoc($result);
				$latest=$row['instructions'];
		?>		
		<tr>
		<tr>
		<td width=50% align="center"><h4><?php echo $latest; ?></h4></td>
		<td align="center"><h4>
		<table border="1" width=100% height=400>
					<tr>
					<td align="center">Grade:</td>
					<td align="center">Fees:</td>
					</tr>
					<?php
					//$key="Bangla";
					$conn = getConnection();
					$sql = "select * from fees";
					$result = mysqli_query($conn, $sql);
					$i=0;
					$n=0;
					
					while($row = mysqli_fetch_assoc($result)){
					?>
					
					<tr>
						<td align="center"><div id="d2"><?php echo $row['grade'] ; ?></div></td>
						<td align="center"><div id="d3"><?php echo $row['amount'] ;?><br></div></td>
					</tr>
					
					<?php 
					$i++;
					}?>
					</table>	
		</h4></td>
		</tr>
		</tr>	
		</table>
		<script>
		function test(data)
				{
					//document.getElementById('text').value = data;
					//document.getElementById('result').innerHTML ="";
					//alert(data);		
					//document.getElementById('result').style.display ="none";	
					$id=data;
					//$help=data;
					//document.getElementById('101').value = $id;
					//alert($help);
					//document.getElementById("d1").innerHTML="<tr><td>gel</td></tr>";
					//document.getElementById("d1").innerHTML="sdsad";
					var xmlHttp = new XMLHttpRequest();

					xmlHttp.open('POST', '../php/ajaxland.php', true);
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
								document.getElementById('text').innerHTML ="Empty";
							}
							else
							{
								document.getElementById('text').innerHTML =this.responseText;
							}
							
							/*var ss=this.responseText;
							while(ss)
							{
							 alert(ss);
							}*/
						}
					}
				}
		</script>
		</body>
		</html>	