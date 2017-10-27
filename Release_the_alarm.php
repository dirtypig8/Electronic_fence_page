<?php
include("connMysql.php"); 
$sql= "INSERT INTO alert(alert_) VALUES ('NO alarm')";
$result = $conn->query($sql); 
$conn->close();
header("Location: index.php");
exit;
?>