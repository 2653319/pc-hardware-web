<?php
	session_start();
	include("db_conn.php");
	$userName = $_SESSION['email'];
	$sql ="SELECT * FROM `orders` WHERE `buyerName` = '$userName'";
	$result = mysqli_query($link,$sql);
?>
<style>
body{
	background-color: rgb(247, 235, 220);
}
</style>
<head>
	<link rel="stylesheet" href="http://210.70.80.111/108021003/%E7%B6%B2%E9%A0%81%E7%B3%BB%E7%B5%B1%E9%96%8B%E7%99%BC/css/shopingCar.css" type="text/css">
	<!--css連接-->
</head>

<body>
	<h1 style="background-color:black; color:white ; font-size:40px">PC硬體估價系統 | 訂單詳情</h1>
	<div style="background-color: white;  width: 1520px;  height: 300px;  overflow: scroll;" >   <!--商品欄的滾輪清單設定-->
		<table width="1500" >  <!--商品欄的table設定-->
		<tr>
			<?php
				if (mysqli_num_rows($result) > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
						echo "<tr>";
						echo "<td>使用者:" . $row["buyerName"] . "</td><td>產品名稱:" . $row["productName"] . "</td><td>數量:" . $row["amount"] . "</td><td>地址:" . $row["address"] . "</td><td>價格:" . $row["price"] . "</td>" ;
						?>
						<td><a href="orderDel.php?id=<? echo $row["id"]; ?>">取消訂單</a></td>
						<?php echo "</tr>";
					}
				} else {
					echo "0 結果";
				}
			?>
		</tr>
		</table> 	
	</div>
	<button type="button" id="back" name="back" value="back" style="position:absolute;top:540px;left:840px;">
		<a href="http://210.70.80.111/108021003/%E7%B6%B2%E9%A0%81%E7%B3%BB%E7%B5%B1%E9%96%8B%E7%99%BC/html/testLoginStatus.php">
		回上一頁
	</button>	<!--下單按鈕-->
</body>
<script>
	/*function def(){  
		<?php 
		//$sql = "DELETE FROM `item` WHERE `id` = '$id' AND `user` = '$user' AND `itemID` = '$itemID' AND  `name` = '$name' ";
		//	mysqli_query($link,$sql);
		?>
		alert('刪除成功');
		window.location.reload();
}*/
	</script>