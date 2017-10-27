<?php 
$fence=$_POST['del_fence_list'];
$area=$_POST['select_area'];

include("../connMysql.php"); 
//DELETE FROM `ble` WHERE `ble`.`UUID` = '69696969'
$sql= "DELETE FROM `ble` WHERE `UUID` ='".$fence."' AND `location` = '".$area."'";
//DELETE FROM `ble` WHERE `UUID` = "3345678" AND `location` = "大門口"
 
$result = $conn->query($sql); 
//$conn->close();

//echo $area;
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