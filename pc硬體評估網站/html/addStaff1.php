<?php
include("db_conn.php");
if(isset($_POST)){
  $username = $_POST['name'];
  $userPW =sha1($_POST['password']);
 

  $sql ="INSERT INTO `staffs`( `name`, `password`) VALUES ('$username', '$userPW')";
  //echo $sql;
  $result = mysqli_query($link, $sql);
  
  echo "<meta http-equiv='refresh' content='0;url=sfs.php'/>";
}