<?php
$fence=$_POST['add_fence'];
$location=$_POST['location'];
echo $location.$fence;
include("../connMysql.php"); 
$sql= "INSERT INTO `main_fence` (`fence_id`, `location`) VALUES ('".$fence."', '".$location."')";
$result = $conn->query($sql); 
$conn->close();
header("Location: index.php");
exit;

?>