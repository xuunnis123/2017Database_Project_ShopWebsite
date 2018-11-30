<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>加刪店家</title>

<style type="text/css">
body{font-family:微軟正黑體;}

.storeName{background-color:pink;
           height:80px;
		   text-align:center;
		   font-family:cursive;
		   font-size:64px;
		   color:white;}
	  
</style>

<script type="text/javascript">

</script>
</head>

<body>
<div class="storeName">Candy Yen<3</div>

<center>

<p style="text-align:center; font-size:36px;">店家修改</p>

<?php
echo '請輸入資料'."<p>";
?>

<form id = "form1" name"="form1" method="Post" action="">

<p><label>店家名稱:
<input type="text" name="store_name" size="35">
</label></p>

<p><label>介紹:
<input type="text" name="description" size="40">
</label></p>

<p><label>電話:
<input type="text" name="phone" size="40">
</label></p>

<p><label>網址:
<input type="text" name="website" size="40">
</label></p>

<p>
<input type="button" value="新增" type="submit" onclick="form1.action='insertStore.php';form1.submit();"/>
<input type="button" value="修改" type="submit" onclick="form1.action='updateStore.php';form1.submit();"/>
<input type="button" value="刪除" type="submit" onclick="form1.action='deleteStore.php';form1.submit();"/>
</p>
</form>
</center>

<div>
<a href="first.php">
<img src="returnButton.jpg" width="35" height="39">
</a>
</div>

</body>
</html>