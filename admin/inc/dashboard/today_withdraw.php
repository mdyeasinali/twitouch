<?php
	$aj = date("Y/m/d");
	$khu = $con->query("SELECT SUM(amount) AS tk FROM withdraw_history");
	$kk = $khu->fetch_array();
	$tak = $kk['tk'];
	$sagol =  sprintf("%.3f",$tak);
	echo "$".$sagol;

?>