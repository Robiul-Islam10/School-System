<?php
	include('../database/db.php');

	sleep(1);
	//echo "ID: ".$_GET['uname']."<br> NAME: ".$_GET['password']."<br>";

		$sid = trim($_GET['sid']);
		//$pass = trim($_GET['password']);

		$sql = "select * from attendance where sid = '{$sid}'";
		$conn = getConnection();
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		$c1 = $row['jan'];
		$c2 = $row['feb'];
		$c3 = $row['mar'];
		$c4 = $row['apr'];
		$c5 = $row['may'];
		$c6 = $row['jun'];
		$c7 = $row['jul'];
		$c8 = $row['aug'];
		$c9 = $row['sept'];
		$c10 = $row['oct'];
		$c11 = $row['nov'];
		//echo $balance."\n";
		//echo $date;

?>


<!DOCTYPE html>
<html>

<body>
		<form>
			<br>
			<br>
			<h3><br>Attendance History : <br><br></h3>
			<li> January : <?php echo $c1; ?></li><br>
			<li> February : <?php echo $c2; ?></li><br>
			<li> March : <?php echo $c3; ?></li><br>
			<li> April : <?php echo $c4; ?></li><br>
			<li> May : <?php echo $c5; ?></li><br>
			<li> June : <?php echo $c6; ?></li><br>
			<li> July : <?php echo $c7; ?></li><br>
			<li> August : <?php echo $c8; ?></li><br>
			<li> September : <?php echo $c9; ?></li><br>
			<li> October : <?php echo $c10; ?></li><br>
			<li> November : <?php echo $c11; ?></li><br>
		</form>

<br><br><br>

</body>
</html>



