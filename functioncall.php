<?php

include('function.php');
$product_reviews = reviews_data();
$products = products_data();
$offers = offers_data('');
// randomString(3);
$product_id = (isset($_REQUEST['product_id'])) ? $_REQUEST['product_id'] : '';
$product = products_data($product_id);
$productDiscount = array();
$productOffersvalue = array();
if ($product[0]['product_id'] != 6) {
    foreach ($product[0]['price'] as $pkey => $pkvalue) {
        if($product[0]['quantity'][$pkey]==' 3 Liter') {
            $pprice = ($pkvalue - ($pkvalue * $offers['Welcome'][0]['Offersvalue']) / 100) - $offers['Product Details'][0]['Offersvalue'];
            $Offerprice = $offers['Welcome'][0]['Offersvalue'] . ' - Rs.' . $offers['Product Details'][0]['Offersvalue'];
        } else if($product[0]['quantity'][$pkey]==' 5 Liter') {
            $pprice = ($pkvalue - ($pkvalue * $offers['Welcome'][0]['Offersvalue']) / 100) - $offers['Product Details'][1]['Offersvalue'];            
            $Offerprice = $offers['Welcome'][0]['Offersvalue'] . ' - Rs.' . $offers['Product Details'][1]['Offersvalue'];
        } else {
            $pprice = $pkvalue - ($pkvalue * $offers['Welcome'][0]['Offersvalue']) / 100;            
            $Offerprice = $offers['Welcome'][0]['Offersvalue'];
        }
        array_push($productDiscount, $pprice);
        array_push($productOffersvalue, $Offerprice);
    }
} else {
    foreach ($product[0]['pricesqty'] as $pkey => $pkvalue) {
        foreach ($pkvalue as $pey => $pval) {
            $pprice = $pval - ($pval * $offers['Welcome'][0]['Offersvalue']) / 100;
            array_push($productDiscount, $pprice);
        }
    }
}
$product[0]['discount'] = $productDiscount;
$product[0]['Offersvalue'] = $productOffersvalue;
if (isset($_SESSION['user']['register_id'])) {
    $user_id = $_SESSION['user']['register_id'];
    $product_cart = carts_data($user_id);
    foreach ($product_cart as $key => $value) {
        $orders = order_data($user_id, $value['cart_id']);
        if (!empty($orders)) {
            $product_order[$key] = $orders[0];
            $product_details = products_data($orders[0]['product_id']);
            $product_order[$key]['quantity'] = $value['quantity'];
            $product_order[$key]['price'] = $value['price'];
            $product_order[$key]['product_name'] = $value['product_name'];
            $product_order[$key]['products_offers'] = $product_details[0]['offers'];
        }
    }
} else if ((isset($_COOKIE['Guest_cart'])) && ($_COOKIE['Guest_cart'] > 0)) {
    $order_id = $_COOKIE['Guest_cart'];
    $orders = order_data('', '', $order_id);
    if (!empty($orders)) {
        $product_order[0] = $orders[0];
        $product_details = products_data($orders[0]['product_id']);
        if (!empty($product_details[0]['offer_ids'])) {
            $product_offers = explode(',', $product_details[0]['offers']);
            $offers_id = explode(',', $product_details[0]['offer_ids']);
            foreach ($offers_id as $key => $value) {
                $offer_details = offers_data($value);
                $product_order[0]['offers'][$key] = $product_offers[$key];
                $product_order[0]['products_offers'][$key] = $offer_details[0];
            }
        }
    }
}
?>