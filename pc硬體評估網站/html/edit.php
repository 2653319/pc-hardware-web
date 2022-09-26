<?php
include("db_conn.php");
session_start();
$userName = $_SESSION['email'];

$sql = "SELECT * FROM `users` WHERE `email` = '$userName'";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);

?>
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
/* form {
  text-align: center;
} */
</style>
<form class="form-horizontal" action='edit1.php' method="POST">
    
  <fieldset>
    <div id="legend">
      <legend class="">修改資料</legend>
    </div>
    <!-- id -->
    <input type="hidden" id="id" name="id" value="<?echo $row['id']?>" class="input-xlarge">
    <div class="control-group">
      <!-- Username -->
      <label class="control-label"  for="username">Username</label>
      <div class="controls">
        <input type="text" id="username" name="username" placeholder="<?echo $row['userName']?>" class="input-xlarge">
      </div>
    </div>
 
    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="email">E-mail</label>
      <div class="controls">
        <input type="text" id="email" name="email" placeholder="<?echo $row['email']?>" class="input-xlarge">
      </div>
    </div>
    <div class="control-group">
      <!-- Password -->
      <label class="control-label"  for="password">Password</label>
      <div class="controls">
        <input type="password" id="password" name="password" placeholder="" class="input-xlarge">
      </div>
    </div>

    <div class="control-group">
      <!-- Password-->
      <label class="control-label" for="phone">phone</label>
      <div class="controls">
        <input type="text" id="phone" name="phone" placeholder="<?echo $row['phone']?>" class="input-xlarge">

      </div>
    </div>
 
    
 
    <div class="control-group">
      <!-- Button -->
      <div class="controls">
        <button class="btn btn-success">修改</button>
      </div>
    </div>
  </fieldset>
</form>
<body>
  <button type="button" id="back" name="back" value="back" style="position:absolute;top:640px;">
    <a href="http://210.70.80.111/108021003/%E7%B6%B2%E9%A0%81%E7%B3%BB%E7%B5%B1%E9%96%8B%E7%99%BC/html/testLoginStatus.php">
    回上一頁
  </button>	
</body>