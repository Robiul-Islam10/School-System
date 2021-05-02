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
	//echo $money;
	$sql1="";
	$i=0;
	$n=0;
	
	if($money==2)
	{
		$data ="";
		//$data1 ="";
		//$data2 ="";
		//$data3 ="";
		//$data4 ="";
		$sql1 = "select sid as 'ID', sname as 'Name', sgender as 'Gender', sclass as 'Grade', sphoto as 'Photo' from student where sid={$key}";
		$result = mysqli_query($conn, $sql1);
		
		while($row = mysqli_fetch_assoc($result)){
	
		
		
		//$data .= "<div>".$row['bookname']."</div>";
		$data .= "<div>".$row['ID']."<br>".$row['Name']."<br>".$row['Gender']."<br>".$row['Grade']."<br>".$row['Photo']."<br></div>";
		//$data1 .= "<div>".$row['Name']."</div>";
		//$data2 .= "<div>".$row['Gender']."</div>";
		//$data3 .= "<div>".$row['Grade']."</div>";
		//$data4 .= "<div>".$row['Photo']."</div>";
		/*$data .= "<div>".?><tr>
						<td align="center"><div id="d1"><input type="checkbox" name="{$i}" value="{$row['sid']}"><?php echo $row['sid'] ;?><br></div></td>
								
					</tr><?php."</div>";*/
		//$i++;
		//echo $row['sid'];
		echo $data;
		//echo $data1;
		//echo $data2;
		//echo $data3;
		//echo $data4;
		}
	}
	else if($money==3)
	{
		$data ="";
		//$data1 ="";
		//$data2 ="";
		//$data3 ="";
		//$data4 ="";
		$sql1 = "select * from teacher where tid={$key}";
		$result = mysqli_query($conn, $sql1);
		
		while($row = mysqli_fetch_assoc($result)){
	
		
		
		//$data .= "<div>".$row['bookname']."</div>";
		$data .= "<div>".$row['tid']."<br>".$row['tname']."<br>".$row['tcontact']."<br>".$row['tgender']."<br>".$row['education']."<br>".$row['subject']."<br>".$row['tphoto']."<br></div>";
		//$data1 .= "<div>".$row['Name']."</div>";
		//$data2 .= "<div>".$row['Gender']."</div>";
		//$data3 .= "<div>".$row['Grade']."</div>";
		//$data4 .= "<div>".$row['Photo']."</div>";
		/*$data .= "<div>".?><tr>
						<td align="center"><div id="d1"><input type="checkbox" name="{$i}" value="{$row['sid']}"><?php echo $row['sid'] ;?><br></div></td>
								
					</tr><?php."</div>";*/
		//$i++;
		//echo $row['sid'];
		echo $data;
		//echo $data1;
		//echo $data2;
		//echo $data3;
		//echo $data4;
		}
	}
	else if($money==4)
	{
		$data ="";
		//$data1 ="";
		//$data2 ="";
		//$data3 ="";
		//$data4 ="";
		$sql1 = "select * from parents where pid={$key}";
		$result = mysqli_query($conn, $sql1);
		
		while($row = mysqli_fetch_assoc($result)){
	
		
		
		//$data .= "<div>".$row['bookname']."</div>";
		$data .= "<div>".$row['pid']."<br>".$row['pname']."<br>".$row['child']."<br>".$row['nid']."<br>".$row['contact']."<br>".$row['pphoto']."<br></div>";
		//$data1 .= "<div>".$row['Name']."</div>";
		//$data2 .= "<div>".$row['Gender']."</div>";
		//$data3 .= "<div>".$row['Grade']."</div>";
		//$data4 .= "<div>".$row['Photo']."</div>";
		/*$data .= "<div>".?><tr>
						<td align="center"><div id="d1"><input type="checkbox" name="{$i}" value="{$row['sid']}"><?php echo $row['sid'] ;?><br></div></td>
								
					</tr><?php."</div>";*/
		//$i++;
		//echo $row['sid'];
		echo $data;
		//echo $data1;
		//echo $data2;
		//echo $data3;
		//echo $data4;
		}
	}
	
	
	
	
	
	} 
	
    else
{
	header("location: login.php");
	
}

?>

