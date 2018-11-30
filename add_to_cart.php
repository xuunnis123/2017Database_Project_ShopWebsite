<?php
session_start();

// get the product id
$id = isset($_GET['id']) ? $_GET['id'] : "";
$name = isset($_GET['name']) ? $_GET['name'] : "";
$quantity = isset($_GET['quantity']) ? $_GET['quantity'] : "";

/*
 * check if the 'cart' session array was created
 * if it is NOT, create the 'cart' session array
 */
if(!isset($_SESSION['cart_items'])){
    $_SESSION['cart_items'] = array();
}

// check if the item is in the array, if it is, do not add
// http://tw1.php.net/manual/zh/function.array-key-exists.php
if(array_key_exists($id, $_SESSION['cart_items'])){
   // redirect to product list and tell the user it was added to cart
   // header('Location: products.php?action=exists&Tops_id=' . $id . '&name=' . $name);//V
  // $jquery="INSERT INTO cart(Tops_id,name,price)";
//	header('Location: cart.php?action=exists&Tops_id=($id)','&name=($name)');//V
header("Location: products.php?action=exists&Tops_id=($id),&name=($name)");//V
}

// else, add the item to the array
else{
    $_SESSION['cart_items'][$id]=$name;

    // redirect to product list and tell the user it was added to cart
   // header('Location: products.php?action=added&Tops_id=' . $id . '&name=' . $name);//id->Tops_id
	  header("Location: cart.php?action=exists&Tops_id=($id),&name=($name)");//id->Tops_id
}
?>