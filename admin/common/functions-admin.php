<?php
ini_set("display_errors", 1);
$GLOBALS['link'] = mysqli_connect('50.62.209.123:3306','nattupuram','nATTUPURAMpALsUJI3','nattupuram') or die('Error Connecting to PHPmyadmin');
$action = '';
if (isset($_REQUEST['action'])) {
    $action = $_REQUEST['action'];
}
if(!empty($_GET['action'])) {
    if ($_GET['action'] == 'chk_pvlg') {
        $user_name = $_GET['user_name'];
        $password =$_GET['password'];
        $privilege=$_GET['login_type'];
        $pass = md5($password);
        $query = "select privilege_type from emp_mst where emp_name='$user_name' and emp_password='$pass'";
        $result = mysqli_query($GLOBALS['link'], $query);
        $row = mysqli_fetch_assoc($result);
        if($row['privilege_type']==$privilege){
            $res=true;
        } else {
            $res=false;
        }
        echo json_encode(array('res'=>$res));
     }
}
if (isset($_POST)) {
    extract($_POST);
    if ($action == 'login') {
        $pass = md5($password);
        $query = "select emp_id,emp_name,privilege_type from emp_mst where emp_name='$user_name' and emp_password='$pass'";
        $result = mysqli_query($GLOBALS['link'], $query);
        $row = mysqli_fetch_assoc($result);
        if (count($row) > 0) {
            $cur_time = date('Y-m-d H:i:s');
            $query1 = "update emp_mst set last_litime='$cur_time' where emp_name='$user_name'";
            mysqli_query($GLOBALS['link'], $query1);
            $privilege=$row['privilege_type'];
            session_start();
            $curr_admin = array();
            $curr_admin['user_id'] = $row['emp_id'];
            $curr_admin['user_name'] = $row['emp_name'];
            $curr_admin['privilege_type']=$privilege;
            $_SESSION['nattupuram_admin'] = $curr_admin;
            setcookie("username", $row['emp_id'], time() + 7600);
            echo $privilege;
        } elseif ($password == null || $password == '') {
            echo'PWF';
        } else {
            echo'UNF';
        }
    }
}
function select_specific_offer($edit){
    extract($GLOBALS);
    $query = "SELECT * FROM `Offers` WHERE offers_id=$edit";
    $result = mysqli_query($link, $query) or die('Error querying database.');
    $arr = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $arr[] = $row;
    }
    return($arr);
}
function select_specific_products($edit){
    extract($GLOBALS);
    $query = "SELECT * FROM `products` WHERE product_id=$edit";
    $result = mysqli_query($link, $query) or die('Error querying database.');
    $arr = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $arr[] = $row;
    }
    return($arr);
}
function select_specific_product_benefits($edit){
    extract($GLOBALS);
    $query = "SELECT * FROM `product_benefits` WHERE product_id=$edit";
    $result = mysqli_query($link, $query) or die('Error querying database.');
    $arr = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $arr[] = $row;
    }
    return($arr);
}
function select_specific_product_characteristics($edit){
    extract($GLOBALS);
    $query = "SELECT * FROM `product_characteristics` WHERE product_id=$edit";
    $result = mysqli_query($link, $query) or die('Error querying database.');
    $arr = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $arr[] = $row;
    }
    return($arr);
}
function select_specific_product_facts($edit){
    extract($GLOBALS);
    $query = "SELECT * FROM `product_facts` WHERE product_id=$edit";
    $result = mysqli_query($link, $query) or die('Error querying database.');
    $arr = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $arr[] = $row;
    }
    return($arr);
}
function select_specific_product_methods($edit){
    extract($GLOBALS);
    $query = "SELECT * FROM `product_methods` WHERE product_id=$edit";
    $result = mysqli_query($link, $query) or die('Error querying database.');
    $arr = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $arr[] = $row;
    }
    return($arr);
}
function display_all_products() {
    extract($GLOBALS);
    $query = "SELECT * FROM `products` where del_flag='N' order by product_id DESC";
    $result = mysqli_query($link, $query) or die('Error querying database.');
    $arr = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $arr[] = $row;
    }
    return $arr;
}
function display_all_offers() {
    extract($GLOBALS);
    $query = "SELECT * FROM `Offers` where del_flag='N' order by offers_id DESC";
    $result = mysqli_query($link, $query) or die('Error querying database.');
    $arr = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $arr[] = $row;
    }
    return $arr;
}
function display_all_register() {
    extract($GLOBALS);
    $query = "SELECT * FROM `register` where del_flag='N' order by register_id DESC";
    $result = mysqli_query($link, $query) or die('Error querying database.');
    $arr = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $arr[] = $row;
    }
    return $arr;
}
function display_all_review() {
    extract($GLOBALS);
    $query = "SELECT * FROM `review` where del_flag='N' order by review_id DESC";
    $result = mysqli_query($link, $query) or die('Error querying database.');
    $arr = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $arr[] = $row;
    }
    return $arr;
}
function display_all_enquiry() {
    extract($GLOBALS);
    $query = "SELECT * FROM `enquiry` where del_flag='N' order by enquiry_id DESC";
    $result = mysqli_query($link, $query) or die('Error querying database.');
    $arr = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $arr[] = $row;
    }
    return $arr;
}
function display_all_distributors() {
    extract($GLOBALS);
    $query = "SELECT * FROM `distributors` where del_flag='N' order by distributors_id DESC";
    $result = mysqli_query($link, $query) or die('Error querying database.');
    $arr = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $arr[] = $row;
    }
    return $arr;
}
function display_all_contactus() {
    extract($GLOBALS);
    $query = "SELECT * FROM `contactus` where del_flag='N' order by contactus_id DESC";
    $result = mysqli_query($link, $query) or die('Error querying database.');
    $arr = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $arr[] = $row;
    }
    return $arr;
}
function display_all_order() {
    extract($GLOBALS);
    $query = "SELECT * FROM `product_order` where del_flag='N' order by order_id DESC";
    $result = mysqli_query($link, $query) or die('Error querying database.');
    $arr = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $arr[] = $row;
    }
    return $arr;
}
if ($action == 'del_product') {
    extract($GLOBALS);
    $productid = $_REQUEST['data'];
    $sel_query = 'UPDATE `products` SET `del_flag`="Y" WHERE `product_id`="' . $productid . '"';
    $result = mysqli_query($link, $sel_query);
    echo json_encode($result);
}
if ($action == 'del_offer') {
    extract($GLOBALS);
    $offersid = $_REQUEST['data'];
    $sel_query = 'UPDATE `Offers` SET `del_flag`="Y" WHERE `offers_id`="' . $offersid . '"';
    $result = mysqli_query($link, $sel_query);
    echo json_encode($result);
}
if ($action == 'del_customer') {
    extract($GLOBALS);
    $registerid = $_REQUEST['data'];
    $sel_query = 'UPDATE `register` SET `del_flag`="Y" WHERE `register_id`="' . $registerid . '"';
    $result = mysqli_query($link, $sel_query);
    echo json_encode($result);
}
if ($action == 'active_register') {
    extract($GLOBALS);
    $registerid = $_REQUEST['data'];
    $sel_query = 'UPDATE `register` SET `status`="Y" WHERE `register_id`="' . $registerid . '"';
    $result = mysqli_query($link, $sel_query);
    echo json_encode($result);
}
if ($action == 'deactive_register') {
    extract($GLOBALS);
    $registerid = $_REQUEST['data'];
    $sel_query = 'UPDATE `register` SET `status`="N" WHERE `register_id`="' . $registerid . '"';
    $result = mysqli_query($link, $sel_query);
    echo json_encode($result);
}
if ($action == 'delete_review') {
    extract($GLOBALS);
    $reviewid = $_REQUEST['data'];
    $sel_query = 'UPDATE `review` SET `del_flag`="Y" WHERE `review_id`="' . $reviewid . '"';
    $result = mysqli_query($link, $sel_query);
    echo json_encode($result);
}
if ($action == 'review_home_yes') {
    extract($GLOBALS);
    $reviewid = $_REQUEST['data'];
    $sel_query = 'UPDATE `review` SET `homePreview`="N" WHERE `review_id`="' . $reviewid . '"';
    $result = mysqli_query($link, $sel_query);
    echo json_encode($result);
}
if ($action == 'review_home_no') {
    extract($GLOBALS);
    $reviewid = $_REQUEST['data'];
    $sel_query = 'UPDATE `review` SET `homePreview`="Y" WHERE `review_id`="' . $reviewid . '"';
    $result = mysqli_query($link, $sel_query);
    echo json_encode($result);
}
if ($action == 'delete_order') {
    extract($GLOBALS);
    $orderid = $_REQUEST['data'];
    $sel_query = 'UPDATE `product_order` SET `del_flag`="Y" WHERE `order_id`="' . $orderid . '"';
    $result = mysqli_query($link, $sel_query);
    echo json_encode($result);
}
if ($action == 'update_status_order') {
    extract($GLOBALS);
    $value = $_REQUEST['data'];
    $orderid = $_REQUEST['id'];
    $sel_query = 'UPDATE `product_order` SET `order_status`="'.$value.'" WHERE `order_id`="' . $orderid . '"';
    $result = mysqli_query($link, $sel_query);
    echo json_encode($result);
}
function paginate($reload, $page, $tpages) {
    $adjacents = 2;
    $prevlabel = "«";
    $nextlabel = "»";
    $out = "";

    // previous
    if ($page == 1) {
        $out.= "<li><span>" . $prevlabel . "</span></li>\n";
    } elseif ($page == 2) {
        $out.="<li><a href=\"" . $reload . "\">" . $prevlabel . "</a>\n</li>";
    } else {
        $out.="<li><a href=\"" . $reload . "&amp;page=" . ($page - 1) . "\">" . $prevlabel . "</a>\n</li>";
    }
    $pmin = ($page > $adjacents) ? ($page - $adjacents) : 1;
    $pmax = ($page < ($tpages - $adjacents)) ? ($page + $adjacents) : $tpages;
    for ($i = $pmin; $i <= $pmax; $i++) {
        if ($i == $page) {
            $out.= "<li class='currentpage'><a href=''>" . $i . "</a></li>\n";
        } elseif ($i == 1) {
            $out.= "<li><a href=" . $reload . ">" . $i . "</a>\n</li>";
        } else {
            $out.= "<li><a href=" . $reload . "&amp;page=" . $i . ">" . $i . "</a>\n</li>";
        }
    }
    if ($page < ($tpages - $adjacents)) {
        $out.= "<li><a href=" . $reload . "&amp;page=" . $tpages . ">" . $tpages . "</a>\n</li>";
    }
    // next
    if ($page < $tpages) {
        $out.= "<li><a href=" . $reload . "&amp;page=" . ($page + 1) . ">" . $nextlabel . "</a>\n</li>";
    } else {
        $out.= "<li><span>" . $nextlabel . "</span></li>\n";
    }
    $out.= "";
    return $out;
}
?>