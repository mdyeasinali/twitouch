<?php
	$aj = date("Y/m/d");
	$tans = $con->query("SELECT SUM(amount) AS tk FROM transfer_history WHERE member_id='$mem_id' AND transfer_date='$aj'");
	$kk = $tans->fetch_array();
	$tak = $kk['tk'];
	$data =  sprintf("%.3f",$tak);
	echo "$".$data;

?>