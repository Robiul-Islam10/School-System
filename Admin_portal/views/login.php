<!DOCTYPE html>
<html>
<head>
	<title>Login </title>
	<table width=100%>
	<tr>
	<td align="center"> <img src="scl.png" width="200" height="200" > </td>
	</tr>
	</table>
</head>
<body>
	
	<form method="post" action="../php/logcheck.php" onsubmit="return onsubmit">
		<fieldset> 
					
			<legend align="center"><h1>Login</h1></legend>
			<table width=25% align="center">
				
				<tr>
					<td width=20% align="left"><h4>ID </h4></td>
					<td width=7%><h4>:</h4></td>
					<td><input type="text" name="uid" id="un"></td>
					<td></td>
				</tr>
				<tr>
					<td width=20% align="left"><h4>Password </h4></td>
					<td width=7%><h4>:</h4></td>
					<td><input type="password" name="pass" id="pa"></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td>
					</td>
					<td></td>
					<td width=30% align="left"><input type="submit" name="submit" onclick="styleChange()" value="Login"></td>
						
				</tr>
			</table>
	</fieldset>
	</form>
	
<script>
	
	var styleChange = function()
	{
		var unam= document.getElementById('un').value;
		var pas=document.getElementById('pa').value;
		if(unam=="")
		{
			onsubmit=false;
			alert("Please Enter User ID");
			//location.href = "http://localhost/examfinal/reg.php";
			return false;

		}
		else if(pas=="")
		{
			onsubmit=false;
			alert("Please Enter Password");
			//location.href = "http://localhost/examfinal/reg.php";
			return false;
		}
		else
		{
			onsubmit=true;
		}
	}
	
</script>
	
</body>
</html>	