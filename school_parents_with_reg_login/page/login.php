<!DOCTYPE html>
<html>
<head>
	<title>Login </title>
</head><center>
<body>
	<img src="img.JPG" width="10%"><br><br>

	<fieldset>
		<legend><center><h2>Login</h2></center></legend>

	<form method="post" action="../check/logcheck.php">
			<table>
				<tr>
					<td>Username <br><br></td>
					<td>:<br><br></td>
					<td><input type="text" name="uname" id="uname"><br><br></td>
				</tr>
				<tr>
					<td>Password </td>
					<td>:</td>
					<td><input type="password" name="pass" id="pass"></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><br><input type="submit" name="submit" onclick="f1()" value="Login"></td>
				</tr>
			</table>
	</form>
	<br>
	Create an Account  <a href="reg.php"><button><b>Click here!</b></button></a>

	</fieldset>

	<script>

		var f1 = function(){
		
			var uname= document.getElementById('uname').value;
			var pass = document.getElementById('pass').value;

			if (uname == "") {
   					alert("User Name must be filled");
    				return false;
				}
			if (pass == "") {
   					alert("Password must be filled");
    				return false;
				}
		}

	</script>

	
</body>
</center>
</html>