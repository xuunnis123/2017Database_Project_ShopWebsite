<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>加刪內衣</title>

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

<p style="text-align:center; font-size:36px;">內衣修改</p>

<?php
echo '請輸入資料'."<p>";
?>

<form id = "form1" name"="form1" method="Post" action="">

<p><label>衣服名稱:
<input type="text" name="under_ID" size="35" autofocus/>
</label></p>

<p><label>店家名稱:
<input type="text" name="store_name" size="35">
</label></p>

<p><label>衣服名稱:
<input type="text" name="name" size="35">
</label></p>

<p><label>價錢:
<input type="text" name="price" size="40">
</label></p>

<p><label>圖片:
<input type="text" name="picture" size="40">
</label></p>

<p><label>網址:
<input type="text" name="web" size="40">
</label></p>

<p>
<input type="button" value="新增" type="submit" onclick="form1.action='insertUnder.php';form1.submit();"/>
<input type="button" value="修改" type="submit" onclick="form1.action='updateUnder.php';form1.submit();"/>
<input type="button" value="刪除" type="submit" onclick="form1.action='deleteUnder.php';form1.submit();"/>
</p>
</form>
</center>

<div>
<a href="內著.php">
<img src="returnButton.jpg" width="35" height="39">
</a>
</div>

</body>
</html>