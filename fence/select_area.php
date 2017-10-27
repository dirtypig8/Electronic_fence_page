<?php
	$area=$_POST['select_area'];
	//echo $area;
	include("../connMysql.php"); 
	$sql= "SELECT fence_id FROM `main_fence` WHERE `location` = '".$area."'";
	$result = $conn->query($sql); 
	if ($result->num_rows > 0) { 
		// 輸出每行數據 
		while($row = $result->fetch_assoc()) { 
			echo '<li class="list-group-item">'.$row["fence_id"].'</li> '; 
			//echo $row["fence_id"];
		} 
	}else{ 
		echo "0 個結果"; 
	} 
	$conn->close();		
?>