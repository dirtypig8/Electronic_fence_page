<?php
$ibeacon=$_POST['add_ibeacon'];
echo $ibeacon;
include("../connMysql.php"); 
$sql= "INSERT INTO `ble` (`UUID`) VALUES ('".$ibeacon."')";
$result = $conn->query($sql); 
echo $result;
$conn->close();
header("Location: index.php");
exit;

?>