<?php
session_start();
$_SESSION['id'] = 1;
$id = $_SESSION['id'];
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");

require_once("header.php");
include('function.php');

$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application’s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.
?>
<section id="cart_items">
	<div class="container text-center">
<?php

if($isValidChecksum == "TRUE") {
	echo "<b>Checksum matched and following are the transaction details:</b>" . "<br/>";
	if ($_POST["STATUS"] == "TXN_SUCCESS") {
		echo "<b>Transaction status is success</b>" . "<br/>";
		////// here is my code 

		extract($_POST);
		$link = $GLOBALS['link'];  
		$query = "UPDATE product_transaction SET payment_id='".$_POST["TXNID"]."' AND transaction_status='".$_POST["STATUS"]."' WHERE transaction_id=".$_POST["ORDER_ID"];
		$result = mysqli_query($link, $query) or die('Error in Query.' . mysqli_error($link));
		$subject = "Transaction Successfull";
		$message = "<html>
		<head>
		<title>HTML email</title>
		</head>
		<body>
		<p>Hi ".$_SESSION['user']['name'] .",</p>
		<p>Your transaction successfully completed with Nattupuram with transaction id ".$_POST["TXNID"].".</p>
		<p>Thank you<br><br>Regards,<br><a href='http://www.nattupuram.com/alpha'>Nattupuram</a></p>
		</body>
		</html>";
		// Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		// More headers
		$headers .= 'From: <salesnattupuram@gmail.com>' . "\r\n";
		$headers .= 'Cc: salesnattupuram@gmail.com' . "\r\n";
		mail($_SESSION['user']['emailid'],$subject,$message,$headers);

		//////////////////////////// email for client

		$message = "<html>
		<head>
		<title>HTML email</title>
		</head>
		<body>
		<p>Hi nattupuram,</p>
		<p>".$_SESSION['user']['name'] ." Ordered with Payment id ".$_POST["TXNID"]."  Nattupuram.</p>
		<p>Thank you<br><br>Regards,<br><a href='http://www.nattupuram.com/alpha'>Nattupuram</a></p>
		</body>
		</html>";
		// Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		// More headers
		$headers .= 'From: <'.$_SESSION['user']['emailid'].'>' . "\r\n";
		$headers .= 'Cc: salesnattupuram@gmail.com' . "\r\n";
		mail('salesnattupuram@gmail.com',$subject,$message,$headers);

		///////////// here code stop


		//Process your transaction here as success transaction.
		//Verify amount & order id received from Payment gateway with your application's order id and amount.
	}
	else {
		echo "<b>Transaction status is failure</b>" . "<br/>";
	}

	// if (isset($_POST) && count($_POST)>0 )
	// { 
	// 	foreach($_POST as $paramName => $paramValue) {
	// 			echo "<br/>" . $paramName . " = " . $paramValue;
	// 	}
	// }
	// $checkSum = "";

	// $paramList = array();
	// $paramList["MID"] = PAYTM_MERCHANT_MID;
	// $paramList["ORDERID"] = $_POST['ORDERID'];

	// //Here checksum string will return by getChecksumFromArray() function.
	// $checkSum = getChecksumFromArray($paramList,PAYTM_MERCHANT_KEY);
	//  $check=urlencode($checkSum);  
	//  $paramList["CHECKSUMHASH"]=$check;
	// $data_string = json_encode($paramList); 
	 
	// $ch = curl_init();                    // initiate curl
	// $url = "https://pguat.paytm.com/oltp/HANDLER_INTERNAL/getTxnStatus?JsonData=".$data_string; // where you want to post data

	// $headers = array('Content-Type:application/json');

	// $ch = curl_init();  // initiate curl
	// curl_setopt($ch, CURLOPT_URL,$url);
	// curl_setopt($ch, CURLOPT_POST, 1);  // tell curl you want to post something
	// curl_setopt($ch, CURLOPT_POSTFIELDS,$data_string); // define what you want to post
	// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // return the output in string format
	//  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);     
	// curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);    
	// curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	// $output = curl_exec ($ch); // execute
	// $info = curl_getinfo($ch);
	// print_r($info)."<br />";
	

}
else {
	echo "<b>Checksum mismatched.</b>";
	//Process transaction as suspicious.
}

?>
	</div>
</section>
<footer id="footer"><!--Footer-->
        <div class="footer-bottom" style="background: none repeat scroll 0 0 rgba(29, 111, 24, 0.88);">
            <div class="container" style="width: 850px;">
                <div class="row">
                    <div class="col-sm-12">   
                        <div class="nav-pills navfooter">
                            <ul class="nav navbar-nav">
                                <li><a href="testimonials.<?php  ?>" class="<?= ($menu == 'feedback') ? 'active' : ''; ?>"> Feedback</a></li>
                                <li><a href="team.php" class="<?= ($menu == 'team') ? 'active' : ''; ?>"> Nattupuram Team</a></li>
                                <li><a href="privacypolicy.php" class="<?= ($menu == 'policy') ? 'active' : ''; ?>"> Privacy Policy</a></li>
                                <li><a href="shippingrefund.php" class="<?= ($menu == 'distribute') ? 'active' : ''; ?>"> Shipping and Delivery Policy</a></li>
                                <li><a href="termscondi.php" class="<?= ($menu == 'testi') ? 'active' : ''; ?>"> Terms and Condition</a></li>
                                <!-- <li><a href="#"><i class="fa fa-facebook"></i></a></li>  -->
                                <!-- <li><a href="#"><i class="fa fa-envelope"></i> care@nattupuram.com</a></li> -->
                                <!-- <li><a href="#">Get Your Order<i class="fa fa-phone"></i> +91 9994739036</a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Copyright © 2017 Nattupuram Inc. All rights reserved.</p>
                    <p class="pull-right">Designed by <span><a target="_blank" href="">nattupuram</a></span></p>
                </div>
            </div>
        </div>
    </footer><!--/Footer-->
