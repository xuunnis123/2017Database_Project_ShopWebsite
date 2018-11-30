<?php   
$localhost = 'localhost';
$user = 'root';
$password = '';
$database = 'product';
//進行連線
$db = mysqli_connect($localhost, $user, $password, $database);
if (mysqli_connect_errno()) {
print "Connect failed: ".mysqli_connect_error();
exit();
}
mysqli_set_charset($db,"utf8");//設定編碼
//mysqli_close()//斷掉連接

$store_name = $_POST['store_name'];
$description = $_POST['description'];
$phone = $_POST['phone'];
$website = $_POST['website']; 

$result = mysqli_query($db, $sql_delete = "DELETE FROM  store_info Where store_name = '$store_name'") or die('MySQL insert error');

$result = mysqli_query($db, "select * from store_info") or die('MySQL query error');
?>

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

<?php
echo "<center>";
echo "<table border=\"1\" width=\"80%\" style=\"text-align:center;\">\n";
echo "<caption style=\"text-align:left; font-size:36px;\">店家修改</caption>\n";
echo "\n";
echo "<tbody>\n";
echo "<tr>\n";
echo "<th style=\"background-color:#DDDDDD\";>店家名稱</th>\n";
echo "<th style=\"background-color:#DDDDDD\";>店家介紹</th>\n";
echo "<th style=\"background-color:#DDDDDD\";>店家電話</th>\n";
echo "<th style=\"background-color:#DDDDDD\";>店家網址</th>\n";
echo "</tr>\n";

while($row = mysqli_fetch_array($result))
{
echo "<tr>\n";
echo "<th>".$row['store_name']."</th>\n";
echo "<th>".$row['description']."</th>\n";
echo "<th>".$row['phone']."</th>\n";
echo "<th>\n";
echo "<a target='_blank' href='".$row['website']."'>點此進入</a>\n";
echo "</th>\n";
echo "</tr>\n";
}
echo "</tbody>\n";
echo "</table>\n";
echo "</center>";
?>

<html>
<head>
<meta charset="utf-8">
<head></head>
<body>
<div>
<a href="mainStore.php">
<img src="returnButton.jpg" width="35" height="39">
</a>
</div>
</body>
</html>