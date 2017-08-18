<?php
	include('conn.php');
	$action = '';
	$product = '';
	if(isset($_REQUEST['action'])) {
		$action = $_REQUEST['action'];
	}
	if(isset($_REQUEST['product'])) {
		$product = $_REQUEST['product'];
	}
	if(isset($_POST)) {
		if($action=='reviews') {
			extract($_POST);
			extract($GLOBALS);
			$query = "INSERT INTO review (name,emailid,city,message,reviewcol,product_name,product_img) 
			VALUES ('".$name."','".$emailid."','".$city."','".$msg."','".date('Y-m-d H:i:s')."','".$product."','".$product_img."')";
			$result= mysqli_query($link,$query) or die('Error in Query.'.mysqli_error($link));
			$rev_id = mysqli_insert_id($link);
			echo json_encode($rev_id);
		}
		if($action=='register') {
			extract($_POST);
			extract($GLOBALS);
			$query = "INSERT INTO register (name,emailid,password,registercol) 
			VALUES ('".$name."','".$emailid."','".md5($password)."','".date('Y-m-d H:i:s')."')";
			$result= mysqli_query($link,$query) or die('Error in Query.'.mysqli_error($link));
			$reg_id = mysqli_insert_id($link);
			echo json_encode($reg_id);
		}
		if($action=='product') {
			extract($GLOBALS);
			$query = "SELECT * FROM `review` WHERE product_name='".$product."'";
			$result= mysqli_query($link,$query) or die('Error in Query.'.mysqli_error($link));
		    $arr = array();
		    while ($row = mysqli_fetch_assoc($result)) {
		        $arr[] = $row;
		    }
			echo json_encode($arr);
		}
	}
	
	function reviews_data(){
		extract($GLOBALS);
		$query = "SELECT * FROM `review`";
		$result= mysqli_query($link,$query) or die('Error in Query.'.mysqli_error($link));
	    $arr = array();
	    while ($row = mysqli_fetch_assoc($result)) {
	        $arr[] = $row;
	    }
	    return $arr;
	}
	/*
	 * Function to limit the no. of words in a string
	 */

	function limit_words($string, $word_limit) {
	    $words = explode(" ", $string);
	    return implode(" ", array_splice($words, 0, $word_limit));
	}
?>