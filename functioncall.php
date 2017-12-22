<?php
include('function.php');
$product_reviews = reviews_data();
$products = products_data();
$offers = offers_data('');
$product_id = (isset($_REQUEST['product_id'])) ? $_REQUEST['product_id'] : '';
$product = products_data($product_id);
$productDiscount = array();
$productOffersvalue = array();
$productGstvalue = array();
$productGstAmt = array();
if ($product[0]['product_id'] != 6) {
    foreach ($product[0]['price'] as $pkey => $pkvalue) {
        if($product[0]['quantity'][$pkey]==' 3 Liter') {
            $pprice = ($pkvalue - ($pkvalue * $offers['Welcome'][0]['Offersvalue']) / 100) - $offers['Oil'][0]['Offersvalue'];
            $Offerprice = $offers['Welcome'][0]['Offersvalue'] . ' + Rs.' . $offers['Oil'][0]['Offersvalue'];
        } else if($product[0]['quantity'][$pkey]==' 5 Liter') {
            $pprice = ($pkvalue - ($pkvalue * $offers['Welcome'][0]['Offersvalue']) / 100) - $offers['Oil'][1]['Offersvalue'];
            $Offerprice = $offers['Welcome'][0]['Offersvalue'] . ' + Rs.' . $offers['Oil'][1]['Offersvalue'];
        } else {
            if($product[0]['product_id']==4) {            
                $pprice = $pkvalue - ($pkvalue * $offers['Ghee'][0]['Offersvalue']) / 100;            
                $Offerprice = $offers['Ghee'][0]['Offersvalue'];
                $product[0]['welcome'] = $Offerprice;
            } else {   
                $pprice = $pkvalue - ($pkvalue * $offers['Welcome'][0]['Offersvalue']) / 100;            
                $Offerprice = $offers['Welcome'][0]['Offersvalue'];  
                $product[0]['welcome'] = $Offerprice;              
            }
        }
        $priceGst = ($pkvalue - ($pkvalue * $product[0]['gst_val']) / 100); 
        $gstAmt = $product[0]['gst_val'].'%';
        array_push($productDiscount, $pprice);
        array_push($productOffersvalue, $Offerprice);
        array_push($productGstvalue, $gstAmt);
        array_push($productGstAmt, $priceGst);
    }
} else {
    foreach ($product[0]['pricesqty'] as $pkey => $pkvalue) {
        $productDiscount[$pkey] = array();
        $productOffersvalue[$pkey] = array();
        $pOffVal[$pkey] = array();
        foreach ($pkvalue as $pey => $pval) {
            if($pkey=='3 Liter') {      
                $pprice = $pval - (($pval * ($offers['Welcome'][0]['Offersvalue']))  / 100) - $offers['Combo 3C'][$pey]['Offersvalue']; 
                $Offerprice = ($offers['Welcome'][0]['Offersvalue']) . ' + Rs.' . $offers['Combo 3C'][$pey]['Offersvalue'];  
                array_push($productDiscount[$pkey],$pprice);       
                array_push($productOffersvalue[$pkey], $Offerprice);  
                array_push($pOffVal[$pkey], $offers['Combo 3C'][$pey]);   
            } 
            if($pkey==' 5 Liter') {    
                $pprice = $pval - (($pval * ($offers['Welcome'][0]['Offersvalue']))  / 100) - $offers['Combo 5C'][$pey]['Offersvalue'];
                $Offerprice = ($offers['Welcome'][0]['Offersvalue']) . ' + Rs.' . $offers['Combo 5C'][$pey]['Offersvalue']; 
                array_push($productDiscount[$pkey],$pprice);       
                array_push($productOffersvalue[$pkey], $Offerprice);  
                array_push($pOffVal[$pkey], $offers['Combo 5C'][$pey]);    
            }
            $priceGst = ($pkvalue - ($pkvalue * $product[0]['gst_val']) / 100); 
            $gstAmt = $product[0]['gst_val'].'%';
            array_push($productGstvalue, $gstAmt);
            array_push($productGstAmt, $priceGst);
        }    
    }
    $product[0]['welcome'] = $offers['Welcome'][0]['Offersvalue'];
    $product[0]['pOffVal'] = $pOffVal;
}
$product[0]['discount'] = $productDiscount;
$product[0]['Offersvalue'] = $productOffersvalue;
$product[0]['Gstvalue'] = $productGstvalue;
$product[0]['GstAmt'] = $productGstAmt;
if (isset($_SESSION['user']['register_id'])) {
    $user_id = $_SESSION['user']['register_id'];
    $product_cart = carts_data($user_id);
    $cartValue = 0;
    foreach ($product_cart as $key => $value) {
        $orders = order_data($user_id, $value['cart_id']);
        if (!empty($orders)) {
            $product_order[$key] = $orders[0];
            $product_order[$key]['product_details'] = products_data($orders[0]['product_id']);
            $product_order[$key]['quantity'] = $value['quantity'];
            $product_order[$key]['price'] = $value['price'];
            $product_order[$key]['product_name'] = $value['product_name'];
            $product_order[$key]['products_offers'] = $product_order[$key]['product_details'][0]['offers'];
        }
    	$cartValue = $key;
    }
} else if ((isset($_COOKIE['Guest_cart'])) && ($_COOKIE['Guest_cart'] > 0)) {
    $order_id = $_COOKIE['Guest_cart'];
    $orders = order_data('', '', $order_id);
    $cartValue = 0;
    if (!empty($orders)) {
        $product_order[0] = $orders[0];
        $product_order[0]['product_details'] = products_data($product_order[0]['product_id']);
        if (!empty($product_order[0]['product_details'][0]['offer_ids'])) {
            $product_offers = explode(',', $product_order[0]['product_details'][0]['offers']);
            $offers_id = explode(',', $product_order[0]['product_details'][0]['offer_ids']);
            foreach ($offers_id as $key => $value) {
                $offer_details = offers_data($value);
                $product_order[0]['offers'][$key] = $product_offers[$key];
                $product_order[0]['products_offers'][$key] = $offer_details[0];
            }
        }
    }
} else {	
	$cartValue = 0;
}
$cartProduct['cartValue'] = $cartValue;
?>