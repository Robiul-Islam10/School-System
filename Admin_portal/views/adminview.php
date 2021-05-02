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
			<td align="center" colspan="3"><h1>User Information</h1></td>
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
					<td align="center" colspan="2"><h3>ID : <input type="text" id="i" name="id"/> <input type="button" name="search" onclick="search()" value="Search"></td>
					 </h3>
				</tr>
				
				<tr>
				<td colspan="2" width=100% align="center"><h2>Details:</h2></td>
				</tr>
				<tr>
				<td colspan="2" align="center">
					<table id="details" border="1" width=100% height=400>
					
					</table>
				</td>
				</tr>
				<tr>
				<form method="post" action="../php/upcheck.php" onsubmit="return check1()" enctype="multipart/form-data">
				<td colspan="2" align="center">
				<h3>ID : <input type="text" id="it" name="id1"/> <input type="submit" name="submit" onclick="check()" value="Update"></h3>
				</td>
				</tr>
				</form>
				<tr>
				<td colspan="3">
				<table width=100%>
				<tr>
				<td>
					<table border="1" width=100% height=400>
					<tr>
					<td align="center">Teacher ID:</td>
					
					</tr>
					<?php
					//$key="Bangla";
					$conn = getConnection();
					$sql = "select tid from teacher";
					$result = mysqli_query($conn, $sql);
					$i=0;
					$n=0;
					
					while($row = mysqli_fetch_assoc($result)){
					?>
					
					<tr>
						<td align="center"><div><?php echo $row['tid'] ; ?></div></td>
						
					</tr>
					
					<?php 
					$i++;
					}?>
					</table>
				</td>
				<td></td>
				<td>
					<table border="1" width=100% height=400>
					<tr>
					<td align="center">Student ID:</td>
					
					</tr>
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
						<td align="center"><div><?php echo $row['sid'] ; ?></div></td>
						
					</tr>
					
					<?php 
					$i++;
					}?>
					</table>
				</td>
				<td></td>
				<td>
					<table border="1" width=100% height=400>
					<tr>
					<td align="center">Parents ID:</td>
					<td align="center">Parents of:</td>
					</tr>
					<?php
					//$key="Bangla";
					$conn = getConnection();
					$sql = "select pid, child from parents";
					$result = mysqli_query($conn, $sql);
					$i=0;
					$n=0;
					
					while($row = mysqli_fetch_assoc($result)){
					?>
					
					<tr>
						<td align="center"><div><?php echo $row['pid'] ; ?></div></td>
						<td align="center"><div><?php echo $row['child'] ; ?></div></td>
					</tr>
					
					<?php 
					$i++;
					}?>
					</table>
				</td>
				</tr>
				</table>
				</td>
				</tr>
			</table>
				
			</td>
			
			</table>
			
			<script type="text/javascript">
				var flag=1;
				var c;
				var check = function()
				{
					var unam= document.getElementById('it').value;
				
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
				var search= function()
				{
					$id=document.getElementById("i").value
					//alert($id);
					//var c;
					//document.getElementById("d1").innerHTML="<tr><td>gel</td></tr>";
					//document.getElementById("d1").innerHTML="sdsad";
					
					
					
					
					var xmlHttp = new XMLHttpRequest();

					xmlHttp.open('POST', '../php/inter.php', true);
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
								document.getElementById('details').innerHTML ="Empty";
							}
							else
							{
								c=this.responseText;
								//document.getElementById('details').innerHTML =c;
								if(c==2)
								{
									//document.getElementById('details').innerHTML =c;
									//document.getElementById('details').innerHTML
									var table = document.getElementById("details");
									var row = table.insertRow(0);
									var cell1 = row.insertCell(0);
									var cell2 = row.insertCell(1);
									var cell3 = row.insertCell(2);
									var cell4 = row.insertCell(3);
									var cell5 = row.insertCell(4);
									cell1.innerHTML = "ID";
									cell2.innerHTML = "Name";
									cell3.innerHTML = "Gender";
									cell4.innerHTML = "Class";
									cell5.innerHTML = "Photo";
								}
								else if(c==3)
								{
									//document.getElementById('details').innerHTML =c;
									//document.getElementById('details').innerHTML
									var table = document.getElementById("details");
									var row = table.insertRow(0);
									var cell1 = row.insertCell(0);
									var cell2 = row.insertCell(1);
									var cell3 = row.insertCell(2);
									var cell4 = row.insertCell(3);
									var cell5 = row.insertCell(4);
									var cell6 = row.insertCell(5);
									var cell7 = row.insertCell(6);
									cell1.innerHTML = "ID";
									cell2.innerHTML = "Name";
									cell3.innerHTML = "Contact";
									cell4.innerHTML = "Gender";
									cell5.innerHTML = "Education";
									cell6.innerHTML = "Subject";
									cell7.innerHTML = "Photo";
								}
								else if(c==4)
								{
									//document.getElementById('details').innerHTML =c;
									//document.getElementById('details').innerHTML
									var table = document.getElementById("details");
									var row = table.insertRow(0);
									var cell1 = row.insertCell(0);
									var cell2 = row.insertCell(1);
									var cell3 = row.insertCell(2);
									var cell4 = row.insertCell(3);
									var cell5 = row.insertCell(4);
									var cell6 = row.insertCell(5);
									cell1.innerHTML = "ID";
									cell2.innerHTML = "Name";
									cell3.innerHTML = "Child";
									cell4.innerHTML = "NID";
									cell5.innerHTML = "Contact";
									cell6.innerHTML = "Photo";
								}
								//alert (this.responseText);
							}
							
							/*var ss=this.responseText;
							while(ss)
							{
							 alert(ss);
							}*/
						}
					}
					
					var xmlHttp1 = new XMLHttpRequest();

					xmlHttp1.open('POST', '../php/inter1.php', true);
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
								document.getElementById('details').innerHTML ="Empty";
							}
							else
							{
								//c=this.responseText;
								//document.getElementById('details').innerHTML =c;
								if(c==2)
								{
									//document.getElementById('details').innerHTML =c;
									//document.getElementById('details').innerHTML
									var response= this.responseText.split("<br>");
									var table = document.getElementById("details");
									var row = table.insertRow(1);
									var cell1 = row.insertCell(0);
									var cell2 = row.insertCell(1);
									var cell3 = row.insertCell(2);
									var cell4 = row.insertCell(3);
									//var cell5 = row.insertCell(4);
									cell1.innerHTML = response[0];
									cell2.innerHTML = response[1];
									cell3.innerHTML = response[2];
									cell4.innerHTML = response[3];
									//cell5.innerHTML = response[4];
									
									var firstRow=document.getElementById("details").rows[1];
									var x=firstRow.insertCell(-1);
									//x.innerHTML="New cell";

									var img = document.createElement('img');
									img.src = response[4];
									img.width=80;
									img.height=100;
									//alert(response[4]);
									//const elem = document.createElement('canvas');
									//elem.width = 20;
									//elem.height = 30;
									//const ctx = elem.getContext('2d')
									
									x.appendChild(img);
									//x.appendChild(ctx.drawImage(img, 0, 0, 20, 30););
								}
								else if(c==3)
								{
									//document.getElementById('details').innerHTML =c;
									//document.getElementById('details').innerHTML
									var response= this.responseText.split("<br>");
									var table = document.getElementById("details");
									var row = table.insertRow(1);
									var cell1 = row.insertCell(0);
									var cell2 = row.insertCell(1);
									var cell3 = row.insertCell(2);
									var cell4 = row.insertCell(3);
									var cell5 = row.insertCell(4);
									var cell6 = row.insertCell(5);
									//var cell7 = row.insertCell(6);
									cell1.innerHTML = response[0];
									cell2.innerHTML = response[1];
									cell3.innerHTML = response[2];
									cell4.innerHTML = response[3];
									cell5.innerHTML = response[4];
									cell6.innerHTML = response[5];
									
									var firstRow=document.getElementById("details").rows[1];
									var x=firstRow.insertCell(-1);
									//x.innerHTML="New cell";

									var img = document.createElement('img');
									img.src = response[6];
									//alert(response[6]);
									img.width=80;
									img.height=100;
									//alert(response[4]);
									//const elem = document.createElement('canvas');
									//elem.width = 20;
									//elem.height = 30;
									//const ctx = elem.getContext('2d')
									
									x.appendChild(img);
									//x.appendChild(ctx.drawImage(img, 0, 0, 20, 30););
								}
								else if(c==4)
								{
									//document.getElementById('details').innerHTML =c;
									//document.getElementById('details').innerHTML
									var response= this.responseText.split("<br>");
									var table = document.getElementById("details");
									var row = table.insertRow(1);
									var cell1 = row.insertCell(0);
									var cell2 = row.insertCell(1);
									var cell3 = row.insertCell(2);
									var cell4 = row.insertCell(3);
									var cell5 = row.insertCell(4);
									cell1.innerHTML = response[0];
									cell2.innerHTML = response[1];
									cell3.innerHTML = response[2];
									cell4.innerHTML = response[3];
									cell5.innerHTML = response[4];
									
									var firstRow=document.getElementById("details").rows[1];
									var x=firstRow.insertCell(-1);
									//x.innerHTML="New cell";

									var img = document.createElement('img');
									img.src = response[5];
									
									img.width=80;
									img.height=100;
									//alert(response[4]);
									//const elem = document.createElement('canvas');
									//elem.width = 20;
									//elem.height = 30;
									//const ctx = elem.getContext('2d')
									
									x.appendChild(img);
									//x.appendChild(ctx.drawImage(img, 0, 0, 20, 30););
								}
								//alert (this.responseText);
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

<?php }else{
	header("location: login.php");
} ?>

