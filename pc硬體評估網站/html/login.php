<?php
include("db_conn.php");
session_start();

if(isset($_POST)){
    $userID = $_POST['userName'];
    $userPassword = sha1($_POST['password']);

    $sql = "SELECT * FROM `users` WHERE `email` = '$userID' AND `password` = '$userPassword'";
    //echo $sql;

    $result = mysqli_query($link, $sql);
    $val = $result->num_rows;
    if ($val >= 1){
        //header("location:mainPage.php");
        $_SESSION['email'] = $userID;
        //echo $_SESSION['userID']; 
        //echo "<h1 style = 'text-align:center';>成功登入系統~</h1>";
        //echo "<meta http-equiv='refresh' content='2;url=mainPage.php'/>";
        echo "<meta http-equiv='refresh' content='2;url=testLoginStatus.php'/>";
    }else{
        //header("location:Login.html");
        echo "<h1 style = 'text-align:center';>ERRor</h1>";
        //echo "<meta http-equiv='refresh' content='2;url=index.html'/>";
        echo "<meta http-equiv='refresh' content='2;url=login.html'/>";
    }
}else{
    $outData = array("status" => "fail");
}



?>
