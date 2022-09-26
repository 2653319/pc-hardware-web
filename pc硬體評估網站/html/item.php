<?php
session_start();
include("db_conn.php");

if(isset($_POST)){
  $buyerName = $_SESSION['email'];
  $amount = 1;
  $DataSheet = $_POST['itemKind'];
  $id = $_POST['itemID'];

  /*$buyerName = $_SESSION['email'];
  $amount = 2;
  $DataSheet = "CPU";
  $id = 1;*/
  
  $sql = "INSERT INTO `item`(`buyerName`,`amount`,`productName`,`price`) SELECT '$buyerName', '$amount',`name2`, `price` FROM `$DataSheet` WHERE `id` = '$id'";
  mysqli_query($link, $sql);

  echo "<meta http-equiv='refresh' content='0;url=testLoginStatus.php'/>";
}