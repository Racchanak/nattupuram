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
        $link = $GLOBALS['link'];  
        $query = "INSERT INTO review (name,product_id,emailid,city,message,cret_date,product_name,product_img) 
            VALUES ('" . $name . "',".$product_id.",'" . $emailid . "','" . $city . "','" . $msg . "','" . date('Y-m-d H:i:s') . "','" . $product . "','" . $product_img . "')";
        $result = mysqli_query($link, $query) or die('Error in Query.' . mysqli_error($link));
        $rev_id = mysqli_insert_id($link);
        echo json_encode($rev_id);
    }
    if ($action == 'enquiry') {
        extract($_POST);
        $link = $GLOBALS['link'];  
        $query = "INSERT INTO enquiry (name,emailid,subject,message,cret_date) 
            VALUES ('" . $name . "','" . $emailid . "','" . $city . "','" . $msg . "','" . date('Y-m-d H:i:s') . "')";
        $result = mysqli_query($link, $query) or die('Error in Query.' . mysqli_error($link));
        $enq_id = mysqli_insert_id($link);
        echo json_encode($enq_id);
    }
    if ($action == 'contactus') {
        extract($_POST);
        $link = $GLOBALS['link'];  
        $query = "INSERT INTO contactus (name,emailid,subject,message,cret_date) 
            VALUES ('" . $name . "','" . $emailid . "','" . $city . "','" . $msg . "','" . date('Y-m-d H:i:s') . "')";
        $result = mysqli_query($link, $query) or die('Error in Query.' . mysqli_error($link));
        $enq_id = mysqli_insert_id($link);
        echo json_encode($enq_id);
    }
    if ($action == 'register') {
        extract($_POST);
        $link = $GLOBALS['link'];  
        $query = "INSERT INTO register (name,emailid,password,cret_date) VALUES ('".$name."','".$emailid."','".md5($password)."','".date('Y-m-d H:i:s')."')";
        $result = mysqli_query($link, $query) or die('Error in Query.' . mysqli_error($link));
        $reg_id = mysqli_insert_id($link);
        $random_refer = 'ref'. (rand(10, 30)). '_'. $reg_id. randomString(2,$name);
        $refupdate = "UPDATE register SET referal_code='".$random_refer."' WHERE register_id=".$reg_id;
        $ref_result = mysqli_query($link, $refupdate) or die('Error in Query.' . mysqli_error($link));
        $subject = "Registration Confirmation";
        $message = "<html>
        <head>
        <title>HTML email</title>
        </head>
        <body>
        <p>Hi ".$name .",</p>
        <p>You have successfully registered with Nattupuram.</p>
        <p>Thank you<br><br>Regards,<br><a href='http://www.nattupuram.com/alpha'>Nattupuram</a></p>
        </body>
        </html>";
        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        // More headers
        $headers .= 'From: <salesnattupuram@gmail.com>' . "\r\n";
        $headers .= 'Cc: salesnattupuram@gmail.com' . "\r\n";
        mail($emailid,$subject,$message,$headers);
        $curr_user = array();
        $curr_user['register_id'] = $reg_id;
        $curr_user['name'] = $name;
        $curr_user['emailid'] = $emailid;
        $_SESSION['user'] = $curr_user;
        echo json_encode($reg_id);
    }
    if ($action == 'product_cart') {
        extract($_POST);
        $link = $GLOBALS['link'];  
        $total = ($product_quantity*$product_amount);        
        $sele_gstAmt = ($total + ($total * $sele_gstValue) / 100);
        $query = "INSERT INTO product_cart (user_id,product_id,product_name,category,quantity,price, originalAmt,offersdiscount,gstAmt,gstValue,total,cret_date) VALUES ('" . $product_user_id . "',
        '" . $product_id . "','" . $product_name . "','" . $product_category . "','" . $product_quantity . "',
        '" . $product_amount . "','" . $originalAmt . "','".$offersdiscount."', '".$sele_gstAmt."', 
        '".$sele_gstValue."','" . $total . "','" . date('Y-m-d H:i:s') . "')";
        $result = mysqli_query($link, $query) or die('Error in Query.' . mysqli_error($link));
        $cart_id = mysqli_insert_id($link);
        echo json_encode($cart_id);
    }
    if ($action == 'product_order') {
        extract($_POST);
        $link = $GLOBALS['link'];  
        print_r($cart_ids);
        exit();
        // $cart_ids = explode(',', $cart_ids);
        // foreach ($cart_ids as $key => $value) {
        //     $cart_detials = carts_data($user_id,$value);

        // // $query = "INSERT INTO product_order (cart_id,product_id,product_name,category,quantity,price,originalAmt,offersdiscount,gstAmt,gstValue,total,delivery_status, order_status,cret_date) VALUES ('".$cart_id."', '" . $product_id . "', '" . $product_name . "','".$product_category."', 
        // //     '" . $product_quantity . "','" . $product_amount . "','" . $originalAmt . "','".$offersdiscount."', 
        // //     '".$sele_gstAmt."', '".$sele_gstValue."','" . $total. "','N','Pending','" . date('Y-m-d H:i:s') . "')";

        //     $query = "INSERT INTO product_order (user_id,cart_id,product_id,total,delivery_status,order_status,cret_date) VALUES ('" . $user_id . "','" . $value . "','" . $cart_detials[0]['product_id'] . "', '" . $cart_detials[0]['total'] . "','N','Pending','" . date('Y-m-d H:i:s') . "')";

        //     $result = mysqli_query($link, $query) or die('Error in Query.' . mysqli_error($link));
        //     $order_id = mysqli_insert_id($link);
        // }
        // echo json_encode($order_id);
    }
    if ($action == 'user_address') {
        extract($_POST);
        $link = $GLOBALS['link'];  
        if(isset($_SESSION['user']['register_id'])) {
            $query = "INSERT INTO user_address (user_id,name,phoneno,address1,address2,country,city, state,pincode,cret_date) VALUES ('" . $user_id . "','" . $_SESSION['user']['name'] . "','" . $phone. "', '" . $address1 . "', '" . $address2 . "', '" . $city . "', '" . $state . "', '" . $country . "', '" . $zipcode . "', '" . date('Y-m-d H:i:s') . "')";
        } else if(isset($_COOKIE['Guest_cart'])) { 
            $query = "INSERT INTO user_address (guest_orderid,name,phoneno,address1,address2,country,city, state,pincode,cret_date) VALUES ('" . $_COOKIE['Guest_order'] . "','" . $name . "','" . $phone. "', '" . $address1 . "', '" . $address2 . "', '" . $city . "', '" . $state . "', '" . $country . "', '" . $zipcode . "', '" . date('Y-m-d H:i:s') . "')";
        }
        $result = mysqli_query($link, $query) or die('Error in Query.' . mysqli_error($link));
        $address_id = mysqli_insert_id($link);
        echo json_encode($address_id);
    }
    if ($action == 'product_transaction') {
        extract($_POST);
        $link = $GLOBALS['link'];  
        if(isset($_SESSION['user']['register_id'])) {
            $query = "INSERT INTO product_transaction (user_id, billing_addid, total_amt,cret_date) VALUES ('" . $user_id . "','" . $billing_addid . "','" . $total_amt. "', '" . date('Y-m-d H:i:s') . "')";
        } else if(isset($_COOKIE['Guest_cart'])) { 
            $query = "INSERT INTO product_transaction (guest_orderid, billing_addid, total_amt,cret_date) VALUES ('" . $_COOKIE['Guest_order'] . "','" . $billing_addid . "','" . $total_amt. "', '" . date('Y-m-d H:i:s') . "')";
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
        $link = $GLOBALS['link']; 
        $total = ($product_quantity*$product_amount);        
        $sele_gstAmt = ($total + ($total * $sele_gstValue) / 100);

        $query = "INSERT INTO product_cart (user_id,product_id,product_name,category,quantity,price, originalAmt,offersdiscount,gstAmt,gstValue,total,cret_date) VALUES ('0',
        '" . $product_id . "','" . $product_name . "','" . $product_category . "','" . $product_quantity . "',
        '" . $product_amount . "','" . $originalAmt . "','".$offersdiscount."', '".$sele_gstAmt."', 
        '".$sele_gstValue."','" . $total . "','" . date('Y-m-d H:i:s') . "')";
        $result = mysqli_query($link, $query) or die('Error in Query.' . mysqli_error($link));
        $cart_id = mysqli_insert_id($link);

        $query = "INSERT INTO product_order (cart_id,product_id,product_name,category,quantity,price,originalAmt,offersdiscount,gstAmt,gstValue,total,delivery_status, order_status,cret_date) VALUES ('".$cart_id."', '" . $product_id . "', '" . $product_name . "','".$product_category."', 
            '" . $product_quantity . "','" . $product_amount . "','" . $originalAmt . "','".$offersdiscount."', 
            '".$sele_gstAmt."', '".$sele_gstValue."','" . $total. "','N','Pending','" . date('Y-m-d H:i:s') . "')";
        $result = mysqli_query($link, $query) or die('Error in Query.' . mysqli_error($link));
        $order_id = mysqli_insert_id($link);
        echo json_encode('c'.$cart_id.'_o'.$order_id);  
    }
    if ($action == 'guestLoginregister') { //gOrderId
        extract($_POST);
        $link = $GLOBALS['link'];  
        session_start();
        $query = "INSERT INTO register (name,emailid,password,cret_date) VALUES ('".$name."','".$emailid."','".md5($password)."','".date('Y-m-d H:i:s')."')";
        $result = mysqli_query($link, $query) or die('Error in Query.' . mysqli_error($link));
        $reg_id = mysqli_insert_id($link);  
        $random_refer = 'ref'. (rand(10, 30)). '_'. $reg_id. randomString(2,$name);
        $refupdate = "UPDATE register SET referal_code='".$random_refer."' WHERE register_id=".$reg_id;
        $ref_result = mysqli_query($link, $refupdate) or die('Error in Query.' . mysqli_error($link)); 
        $curr_user = array();
        $curr_user['register_id'] = $reg_id;
        $curr_user['name'] = $name;
        $curr_user['emailid'] = $emailid;
        $_SESSION['user'] = $curr_user;     
        $subject = "Registration Confirmation";
        $message = "<html>
        <head>
        <title>HTML email</title>
        </head>
        <body>
        <p>Hi ".$curr_user['name'] .",</p>
        <p>You have successfully registered with Nattupuram.</p>
        <p>Thank you<br><br>Regards,<br><a href='http://www.nattupuram.com/alpha'>Nattupuram</a></p>
        </body>
        </html>";
        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        // More headers
        $headers .= 'From: <salesnattupuram@gmail.com>' . "\r\n";
        $headers .= 'Cc: salesnattupuram@gmail.com' . "\r\n";
        mail($curr_user['emailid'],$subject,$message,$headers);
        $curr_user['order_id'] = $gOrderId;
        $cart_id = $_COOKIE['Guest_cart'];
        $cquery = "UPDATE product_cart SET user_id='".$reg_id."' WHERE  cart_id=".$cart_id;
        $cresult = mysqli_query($link, $cquery) or die('Error in Query.' . mysqli_error($link));            
        $query = "UPDATE product_order SET user_id='".$reg_id."' WHERE order_id=".$gOrderId;
        $result = mysqli_query($link, $query) or die('Error in Query.' . mysqli_error($link));
        echo json_encode($curr_user);
    }
    if ($action == 'userLoginregister') {
        extract($_POST);
        $link = $GLOBALS['link'];  
        session_start();
        $query = "SELECT * FROM register WHERE emailid='" . $emailid . "' AND password='" . md5($password) . "' AND del_flag='N'";
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
            $curr_user['order_id'] = $gOrderId;
            $cart_id = $_COOKIE['Guest_cart'];
            $cquery = "UPDATE product_cart SET user_id='".$arr[0]['register_id']."' WHERE  cart_id=".$cart_id;
            $cresult = mysqli_query($link, $cquery) or die('Error in Query.' . mysqli_error($link));
            $query = "UPDATE product_order SET user_id='".$arr[0]['register_id']."' WHERE order_id=".$gOrderId;
            $result = mysqli_query($link, $query) or die('Error in Query.' . mysqli_error($link));
            echo json_encode($curr_user);
        } else {
            echo json_encode(0);
        }        
    }
    if ($action == 'referral_email') {
        extract($_POST);
        $link = $GLOBALS['link'];  
        print_r($_POST);
        $query = "INSERT INTO register (name,emailid,password,cret_date) VALUES ('".$name."','".$emailid."','".md5($password)."','".date('Y-m-d H:i:s')."')";
        $result = mysqli_query($link, $query) or die('Error in Query.' . mysqli_error($link));
        $reg_id = mysqli_insert_id($link);
        exit();
    }
    if ($action == 'applyuserDiscount') {
        extract($_POST);
        $link = $GLOBALS['link'];  
        //Order_details
        $order_id = explode(',', $order_ids);
        $grand_total = 0;
        foreach ($order_id as $key => $value) {         
            $order_details = "SELECT * FROM product_order WHERE del_flag='N' AND order_id='" . $value . "'";
            $res_order = mysqli_query($link, $order_details) or die('Error in Query.' . mysqli_error($link));
            $arr = array();
            while ($row = mysqli_fetch_assoc($res_order)) {
                $arr[] = $row;
            }
            $grand_total += ($arr[0]['total']);   
        } 
        $response['grand_total'] = $grand_total;
        if(!empty($aCcoupon)) {
            //coupon code
            $coupon = "SELECT * FROM Offers WHERE del_flag='N' AND coupon_code='" . $aCcoupon . "'";
            $res_coupon = mysqli_query($link, $coupon) or die('Error in Query.' . mysqli_error($link));
            $coupon_arr = array();
            while ($row = mysqli_fetch_assoc($res_coupon)) {
                $coupon_arr[] = $row;
            }
            if(!empty($coupon_arr)) {
                $discount_value = $grand_total - (($grand_total * $coupon_arr[0]['Offersvalue'])/100);
                $response['coupon_value'] = $discount_value;
            } else {
                $response['coupon_value'] = 0;
            }
        }
        if(!empty($redeemCash)) {
            $redcoupon = "SELECT * FROM Offers WHERE del_flag='N' AND coupon_code='" . $redeemCash . "'";
            $red_coupon = mysqli_query($link, $redcoupon) or die('Error in Query.' . mysqli_error($link));
            $redcoupon_arr = array();
            while ($row = mysqli_fetch_assoc($red_coupon)) {
                $redcoupon_arr[] = $row;
            }
            if($grand_total > ($redcoupon_arr[0]['Offersabove']-500) && $redeemCash < 200) { 
                if(!empty($redcoupon_arr)) {
                    $total_value = ($grand_total * $redcoupon_arr[0]['Offersvalue'])/100;
                    $response['wallet_value'] = $total_value; //$grand_total - $redeemCash;
                } else {
                    $response['wallet_value'] = 0;
                }
            } else {
                $response['wallet_value'] = 0;
            }
        }
        if(!empty($referCode)) {
            $redcoupon = "SELECT * FROM Offers WHERE del_flag='N' AND coupon_code='user'";
            $red_coupon = mysqli_query($link, $redcoupon) or die('Error in Query.' . mysqli_error($link));
            $redcoupon_arr = array();
            while ($row = mysqli_fetch_assoc($red_coupon)) {
                $redcoupon_arr[] = $row;
            }
            $refcoupon = "SELECT * FROM register WHERE del_flag='N' AND referal_code='" . $referCode . "' AND register_id!='" . $user_id . "'";
            $ref_coupon = mysqli_query($link, $refcoupon) or die('Error in Query.' . mysqli_error($link));
            $refcoupon_arr = array();
            while ($row = mysqli_fetch_assoc($ref_coupon)) {
                $refcoupon_arr[] = $row;
            }
            if(!empty($refcoupon_arr)) {
                $refer_value = ($grand_total * $redcoupon_arr[0]['Offersvalue'])/100;      
                $ref_reg = "INSERT INTO wallet_history (user_id,wallet_value,wallet_mode,wallet_valuefrom,wallet_status,cret_date) VALUES 
                '".$refcoupon_arr[0]['register_id']."','".$refer_value."','Referal','".$user_id."','Pending',('".date('Y-m-d H:i:s')."')";
                $res_refreg = mysqli_query($link, $ref_reg) or die('Error in Query.' . mysqli_error($link));
                $wallet_history = mysqli_insert_id($link);
                $response['referal_value'] = $wallet_history; //$grand_total - $redeemCash;
            } else {
                $response['referal_value'] = 0;
            } 
        }
        print_r($_POST);
        print_r($response);
        exit();

    }
    if ($action == 'transact_payment') {
        extract($_POST);
        $link = $GLOBALS['link'];  
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
        $link = $GLOBALS['link'];  
        $query = "SELECT * FROM register WHERE del_flag='N' AND emailid='" . $emailid . "' AND password='" . md5($password) . "'";
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
            echo json_encode((int) $arr[0]['register_id']);
        } else {
            echo json_encode(0);
        }
    }
    if($action == 'checkpassword') {
        extract($_POST);
        $link = $GLOBALS['link']; 
        $sel_query = "SELECT * FROM register WHERE del_flag='N' AND register_id=".$user_id." AND password='".md5($old_password)."'";
        $res = mysqli_query($link, $sel_query) or die('Error in Query.' . mysqli_error($link));
        $arr = array();
        while ($row = mysqli_fetch_assoc($res)) {
            $arr[] = $row;
        }
        if (!empty($arr)) {
            echo json_encode((int) $arr[0]['register_id']);
        } else {
            echo json_encode(0);
        } 
    }
    if($action == 'changePassword') {
        extract($_POST);
        $link = $GLOBALS['link']; 
        $query = "UPDATE register SET password='".md5($password)."' WHERE register_id=".$user_id;
        $result = mysqli_query($link, $query) or die('Error in Query.' . mysqli_error($link));
        echo json_encode((int) $user_id);        
    }
    if ($action == 'checkemail') {
        extract($_POST);
        $link = $GLOBALS['link'];  
        $query = "SELECT * FROM register WHERE del_flag='N' AND emailid='" . $emailid . "'";
        $result = mysqli_query($link, $query) or die('Error in Query.' . mysqli_error($link));
        $arr = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $arr[] = $row;
        }
        if (!empty($arr)) {
            echo json_encode((int) $arr[0]['register_id']);
        } else {
            echo json_encode(0);
        }
    }
    if ($action == 'forgetpass') {
        extract($_POST);
        $link = $GLOBALS['link']; 
        $password = randomString(5,$emailid);
        $query = "UPDATE register SET password='".md5($password)."' WHERE emailid='".$emailid."'";
        $result = mysqli_query($link, $query) or die('Error in Query.' . mysqli_error($link));
        $sel_query = "SELECT * FROM register WHERE del_flag='N' AND emailid='" . $emailid . "'";
        $res = mysqli_query($link, $sel_query) or die('Error in Query.' . mysqli_error($link));
        $arr = array();
        while ($row = mysqli_fetch_assoc($res)) {
            $arr[] = $row;
        }
        $subject = "Forget Password";
        $message = "<html>
        <head>
        <title>HTML email</title>
        </head>
        <body>
        <p>Hi ".$arr[0]['name'] .",</p>
        <p>Your new Password is '".$password."'.</p>
        <p>Thank you<br><br>Regards,<br><a href='http://www.nattupuram.com/'>Nattupuram</a></p>
        </body>
        </html>";
        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        // More headers
        $headers .= 'From: <salesnattupuram@gmail.com>' . "\r\n";
        $headers .= 'Cc: salesnattupuram@gmail.com' . "\r\n";
        mail($emailid,$subject,$message,$headers);
        echo json_encode((int) $arr[0]['register_id']);
    }
    if ($action == 'product') {
        $link = $GLOBALS['link'];  
        $query = "SELECT * FROM `review` WHERE del_flag='N' AND product_name='" . $product . "'";
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
    if ($action == 'deleteCart') { 
        $link = $GLOBALS['link']; 
        $query = "UPDATE product_cart SET del_flag='Y' WHERE cart_id=".$_POST['cart_id'];
        $result = mysqli_query($link, $query) or die('Error in Query.' . mysqli_error($link)); 
        echo json_encode((int) $_POST['cart_id']); 
    }
    if ($action == 'deleteOrder') { 
        $link = $GLOBALS['link']; 
        $query = "UPDATE product_order SET del_flag='Y' WHERE order_id=".$_POST['order_id'];
        $result = mysqli_query($link, $query) or die('Error in Query.' . mysqli_error($link)); 
        echo json_encode((int) $_POST['order_id']); 
    }
}   
function randomString($length,$string) {
    $str = "";
    $characters = str_split($string, 1);
    $max = count($characters) - 1;
    for ($i = 0; $i < $length; $i++) {
        $rand = mt_rand(0, $max);
        $str .= $characters[$rand];
    }
    return $str;
}

function reviews_data() {
    $link = $GLOBALS['link'];  
    $query = "SELECT * FROM `review` WHERE del_flag='N'";
    $result = mysqli_query($link, $query) or die('Error in Query.' . mysqli_error($link));
    $arr = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $arr[] = $row;
    }
    return $arr;
}

function offers_data($offer_id = '') {
    $link = $GLOBALS['link'];  
    if($offer_id=='') {
        $query = "SELECT * FROM `Offers` WHERE del_flag='N'";
    } else {
        $query = "SELECT * FROM `Offers` WHERE del_flag='N' AND offers_id = '".$offer_id."'" ;
    }
    $result = mysqli_query($link, $query) or die('Error in Query.' . mysqli_error($link));
    $arr = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $arr[] = $row;
    }
    if($offer_id=='') {
        $offers['Welcome'] = array();
        $offers['Product'] = array();
        $offers['Oil'] = array();
        $offers['Ghee'] = array();
        $offers['Combo 3C'] = array();
        $offers['Combo 5C'] = array();
        foreach ($arr as $key => $value) {
            if($value['category'] == 'Welcome') {
                array_push($offers['Welcome'],$value);
            } else if($value['category'] == 'Product') {
                array_push($offers['Product'],$value);
            } else if($value['category'] == 'Oil') {
                array_push($offers['Oil'],$value);
            } else if($value['category'] == 'Ghee') {
                array_push($offers['Ghee'],$value);
            } else if($value['category'] == 'Combo 3C') {
                array_push($offers['Combo 3C'],$value);
            } else if($value['category'] == 'Combo 5C') {
                array_push($offers['Combo 5C'],$value);
            }
        }
        return $offers;
    } else {
        return $arr;
    }
}

function carts_data($user_id,$cart_id = '') {
    $link = $GLOBALS['link'];  
    if($cart_id=='') {
        $query = "SELECT * FROM `product_cart` WHERE del_flag='N' AND user_id='".$user_id."'";
    } else if($cart_id!='' && $userid!='') {
        $query = "SELECT * FROM `product_cart` WHERE del_flag='N' AND user_id='".$user_id."' AND cart_id='".$cart_id."'";       
    } else {
        $query = "SELECT * FROM `product_cart` WHERE del_flag='N' AND cart_id='".$cart_id."'";        
    }
    $result = mysqli_query($link, $query) or die('Error in Query.' . mysqli_error($link));
    $arr = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $arr[] = $row;
    }
    return $arr;
}

function order_data($user_id,$cart_id = '',$order_id='') {
    $link = $GLOBALS['link'];  
    if($cart_id!='' && $user_id!='') {
        $query = "SELECT * FROM `product_order` WHERE del_flag='N' AND user_id='".$user_id."' AND cart_id='".$cart_id."'";
    } else if ($order_id!='') {
        $query = "SELECT * FROM `product_order` WHERE del_flag='N' AND order_id='".$order_id."'";
    } else if($user_id!='') {
        $query = "SELECT * FROM `product_order` WHERE del_flag='N' AND user_id='".$user_id."'";        
    } else {
        $query = "SELECT * FROM `product_order` WHERE del_flag='N' AND cart_id='".$cart_id."'";         
    }
    $result = mysqli_query($link, $query) or die('Error in Query.' . mysqli_error($link));
    $arr = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $arr[] = $row;
    }
    return $arr;
}

function products_data($product_id='') {
    $link = $GLOBALS['link'];  
    $query = "SELECT * FROM `products`";
    if ($product_id!='') {
        $mquery = "SELECT * FROM `product_methods` WHERE del_flag='N' AND product_id='" . $product_id . "'";
        $mresult = mysqli_query($link, $mquery) or die('Error in Query.' . mysqli_error($link));
        $methods = array();
        while ($mrow = mysqli_fetch_assoc($mresult)) {
            $methods[] = $mrow['description'];
        }
        $fquery = "SELECT * FROM `product_facts` WHERE del_flag='N' AND product_id='" . $product_id . "'";
        $fresult = mysqli_query($link, $fquery) or die('Error in Query.' . mysqli_error($link));
        $facts = array();
        $fkey = 0;
        while ($frow = mysqli_fetch_assoc($fresult)) {
            $facts[$fkey]['facts_description'] = $frow['facts_description'];
            $facts[$fkey]['fact_result'] = $frow['fact_result'];
            $fkey++;
        }
        $cquery = "SELECT * FROM `product_characteristics` WHERE del_flag='N' AND product_id='" . $product_id . "'";
        $cresult = mysqli_query($link, $cquery) or die('Error in Query.' . mysqli_error($link));
        $charater = array();
        while ($crow = mysqli_fetch_assoc($cresult)) {
            $charater[] = $crow['description'];
        }
        $bquery = "SELECT * FROM `product_benefits` WHERE del_flag='N' AND product_id='" . $product_id . "'";
        $bresult = mysqli_query($link, $bquery) or die('Error in Query.' . mysqli_error($link));
        $benefit = array();
        while ($brow = mysqli_fetch_assoc($bresult)) {
            $benefit[] = $brow['description'];
        }
        $rquery = "SELECT * FROM `review` WHERE del_flag='N' AND product_id='" . $product_id . "' LIMIT 0,5";
        $rresult = mysqli_query($link, $rquery) or die('Error in Query.' . mysqli_error($link));
        $reviews = array();
        while ($rrow = mysqli_fetch_assoc($rresult)) {
            $reviews[] = $rrow;
        }
        $query = "SELECT * FROM `products` WHERE del_flag='N' AND product_id='" . $product_id . "'";
    } 
    $result = mysqli_query($link, $query) or die('Error in Query.' . mysqli_error($link));
    $products = array();
    $pkey = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        $products[$pkey] = $row;
        $products[$pkey]['quantity'] = explode(',', $row['quantity']);
        if(!empty($row['sub_quantity'])) {
            $subquantity = explode('#', $row['sub_quantity']);
            $pricesqty = explode('#', $row['price']);
            foreach ($products[$pkey]['quantity'] as $key => $value) {
                $products[$pkey]['subquantity'][$value]= explode(',', $subquantity[$key]);
                $products[$pkey]['pricesqty'][$value] = explode(',', $pricesqty[$key]); 
            }
        } else {
           $products[$pkey]['price'] = explode(',', $row['price']);
        }
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

function transaction_data($transaction_id='') {
    $link = $GLOBALS['link'];  
    $query = "SELECT * FROM `product_transaction` WHERE del_flag='N' AND transaction_id='" . $transaction_id . "'"; 
    $result = mysqli_query($link, $query) or die('Error in Query.' . mysqli_error($link));
    $transact = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $transact[] = $row;
    }
    $uquery = "SELECT * FROM `register` WHERE del_flag='N' AND register_id='" . $transact[0]['user_id'] . "'";
    $uresult = mysqli_query($link, $uquery) or die('Error in Query.' . mysqli_error($link));
    $user = array();
    while ($urow = mysqli_fetch_assoc($uresult)) {
        $user[] = $urow;
    }
    $aquery = "SELECT * FROM `user_address` WHERE del_flag='N' AND address_id='" . $transact[0]['billing_addid'] . "'";
    $aresult = mysqli_query($link, $aquery) or die('Error in Query.' . mysqli_error($link));
    $address = array();
    while ($arow = mysqli_fetch_assoc($aresult)) {
        $address[] = $arow;
    }
    $transaction = array();
    $transaction = $transact[0];
    $transaction['user_id'] = $user[0];
    $transaction['billing_addid'] = $address[0];
    return $transaction;
}

/*
 * Function to limit the no. of words in a string
 */

function limit_words($string, $word_limit) {
    $words = explode(" ", $string);
    return implode(" ", array_splice($words, 0, $word_limit));
}

function select_product_order($edit) {
    extract($GLOBALS);
    $query = "SELECT * FROM `product_order` WHERE del_flag='N' AND order_id=$edit ORDER BY `order_id` DESC ";
    $result = mysqli_query($link, $query) or die('Error querying database.');
    $arr = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $arr[] = $row;
    }
    return $arr;
    mysqli_close($link);
}

function insert_payment_status($data) {
    extract($GLOBALS);
    extract($data_arr);
    echo $query = 'INSERT INTO `product_transaction`(`total_amt`, `transaction_status`, `payment_id`, `user_id`) VALUES ("' . $data['TXNAMOUNT'] . '","' . $data['STATUS'] . '","' . $data['TXNID'] . '", "'. $data['ORDERID'] . '")';
    $result = mysqli_query($link, $query) or die('Error in Query.' . mysqli_error($link));
    $user_id = mysqli_insert_id($link);
    if ($result) {
        return true;
    mysqli_close($link);
    } else {
        return false;
    }
}

?>