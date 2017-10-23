<?php include('function.php');
 $product_reviews = reviews_data(); 
 $products = products_data();
 $product_id = (isset($_REQUEST['product_id']))?$_REQUEST['product_id']:'';
 $product = products_data($product_id);
 if(isset($_SESSION['user']['register_id'])) {
 	$user_id = $_SESSION['user']['register_id'];
 	$product_cart = carts_data($user_id); 
 	foreach ($product_cart as $key => $value) {
 		$orders = order_data($user_id,$value['cart_id']);
 		if(!empty($orders)) {
 			$product_order[$key] = $orders[0];
 			$product_order[$key]['quantity'] = $value['quantity'];
 			$product_order[$key]['price'] = $value['price'];
 			$product_order[$key]['product_name'] = $value['product_name'];
 		}
 	}
 } else if((isset($_COOKIE['Guest_cart'])) && ($_COOKIE['Guest_cart'] > 0)) {
 	$order_id = $_COOKIE['Guest_cart'];
 	$orders = order_data('','',$order_id);
	if(!empty($orders)) {
		$product_order[$key] = $orders[0];
	}
 } else {
 // 	$host  = $_SERVER['HTTP_HOST'];
	// $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
	// $extra = 'index.php';
	// header("Location: http://$host$uri/$extra");
	// // // exit;
 }
 ?>