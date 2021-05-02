<?php
	include('../database/db.php');

	sleep(1);
	//echo "ID: ".$_GET['uname']."<br> NAME: ".$_GET['password']."<br>";

		$sid = trim($_GET['sid']);
		//$pass = trim($_GET['password']);

		$sql = "select * from course where sid = '{$sid}'";
		$conn = getConnection();
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		$c1 = $row['course1'];
		$c2 = $row['course2'];
		$c3 = $row['course3'];
		$c4 = $row['course4'];
		$c5 = $row['course5'];
		//echo $balance."\n";
		//echo $date;

?>


<!DOCTYPE html>
<html>

<body>
		<form>
			<br>
			<br>
			<h3><br>Assigned courses : <br><br></h3>
			<li>  <?php echo $c1; ?></li><br>
			<li>  <?php echo $c2; ?></li><br>
			<li>  <?php echo $c3; ?></li><br>
			<li>  <?php echo $c4; ?></li><br>
			<li>  <?php echo $c5; ?></li><br>
		</form>

<br><br><br>

</body>
</html>



