<?php

include("db_conn.php");
session_start();

header("Content-Type:text/html; charset=utf-8");
mysql_query("set names utf8md4");
// if(isset($_SESSION['name'])){
$sql = "SELECT * FROM `staffs`";
$result = mysqli_query($link, $sql);

//echo $_SESSION['userID'];
?>
  <!doctype html>
  <html lang="en">
    <head>
    <link rel="stylesheet" href="http://210.70.80.111/108021003/%E7%B6%B2%E9%A0%81%E7%B3%BB%E7%B5%B1%E9%96%8B%E7%99%BC/css/shopingCar.css" type="text/css">
    <style>
      ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #dddddd;
      }

      li {
        float: left;
      }

      li button{
        display: block;
        padding: 8px;
      }
      </style>
      <meta charset="utf-8">
      <title>所有使用者</title>
    </head>
    <body>
    <ul>
      <li><button onclick="location.href='sfu.php'">會員資料</button></li>
      <li><button onclick="location.href='sfs.php'">員工資料</button></li>
      <li><button onclick="location.href='staff.php'">訂單詳細</button></li>
      <li><button onclick="location.href='staffLogin.html'">登出</button></li>
    </ul>
      <button onclick="location.href='addStaff.php'">新增</button>
        <table class="table table-dark" >
            <thead>
                
                <tr>
                    <th scope="col">#</th>
                    <td scope="col">staffName</td>
                    <td scope="col">password</td>
                    <td></td>
                </tr>
            </thead>
            <tbody> 
            <?php
                $i=1;
                while($row = mysqli_fetch_assoc($result)){
                  echo "<tr>
                    <th scope=\"row\">$i</th>
                    <td>$row[name]</td>
                    <td>$row[password]</td>
                    <td>
                      <form method='post' action=''>
                        <input type='hidden' id='userID' name='userID' value='$row[id]'/>
                        <input type='submit' value='修改'/>
                      </form>

                      <form method='post' action='deleteStaff.php'>
                        <input type='hidden' name='userID' value='$row[id]'/>
                        <input type='submit' value='刪除'/>
                      </form>
                    </td>
                  </tr>";
                  $i++;
                }
              ?>
       

            </tbody>
        </table>

        
    
    </body>
  </html>
<?php
    // }else{
    //   echo "<h1 style='text-align:center'>Error: You have no permission to access this page!</h1>";
    // }

?>

