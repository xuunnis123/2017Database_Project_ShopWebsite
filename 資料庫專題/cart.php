<?php
header("Content-Type:text/html; charset=utf-8");
session_start();

$page_title="購物車";
include 'layout_head.php';

$action = isset($_GET['action']) ? $_GET['action'] : "";
$name = isset($_GET['name']) ? $_GET['name'] : "";
$total_price=0;
if($action=='removed'){
    echo "<div class='alert alert-info'>";
    echo "<strong>{$name}</strong> was removed from your cart!";
    echo "</div>";
}

else if($action=='quantity_updated'){
    echo "<div class='alert alert-info'>";
    echo "<strong>{$name}</strong> quantity was updated!";
    echo "</div>";
}

	$ids = "";
	$cou = 0;
	$num = 0;
	foreach($_SESSION['cart_items'] as $id=>$value)
	{
        $ids = $ids . $id . ",";
		$cou++;
	
    }
	$idss = "";
	$idss = trim($ids, ",");
	if($idss != "")
	{
	$query = "SELECT Tops_id, name, price FROM tops WHERE Tops_id IN ($idss)ORDER BY name";
	
    $stmt = $con->prepare( $query );
    $stmt->execute();
	
	$num = $stmt->rowCount();
	}
if($num>0)
{

    // get the product ids
    
    
	
	/*while($cou>0)
	{*/
    // remove the last comma
    $ids = rtrim($ids, ',');
    //echo " testid:{$ids} ;";
    //start table
   
	
		
 echo "<table class='table table-hover table-responsive table-bordered'>";

    // our table heading
    echo "<tr>";
    echo "<th class='textAlignLeft'>Product Name</th>";
    echo "<th>Price </th>";
    echo "<th>Action</th>";
    echo "</tr>";
	/////////////////////////////////////////
//while($cou>0)
//
	/////////////
	
  $count=0;
   while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
   {
		
  // echo "row:{$row}[$id]!";
		extract($row);

        //creating new table row per record
        echo "<tr>";
        echo "<td>";
		
        echo "<div class='product-name'>{$name}</div>";
        echo "</td>";
        echo "<td>&#36;{$price}</td>";
        echo "<td>";
        echo "<a href='remove_from_cart.php?id={$Tops_id}&name={$name}' class='btn btn-danger'>";
		
        echo " Remove from Cart";
        echo "</a>";
        echo "</td>";
        echo "</tr>";
/*
        echo "<tr>";
        echo "<td>{$name}</td>";
        echo "<td>&#36;{$price}</td>";
        echo "<td>";
        echo "<a href='remove_from_cart.php?id={$Tops_id}&name={$name}' class='btn btn-danger'>";
        //echo "<span class='glyphicon glyphicon-remove'></span> Remove from cart";
		echo "Remove from cart";
        echo "</a>";
        echo "</td>";
        echo "</tr>";
*/
		
        $total_price=$total_price+$price;
		$count++;
		
		//echo "{$total_price}";
   }
   ////////////
   
   //$cou--;
   
//echo "{$total_price}";
    echo "<tr>";
    echo "<td><b>Total</b></td>";
    echo "<td>&#36;{$total_price}</td>";
    echo "<td>";
    echo "<a href='#' class='btn btn-success'>";
    echo "Checkout";
    echo "</a>";
    echo "</td>";
    echo "</tr>";
    echo "</table>";
}

else{
    echo "<div class='alert alert-danger'>";
    echo "<strong>No products found</strong> in your cart!";
    echo "</div>";
}

include 'layout_foot.php';
?>