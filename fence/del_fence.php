<?php 
$fence=$_POST['del_fence_list'];
$area=$_POST['select_area'];

include("../connMysql.php"); 
//DELETE FROM `ble` WHERE `ble`.`UUID` = '69696969'
$sql= "DELETE FROM `main_fence` WHERE `main_fence`.`fence_id` = '".$fence."'";
$result = $conn->query($sql); 
//$conn->close();

//echo $area;
$sql= "SELECT fence_id FROM `main_fence` WHERE `location` = '".$area."'";
$result = $conn->query($sql); 
if ($result->num_rows > 0) { 
	// 輸出每行數據 
	//echo '<select class="form-control">';
	//echo '<option selected>移除圍籬</option>';
	while($row = $result->fetch_assoc()) { 
		echo '<option value="'.$row["fence_id"].'">'.$row["fence_id"].'</option>"';
	}
	//echo '</select>';
}else{ 
echo "0 個結果"; 
} 
$conn->close();		
?>