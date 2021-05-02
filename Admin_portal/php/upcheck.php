<?php
	
	session_start();
	include('../database/db.php');
	
	if(isset($_SESSION['name'])){
		  

	
	$key=$_REQUEST['id1'];
	//echo $key ;
	$_SESSION['quit']=$key;
	$conn = getConnection();
	$sql = "select type from users where id={$key}";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	$money=$row['type'];
	//echo $money;
	//$sql1="";
	//$i=0;
	//$n=0;
	
	if($money==2)
	{
		header("location: ../views/updatestudent.php");
	}
	else if($money==3)
	{
		header("location: ../views/updateteacher.php");
	}
	else if($money==4)
	{
		header("location: ../views/updateparent.php");
	}
	
	
	
	
	
	} 
	
    else
{
	header("location: ../views/login.php");
	
}

?>

