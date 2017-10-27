<?php
$area=$_POST['del_area'];  
echo $area;

include("../connMysql.php"); 

$sql = "DELETE FROM `main_area` WHERE `main_area`.`location` = '".$area."'";

$result = $conn->query($sql); 
$conn->close();
header("Location: index.php");
exit;
?>