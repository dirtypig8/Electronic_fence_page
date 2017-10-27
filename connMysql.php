<?php
//資料庫主機設定
$db_host="192.168.0.100";
$db_username='tku';
$db_passwd='tku123';
$db_db='blescan_server';
$conn = mysqli_connect($db_host, $db_username, $db_passwd,$db_db);
if (!$conn) { 
	die("Connection failed: " . mysqli_connect_error()); 
}else{
	//echo "連接成功"; 
$conn->query("SET NAMES 'utf8'"); 
}
?>