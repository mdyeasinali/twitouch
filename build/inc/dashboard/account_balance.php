<?php 
	$query2 = $con->query("SELECT * FROM member_balance WHERE member_id='$mem_id'");
	$query = $query2->fetch_assoc();
	$balance = $query['balance'];
	echo "$".$balance;
?>