
<?php
include("db_conn.php");
if(isset($_POST)){
  $username = $_POST['username'];
  $useremail = $_POST['email'];
  $userPW =sha1($_POST['password']);
  $userPH = $_POST['phone'];

  $sql ="INSERT INTO `users`( `userName`, `password`, `email`, `phone`) VALUES ('$username', '$userPW', '$useremail', '$userPH')";
  
  $result = mysqli_query($link, $sql);
  
  echo "<meta http-equiv='refresh' content='2;url=login.html'/>";
}