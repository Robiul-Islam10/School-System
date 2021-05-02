<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head><center>
<body>

		<img src="img.JPG" width="10%">

	<fieldset>
		<legend><center><h2>Registration</h2></center></legend>
	<form method="post" action="../check/regcheck.php">
		
			<table>
				<tr>
					<td>Username<br><br> </td>
					<td>:<br><br></td>
					<td><input type="text" name="uname" id="uname"><br><br></td>
				</tr>
				<tr>
					<td>Email <br><br></td>
					<td>:<br><br></td>
					<td><input type="email" name="email" id="email"><br><br></td>
				</tr>

				<tr>
					<td>Gender<br><br></td>
					<td>:<br><br></td>
					<td>
					
 							<input type="radio" name="gender" value="male">Male
  							<input type="radio" name="gender" value="female">Female
 							<input type="radio" name="gender" value="other">Other
 							<br><br>
 							</td>
				</tr>



				<tr>
					<td>Password <br><br></td>
					<td>:<br><br></td>
					<td><input type="password" name="pass" id="pass"><br><br></td>
				</tr>
				
				<tr>
					<td>Re-Password<br><br> </td>
					<td>:<br><br></td>
					<td><input type="password" name="repass" id="repass"><br><br></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><input type="submit" name="submit" onclick="f1()" value="Submit"></td>
				</tr>
			</table><br>
			
	</form>
	Already have an account <a href="login.php"><button>Click here!</button></a>
	</fieldset>

	<br>

	<script>

		var f1 = function(){
		
			var uname = document.getElementById('uname').value;
			var email= document.getElementById('email').value;
			var pass = document.getElementById('pass').value;
			var repass = document.getElementById('repass').value;

  			if (uname == "") {
   					alert("User Name must be filled");
    				return false;
				}
			if (email == "") {
   					alert("Email must be filled");
    				return false;
				}
			if (pass == "") {
   					alert("Password must be filled");
    				return false;
				}
			if (repass == "") {
   					alert("Re-Password must be filled");
    				return false;
				}
			if (pass!=repass) {
				alert("password and repassword error!")
			}	
		}

	</script>
	

</body>
</center>
</html>