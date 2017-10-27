<?php
$ibeacon = $_POST['del_ibeacon'];  


include("../connMysql.php"); 
//DELETE FROM `ble` WHERE `ble`.`UUID` = '69696969'
$sql= "DELETE FROM `ble` WHERE `ble`.`UUID` = '".$ibeacon."'";
$result = $conn->query($sql); 
$conn->close();
header("Location: index.php");
exit;
?>