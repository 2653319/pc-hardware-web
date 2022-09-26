<?php
include("db_conn.php");


$sql ="DELETE FROM `order` WHERE id=".$_GET['id'];  //刪除資料

mysqli_query($link,$sql); 

mysql_close($link); 

header("Location:http://210.70.80.111/108021003/%E7%B6%B2%E9%A0%81%E7%B3%BB%E7%B5%B1%E9%96%8B%E7%99%BC/html/shopingCar.php");
?>