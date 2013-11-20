<?php
	include_once "config.php";
	include_once "sql_function.php";
	$product = getProductById($_POST['id']);	
	$endtime = $product["aend"]; 

	$time = $endtime - time();
	if($time < 0 ) {
		$time = 0;
	} else {
		$time = gmdate("H:i:s", $time);
	}
	echo $time;

?>
