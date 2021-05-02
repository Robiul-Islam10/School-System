<?php
	
	
	include('../database/db.php');
	
	
		  

	
	$key=$_POST['key'];
	//echo $key ;

	$conn = getConnection();
	$sql = "select content from notice where title='{$key}'";
	$result = mysqli_query($conn, $sql);
	$i=0;
	$n=0;
	$data ="";
	while($row = mysqli_fetch_assoc($result)){
	
		
		
		//$data .= "<div>".$row['bookname']."</div>";
		$data .= "<div>".$row['content']."</div>";
		/*$data .= "<div>".?><tr>
						<td align="center"><div id="d1"><input type="checkbox" name="{$i}" value="{$row['sid']}"><?php echo $row['sid'] ;?><br></div></td>
								
					</tr><?php."</div>";*/
		//$i++;
		//echo $row['sid'];
	}
	
	
	echo $data;
	
	

?>

