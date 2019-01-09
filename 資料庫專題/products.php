<?php
header("Content-Type:text/html; charset=utf-8");

// 啟動 session
// http://tw1.php.net/manual/zh/function.session-start.php

 //mysql_query(“SET tops UTF-8”);
//$db_selected = mysql_select_db("tops", $con);
session_start();

//設置頁面標題
$page_title="Products";
include 'layout_head.php';

// to prevent undefined index notice
$action = isset($_GET['action']) ? $_GET['action'] : "";
$product_id = isset($_GET['product_id']) ? $_GET['product_id'] : "1";
$name = isset($_GET['name']) ? $_GET['name'] : "";

if($action=='added'){
    echo "<div class='alert alert-info'>";
    echo "<strong>{$name}</strong> was added to your cart!";
    echo "</div>";
}

if($action=='exists'){
    echo "<div class='alert alert-info'>";
    echo "<strong>{$name}</strong> already exists in your cart!";
    echo "</div>";
}

$query = "SELECT Tops_id, name, price FROM tops ORDER BY name";
$stmt = $con->prepare( $query );
$stmt->execute();

$num = $stmt->rowCount();

if($num>0){

    //start table
    // 使用 Bootstrap 建立表單樣式
    // http://v3.bootcss.com/css/#tables
    echo "<table class='table table-hover table-responsive table-bordered'>";

    // our table heading
    echo "<tr>";
    echo "<th class='textAlignLeft'>Product Name</th>";
    echo "<th>Price </th>";
    echo "<th>Action</th>";
    echo "</tr>";

    // 取得資料

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
	{
		
        extract($row);
		
        //creating new table row per record
        echo "<tr>";
        echo "<td>";
		//echo "<div class='product-id' style='display:none;'>{$name}</div>";
       // echo "<div class='product-id' style='display:none;'>{$id}</div>";
		//
        echo "<div class='product-name'>{$name}</div>";
        echo "</td>";
        echo "<td>&#36;{$price}</td>";
        echo "<td>";
        echo "<a href='add_to_cart.php?id={$Tops_id}&name={$name}' class='btn btn-primary'>";
        // 加入圖示
        echo " Add to cart";
        echo "</a>";
        echo "</td>";
        echo "</tr>";
    }

    echo "</table>";
}

// tell the user if there's no products in the database
else{
    echo "No products found.";
}

include 'layout_foot.php';
?>