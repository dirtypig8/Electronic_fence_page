<?php
$area=$_POST['add_area'];
//3345678
include("../connMysql.php"); 
$sql= "INSERT INTO `main_area` (`location`) VALUES ('".$area."')";

$result = $conn->query($sql); 
echo $result;
$conn->close();
header("Location: index.php");
exit;

?>