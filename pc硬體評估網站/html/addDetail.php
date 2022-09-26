<?php
include("db_conn.php");
session_start();
$userName = $_SESSION['email'];
$address = $_POST['address'];

$sql ="INSERT INTO `orders` (`buyerName`, `amount`, `productName`,`price`,`address`) SELECT `buyerName`, `amount`, `productName`,`price`,'$address' FROM `item` WHERE `buyerName` = '$userName'";  

mysqli_query($link,$sql); 

$sql ="DELETE FROM `item` WHERE `buyerName` = '$userName'";

mysqli_query($link,$sql); 

mysql_close($link); 

header("Location:http://210.70.80.111/108021003/%E7%B6%B2%E9%A0%81%E7%B3%BB%E7%B5%B1%E9%96%8B%E7%99%BC/html/testLoginStatus.php");
?>