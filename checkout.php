<?php 
session_start();
require 'sql_connect.php';
require 'item.php';

if(isset($_SESSION['username'])){
	
	$sql1 = 'INSERT INTO orders (name, datecreation, status, username) VALUES ("New Order","'.date('Y-m-d').'",uncheck,'.$_SESSION['username'].')';
	mysqli_query($konek, $sql1);
	$ordersid = mysqli_insert_id($konek); 
	// Save order details for new orders
	$cart = unserialize(serialize($_SESSION['cart']));
	for($i=0; $i<count($cart);$i++) {
	$sql2 = 'INSERT INTO order_detail (productid, ordersid, price, quantity) VALUES ('.$cart[$i]->id.', '.$ordersid.', '.$cart[$i]->price.', '.$cart[$i]->quantity.')';
	mysqli_query($konek, $sql2);
	}
	// Clear all product in cart
	unset($_SESSION['cart']);
	
	echo 'Thanks for buying products. Click <a href="index.php">here</a> to continue purchasing products.';
	
}
else{
  echo "maaf anda";
}

?>