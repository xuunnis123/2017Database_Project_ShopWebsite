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

$coat_ID =$_POST['coat_ID'];
$store_name = $_POST['store_name'];
$name = $_POST['name']; 
$price = $_POST['price'];
$picture = $_POST['picture'];
$web = $_POST['web'];

$result = mysqli_query($db, "Update coat SET coat_ID = '$coat_ID', store_name = '$store_name', name = '$name', price = '$price', picture = '$picture',  web = '$web' WHERE coat_ID = '$coat_ID'") or die('MySQL update error');

$result = mysqli_query($db, "select * from coat") or die('MySQL query error');
?>

<html>
<head>
<meta charset="utf-8">
<title>加刪外套</title>

<style type="text/css">
body{font-family:微軟正黑體;}

.storeName{background-color:pink;
           height:80px;
		   text-align:center;
		   font-family:cursive;
		   font-size:64px;
		   color:white;}
img{height:50px;
    width:50px;}
	  
</style>

<script type="text/javascript">

</script>
</head>

<body>
<div class="storeName">Candy Yen<3</div>

<?php
echo "<center>";
echo "<table border=\"1\" width=\"80%\" style=\"text-align:center;\">\n";
echo "<caption style=\"text-align:left; font-size:36px;\">外套修改</caption>\n";
echo "\n";
echo "<tbody>\n";  
echo "<tr>\n";
echo "<th style=\"background-color:#DDDDDD\";>外套ID</th>\n";
echo "<th style=\"background-color:#DDDDDD\";>店家名稱</th>\n";
echo "<th style=\"background-color:#DDDDDD\";>外套名稱</th>\n";
echo "<th style=\"background-color:#DDDDDD\";>價錢</th>\n";
echo "<th style=\"background-color:#DDDDDD\";>圖片</th>\n";
echo "<th style=\"background-color:#DDDDDD\";>網址</th>\n";
echo "</tr>\n";

while($row = mysqli_fetch_array($result))
{
echo "<tr>\n";
echo "<td>".$row['coat_ID']."</td>\n";
echo "<td>".$row['store_name']."</td>\n";
echo "<td>".$row['name']."</td>\n";
echo "<td>".$row['price']."</td>\n";
echo "<td><img src='".$row['picture']."'></td>\n";
echo "<td>\n";
echo "<a target='_blank' href='".$row['web']."'>點此進入</a>\n";
echo "</td>\n";
echo "</tr>\n";
}
echo "</tbody>\n";
echo "</table>\n";
echo "</center>";
?>

<div>
<a href="mainCoat.php">
<img src="returnButton.jpg" width="35" height="39">
</a>
</div>
</body>
</html>