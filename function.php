<?php

include('conn.php');
$action = '';
$product = '';
if (isset($_REQUEST['action'])) {
    $action = $_REQUEST['action'];
}
if (isset($_REQUEST['product'])) {
    $product = $_REQUEST['product'];
}
if (isset($_POST)) {
    if ($action == 'reviews') {
        extract($_POST);
        extract($GLOBALS);
        $query = "INSERT INTO review (name,emailid,city,message,reviewcol,product_name,product_img) 
			VALUES ('" . $name . "','" . $emailid . "','" . $city . "','" . $msg . "','" . date('Y-m-d H:i:s') . "','" . $product . "','" . $product_img . "')";
        $result = mysqli_query($link, $query) or die('Error in Query.' . mysqli_error($link));
        $rev_id = mysqli_insert_id($link);
        echo json_encode($rev_id);
    }
    if ($action == 'register') {
        extract($_POST);
        extract($GLOBALS);
        $query = "INSERT INTO register (name,emailid,password,registercol) 
			VALUES ('" . $name . "','" . $emailid . "','" . md5($password) . "','" . date('Y-m-d H:i:s') . "')";
        $result = mysqli_query($link, $query) or die('Error in Query.' . mysqli_error($link));
        $reg_id = mysqli_insert_id($link);
        echo json_encode($reg_id);
    }
    if ($action == 'product') {
        extract($GLOBALS);
        $query = "SELECT * FROM `review` WHERE product_name='" . $product . "'";
        $result = mysqli_query($link, $query) or die('Error in Query.' . mysqli_error($link));
        $arr = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $arr[] = $row;
        }
        echo json_encode($arr);
    }
}

function reviews_data() {
    extract($GLOBALS);
    $query = "SELECT * FROM `review`";
    $result = mysqli_query($link, $query) or die('Error in Query.' . mysqli_error($link));
    $arr = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $arr[] = $row;
    }
    return $arr;
}

function products_data($product_id = '') {
    extract($GLOBALS);
    $link = $link;
    $query = "SELECT * FROM `products`";
    if (!empty($product_id)) {
        $mquery = "SELECT * FROM `product_methods` WHERE product_id='" . $product_id . "'";
        $mresult = mysqli_query($link, $mquery) or die('Error in Query.' . mysqli_error($link));
        $methods = array();
        while ($mrow = mysqli_fetch_assoc($mresult)) {
            $methods[] = $mrow['description'];
        }
        $fquery = "SELECT * FROM `product_facts` WHERE product_id='" . $product_id . "'";
        $fresult = mysqli_query($link, $fquery) or die('Error in Query.' . mysqli_error($link));
        $facts = array();
        $fkey = 0;
        while ($frow = mysqli_fetch_assoc($fresult)) {
            $facts[$fkey]['facts_description'] = $frow['facts_description'];
            $facts[$fkey]['fact_result'] = $frow['fact_result'];
            $fkey++;
        }
        $cquery = "SELECT * FROM `product_characteristics` WHERE product_id='" . $product_id . "'";
        $cresult = mysqli_query($link, $cquery) or die('Error in Query.' . mysqli_error($link));
        $charater = array();
        while ($crow = mysqli_fetch_assoc($cresult)) {
            $charater[] = $crow['description'];
        }
        $bquery = "SELECT * FROM `product_benefits` WHERE product_id='" . $product_id . "'";
        $bresult = mysqli_query($link, $bquery) or die('Error in Query.' . mysqli_error($link));
        $benefit = array();
        while ($brow = mysqli_fetch_assoc($bresult)) {
            $benefit[] = $brow['description'];
        }
        $rquery = "SELECT * FROM `review` WHERE product_id='" . $product_id . "' LIMIT 0,5";
        $rresult = mysqli_query($link, $rquery) or die('Error in Query.' . mysqli_error($link));
        $reviews = array();
        while ($rrow = mysqli_fetch_assoc($rresult)) {
            $reviews[] = $rrow;
        }
        $query = "SELECT * FROM `products` WHERE product_id='" . $product_id . "'";
    }
    $result = mysqli_query($link, $query) or die('Error in Query.' . mysqli_error($link));
    $products = array();
    $pkey = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        $products[$pkey] = $row;
        $products[$pkey]['quantity'] = explode(',', $row['quantity']);
        $products[$pkey]['price'] = explode(',', $row['price']);
        if (!empty($product_id)) {
            $products[$pkey]['methods'] = $methods;
            $products[$pkey]['facts'] = $facts;
            $products[$pkey]['charater'] = $charater;
            $products[$pkey]['benefit'] = $benefit;
            $products[$pkey]['reviews'] = $reviews;
        }
        $pkey++;
    }
    return $products;
}

/*
 * Function to limit the no. of words in a string
 */

function limit_words($string, $word_limit) {
    $words = explode(" ", $string);
    return implode(" ", array_splice($words, 0, $word_limit));
}

?>