<?php
 $localhost = 'localhost';
 $user = 'root';
 $password = '';
 $database = 'product';
 //進行連線
$db = mysqli_connect($localhost, $user, $password, $database);
 if (mysqli_connect_errno()) {
 print "Connect failed: ".mysqli_connect_error();
 exit();
 }
 
 mysqli_set_charset($db,"utf8");//設定編碼
 mysqli_select_db($db,"product"); 
  
 echo "<table id='table_source' border='1'>";
 echo "<tr class='topic'>";
 echo "<td>no.</td>";
echo "<td>name</td>";
echo "<td>store name</td>";
echo "<td>price</td>";
echo "<td>picture</td>";
echo "</tr>";
 $query = "SELECT * FROM underwear";

$i=0;
  if($stmt = $db->query($query)){
 while($result=mysqli_fetch_object($stmt)){

$i=$i+1;
	
if($i%2 == 1)
		{
			echo "<tr>";			
			echo "<td>".$result->under_ID."</td>";
			echo "<td>".$result->name."</td>";
			echo "<td>".$result->store_name."</td>";
			echo "<td>".$result->price."</td>";
			echo "<td><a href='".$result->web."'><img width='60px'height='60px' src='".$result->picture."'></a></td>";
			echo "</tr>";
		}
if($i%2 == 0)
	
		{         
			echo "<tr style='background-color:#FFFACD'>";
			echo "<td>".$result->under_ID."</td>";
            echo "<td>".$result->name."</td>";
            echo "<td>".$result->store_name."</td>";
            echo "<td>".$result->price."</td>";
            echo "<td><a href='".$result->web."'><img width='60px'height='60px' src='".$result->picture."'></a></td>";
            echo "</tr>";
		}
	
  }}
echo "</table>"?>