<?php
	include('conn.php');
	$action = '';
	if(isset($_REQUEST['action'])) {
		$action = $_REQUEST['action'];
	}
	if(isset($_POST)) {
		extract($_POST);
		if($action=='reviews') {
			extract($GLOBALS);
			$query = "INSERT INTO `review` (`name`,`emailid`,`city`,`message`) VALUES ($name,$emailid,$city,$msg)";
			$result= mysqli_query($link,$query) or die('Error in Query.'.mysqli_error($link));
			$rev_id = mysqli_insert_id($link);
			json_encode($rev_id);
		}
	}
	function reviews_data(){
		extract($GLOBALS);
		$query = "SELECT * FROM `review`";
		$result= mysqli_query($link,$query) or die('Error in Query.'.mysqli_error($link));
		return $result;
	}
?>