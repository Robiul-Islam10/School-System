<?php
	include('../database/db.php');

	sleep(1);
	//echo "ID: ".$_GET['uname']."<br> NAME: ".$_GET['password']."<br>";

		$sid = trim($_GET['sid']);
		//$pass = trim($_GET['password']);

		$sql = "select * from fees where id = '{$sid}'";
		$conn = getConnection();
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		$balance = $row['balance'];
		$date = $row['lastDate'];

		//echo $balance."\n";
		//echo $date;

?>


<!DOCTYPE html>
<html>

<body>
		<form>
			<br>
			<br>
			<h3><br>Payment information : <br><br></h3>
			<li>Due balance : <?php echo $balance; ?></li><br>
			<li>Upcoming payment last date : <?php echo $date; ?></li>
		</form>

<br><br><br>

</body>
</html>



