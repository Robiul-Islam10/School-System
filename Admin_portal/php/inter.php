<?php
	
	session_start();
	include('../database/db.php');
	
	if(isset($_SESSION['name'])){
		  

	
	$key=$_POST['key'];
	//echo $key ;

	$conn = getConnection();
	$sql = "select type from users where id={$key}";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	$money=$row['type'];
	echo $money;
	/*$sql1="";
	$i=0;
	$n=0;
	
	if($money==2)
	{
		$data ="";
		$data1 ="";
		$sql1 = "select sid as 'ID', sname as 'Name', sgender as 'Gender', sclass as 'Grade' from student where sid={$key}";
		$result = mysqli_query($conn, $sql1);
		
		while($row = mysqli_fetch_assoc($result)){
	
		
		
		//$data .= "<div>".$row['bookname']."</div>";
		$data .= "<div>".$row['ID']." ".$row['Name']." ".$row['Gender']." ".$row['Grade']."</div>";
		$data1 .= "<div>".$row['ID']."</div>";
		/*$data .= "<div>".?><tr>
						<td align="center"><div id="d1"><input type="checkbox" name="{$i}" value="{$row['sid']}"><?php echo $row['sid'] ;?><br></div></td>
								
					</tr><?php."</div>";*/
		//$i++;
		//echo $row['sid'];
		/*echo $data;
		echo $data1;
		}
	}
	else if($money==3)
	{
		
	}
	else if($money==4)
	{
		
	}
	
	
	
	
	
	} 
	
    else
{
	header("location: login.php");
	*/
}

?>

