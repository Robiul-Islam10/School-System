<?php
	session_start();
	include('../database/db.php');
	if(isset($_SESSION['name'])){
	//echo $_SESSION['idf'];
	//$_SESSION['idf'] = 2;
	//echo $_SESSION['idf'];	
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
			<td align="center" colspan="3"><h1>Handle Feedbacks</h1></td>
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
				
				<tr>
				<td width=50% align="center"><h2>List:</h2></td>
				<td align="center"><h2>Review:</h2></td>
				</tr>
				<tr>
				<td>
					<table border="1" width=100% height=400>
					<tr>
					<td align='center'>
					<?php
				//$key="Bangla";
				$conn = getConnection();
				$sql = "select pid from message where isRespond=0";
				$result = mysqli_query($conn, $sql);
				$i=0;
				$n=0;
				$content = "";
				while($row = mysqli_fetch_assoc($result)){
				
					
					
						//<td align="center"><div id="d1"><?php echo $row['pid'] ;<br></div></td>
						$content .= "<div align='center' style='border: 1px solid #000; background-color: #eee;width:143px;cursor:pointer' onclick='test(this.innerHTML)'>".$row['pid']."</div>";
					
				
				}
				echo $content;
				?>
					</td>
					</tr>
					</table>
				</td>
				<td>
					<table border="1" width=100% height=400>
					<tr>
					<td><div align="center" id="text"><textarea style="resize: none;" rows="15" cols="70" readonly></textarea></div></td>
					</tr>
					</table>
				</td>
				</tr>
				<form method="post" action="../php/feedbackcheck.php" onsubmit="return check1()" enctype="multipart/form-data">
				<tr>
					
					
					<h3><td align="center" colspan="2"><input type="text" name="idont" id="101" readonly> <input type="submit" name="submit" onclick="check()" value="Mark As Read"></h3>
					</td>
				</tr>
				</form>
			</table>
	
			</td>
			</tr>
			</table>
			
			<script>
				//$help=0;
				var flag=1;
				function test(data)
				{
					//document.getElementById('text').value = data;
					//document.getElementById('result').innerHTML ="";
					//alert(data);		
					//document.getElementById('result').style.display ="none";	
					$id=data;
					//$help=data;
					document.getElementById('101').value = $id;
					//alert($help);
					//document.getElementById("d1").innerHTML="<tr><td>gel</td></tr>";
					//document.getElementById("d1").innerHTML="sdsad";
					var xmlHttp = new XMLHttpRequest();

					xmlHttp.open('POST', '../php/ajaxfeed.php', true);
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
					
					$.ajax({
					//alert("sss");
					type: "POST",
					url: "pass_value.php",
					data: $help,
					dataType: 'json',
					cache: false,
					success: function(response) {

                    alert(response.message);

					}
					});

				}	
				var check = function()
				{
					
					var help=document.getElementById('101').value;
					if(help == "")
					{
						//onsubmit=false;
						alert("Please Select A Content");
						//alert (flag);
						//location.href = "http://localhost/examfinal/reg.php";
			
						flag=0;
						//alert (flag);
						//return false;
						check1();
						//alert($help);

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
					//alert ($help);
				}
				
			</script>
			
		
			
		</body>
		</html>		

<?php }else{
	header("location: login.php");
} ?>

