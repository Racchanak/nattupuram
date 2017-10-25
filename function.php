<?php

include('conn.php');
session_start();
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
        $query = "INSERT INTO review (name,product_id,emailid,city,message,cret_date,product_name,product_img) 
			VALUES ('" . $name . "',".$product_id.",'" . $emailid . "','" . $city . "','" . $msg . "','" . date('Y-m-d H:i:s') . "','" . $product . "','" . $product_img . "')";
        $result = mysqli_query($link, $query) or die('Error in Query.' . mysqli_error($link));
        $rev_id = mysqli_insert_id($link);
        echo json_encode($rev_id);
    }
    if ($action == 'enquiry') {
        extract($_POST);
        extract($GLOBALS);
        $query = "INSERT INTO enquiry (name,emailid,subject,message,cret_date) 
            VALUES ('" . $name . "','" . $emailid . "','" . $city . "','" . $msg . "','" . date('Y-m-d H:i:s') . "')";
        $result = mysqli_query($link, $query) or die('Error in Query.' . mysqli_error($link));
        $enq_id = mysqli_insert_id($link);
        echo json_encode($enq_id);
    }
    if ($action == 'register') {
        extract($_POST);
        extract($GLOBALS);
        $query = "INSERT INTO register (name,emailid,password,cret_date) 
			VALUES ('" . $name . "','" . $emailid . "','" . md5($password) . "','" . date('Y-m-d H:i:s') . "')";
        $result = mysqli_query($link, $query) or die('Error in Query.' . mysqli_error($link));
        $reg_id = mysqli_insert_id($link);
        echo json_encode($reg_id);
    }
    if ($action == 'product_cart') {
        extract($_POST);
        extract($GLOBALS);
        $query = "INSERT INTO product_cart (user_id,product_id,product_name,category,quantity,price,total,cret_date) 
            VALUES ('" . $product_user_id . "','" . $product_id . "','" . $product_name . "','" . $product_category . "','" . $product_quantity . "','" . $product_amount . "','" . ($product_quantity*$product_amount) . "','" . date('Y-m-d H:i:s') . "')";
        $result = mysqli_query($link, $query) or die('Error in Query.' . mysqli_error($link));
        $cart_id = mysqli_insert_id($link);
        echo json_encode($cart_id);
    }
    if ($action == 'product_order') {
        extract($_POST);
        extract($GLOBALS);
        $cart_ids = explode(',', $cart_ids);
        foreach ($cart_ids as $key => $value) {
            $cart_detials = carts_data($user_id,$value);
            $query = "INSERT INTO product_order (user_id,cart_id,product_id,total,delivery_status,order_status,cret_date) VALUES ('" . $user_id . "','" . $value . "','" . $cart_detials[0]['product_id'] . "', '" . $cart_detials[0]['total'] . "','N','Pending','" . date('Y-m-d H:i:s') . "')";
            $result = mysqli_query($link, $query) or die('Error in Query.' . mysqli_error($link));
            $order_id = mysqli_insert_id($link);
        }
        echo json_encode($order_id);
    }
    if ($action == 'user_address') {
        extract($_POST);
        extract($GLOBALS);
        if(isset($_SESSION['user']['register_id'])) {
            $query = "INSERT INTO user_address (user_id,name,phoneno,address1,address2,country,city, state,pincode,cret_date) VALUES ('" . $user_id . "','" . $_SESSION['user']['name'] . "','" . $phone. "', '" . $address1 . "', '" . $address2 . "', '" . $city . "', '" . $state . "', '" . $country . "', '" . $zipcode . "', '" . date('Y-m-d H:i:s') . "')";
        } else if(isset($_COOKIE['Guest_cart'])) { 
            $query = "INSERT INTO user_address (guest_orderid,name,phoneno,address1,address2,country,city, state,pincode,cret_date) VALUES ('" . $_COOKIE['Guest_cart'] . "','" . $name . "','" . $phone. "', '" . $address1 . "', '" . $address2 . "', '" . $city . "', '" . $state . "', '" . $country . "', '" . $zipcode . "', '" . date('Y-m-d H:i:s') . "')";
        }
        $result = mysqli_query($link, $query) or die('Error in Query.' . mysqli_error($link));
        $address_id = mysqli_insert_id($link);
        echo json_encode($address_id);
    }
    if ($action == 'product_transaction') {
        extract($_POST);
        extract($GLOBALS);
        if(isset($_SESSION['user']['register_id'])) {
            $query = "INSERT INTO product_transaction (user_id, billing_addid, total_amt,cret_date) VALUES ('" . $user_id . "','" . $billing_addid . "','" . $total_amt. "', '" . date('Y-m-d H:i:s') . "')";
        } else if(isset($_COOKIE['Guest_cart'])) { 
            $query = "INSERT INTO product_transaction (guest_orderid, billing_addid, total_amt,cret_date) VALUES ('" . $_COOKIE['Guest_cart'] . "','" . $billing_addid . "','" . $total_amt. "', '" . date('Y-m-d H:i:s') . "')";
        }
        $result = mysqli_query($link, $query) or die('Error in Query.' . mysqli_error($link));
        $transaction_id = mysqli_insert_id($link);
        $order_ids = explode(',', $order_ids);
        foreach ($order_ids as $key => $value) {
            $query = "UPDATE product_order SET transaction_id=".$transaction_id." WHERE order_id=".$value;
            $result = mysqli_query($link, $query) or die('Error in Query.' . mysqli_error($link));
        }
        echo json_encode($transaction_id);
    }
    if ($action == 'guest_order') {
        extract($_POST);
        extract($GLOBALS);
        $query = "INSERT INTO product_order (product_id,product_name,category,quantity,price,total,delivery_status, order_status,cret_date) VALUES ('" . $product_id . "', '" . $product_name . "','".$product_category."', '" . $product_quantity . "','" . $product_amount . "','" . ($product_quantity*$product_amount) . "','N','Pending','" . date('Y-m-d H:i:s') . "')";
        $result = mysqli_query($link, $query) or die('Error in Query.' . mysqli_error($link));
        $order_id = mysqli_insert_id($link);
        echo json_encode($order_id);  
    }
    if ($action == 'transact_payment') {
        extract($_POST);
        extract($GLOBALS);
        $query = "UPDATE product_transaction SET transaction_status='".$status."', payment_id='".$payment_id."' WHERE transaction_id=".$transact_id;
        $result = mysqli_query($link, $query) or die('Error in Query.' . mysqli_error($link));
        if ($status == 'Success') {

            $subject = "Booking Confirmed";

            $message = "
            <html>
            <head>
            <title>HTML email</title>
            </head>
            <body>
            <p>Hi ".$curr_user['name'] .",</p>
            <p>You have successfully booked your order with Nattupuram.</p>
            <p>Thank you<br><br>Regards,<br><a href='http://www.nattupuram.com/alpha'>Nattupuram</a></p>
            </body>
            </html>
            ";
            // Always set content-type when sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            // More headers
            $headers .= 'From: <salesnattupuram@gmail.com>' . "\r\n";
            $headers .= 'Cc: salesnattupuram@gmail.com' . "\r\n";

            mail($curr_user['emailid'],$subject,$message,$headers);
        }
        echo json_encode((int)$transact_id);        
    }
    if ($action == 'userlogin') {
        extract($_POST);
        extract($GLOBALS);
        $query = "SELECT * FROM register WHERE emailid='" . $emailid . "' AND password='" . md5($password) . "'";
        $result = mysqli_query($link, $query) or die('Error in Query.' . mysqli_error($link));
        $arr = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $arr[] = $row;
        }
        if (!empty($arr)) {
            $curr_user = array();
            $curr_user['register_id'] = $arr[0]['register_id'];
            $curr_user['name'] = $arr[0]['name'];
            $curr_user['emailid'] = $arr[0]['emailid'];
            $_SESSION['user'] = $curr_user;
            $subject = "Registration Confirmation";

            $message = "
            <html>
            <head>
            <title>HTML email</title>
            </head>
            <body>
            <p>Hi ".$curr_user['name'] .",</p>
            <p>You have successfully registered with Nattupuram.</p>
            <p>Thank you<br><br>Regards,<br><a href='http://www.nattupuram.com/alpha'>Nattupuram</a></p>
            </body>
            </html>
            ";
            // Always set content-type when sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            // More headers
            $headers .= 'From: <salesnattupuram@gmail.com>' . "\r\n";
            $headers .= 'Cc: salesnattupuram@gmail.com' . "\r\n";

            mail($curr_user['emailid'],$subject,$message,$headers);
            echo json_encode((int) $arr[0]['register_id']);
        } else {
            echo json_encode(0);
        }
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
    if ($action == 'userlogout') {
        $_SESSION['user'] = '';
        echo json_encode(1);
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

function offers_data($offer_id = '') {
    extract($GLOBALS);
    if($offer_id=='') {
        $query = "SELECT * FROM `Offers`";
    } else {
        $query = "SELECT * FROM `Offers` WHERE offers_id = '".$offer_id."'" ;
    }
    $result = mysqli_query($link, $query) or die('Error in Query.' . mysqli_error($link));
    $arr = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $arr[] = $row;
    }
    if($offer_id=='') {
        $offers['Welcome'] = array();
        $offers['Product'] = array();
        foreach ($arr as $key => $value) {
            if($value['category'] == 'Welcome') {
                array_push($offers['Welcome'],$value);
            } else if($value['category'] == 'Product') {
                array_push($offers['Product'],$value);
            }
        }
        return $offers;
    } else {
        return $arr;
    }
}

function carts_data($user_id,$cart_id = '') {
    extract($GLOBALS);
    if($cart_id=='') {
        $query = "SELECT * FROM `product_cart` WHERE user_id='".$user_id."'";
    } else {
        $query = "SELECT * FROM `product_cart` WHERE user_id='".$user_id."' AND cart_id='".$cart_id."'";        
    }
    $result = mysqli_query($link, $query) or die('Error in Query.' . mysqli_error($link));
    $arr = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $arr[] = $row;
    }
    return $arr;
}

function order_data($user_id,$cart_id = '',$order_id='') {
    extract($GLOBALS);
    if($cart_id!='') {
        $query = "SELECT * FROM `product_order` WHERE user_id='".$user_id."' AND cart_id='".$cart_id."'";
    } else if ($order_id!='') {
        $query = "SELECT * FROM `product_order` WHERE order_id='".$order_id."'";
    } else {
        $query = "SELECT * FROM `product_order` WHERE user_id='".$user_id."'";        
    }
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