<?php 
	$area=$_POST['select_area'];
	include("../connMysql.php"); 
	$sql= "SELECT UUID FROM `ble` WHERE `location` = '".$area."'";
	
	$result = $conn->query($sql); 
	if ($result->num_rows > 0) { 
		// 輸出每行數據 
		//echo '<select class="form-control">';
		//echo '<option selected>移除圍籬</option>';
		while($row = $result->fetch_assoc()) { 
			echo '<option value="'.$row["UUID"].'">'.$row["UUID"].'</option>"';
		}
		//echo '</select>';
	}else{ 
	echo "0 個結果"; 
	} 
	$conn->close();		
?>