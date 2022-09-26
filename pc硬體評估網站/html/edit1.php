<?php
include("db_conn.php");
if(isset($_POST)){
  $username = $_POST['username'];
  $useremail = $_POST['email'];
  $userPW =sha1($_POST['password']);
  $userPH = $_POST['phone'];
  $id = $_POST['id'];
  //echo $id;
  $sql ="UPDATE `users` SET `userName`='$username',`password`='$userPW ',`email`='$useremail',`phone`='$userPH' WHERE `id` = '$id'";
  //echo $sql;
  $result = mysqli_query($link, $sql);
  
  echo "<meta http-equiv='refresh' content='0 ;url=testLoginStatus.php'/>";
}