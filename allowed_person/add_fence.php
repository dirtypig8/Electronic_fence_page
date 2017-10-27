<?php
$fence=$_POST['add_fence'];
$location=$_POST['select_area'];
//echo $location.$fence;
include("../connMysql.php"); 
$sql= "INSERT INTO `ble` (`UUID`, `location`) VALUES ('".$fence."', '".$location."')";
$result = $conn->query($sql); 
//$conn->close();


$sql= "SELECT UUID FROM `ble` WHERE `location` = '".$location."'";
	$result = $conn->query($sql); 
	if ($result->num_rows > 0) { 
		// 輸出每行數據 
		while($row = $result->fetch_assoc()) { 
			echo '<li class="list-group-item">'.$row["UUID"].'</li> '; 
			//echo $row["fence_id"];
		} 
	}else{ 
		echo "0 個結果"; 
	} 
$conn->close();
?>