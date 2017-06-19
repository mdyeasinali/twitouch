<?php
$query2 = $con->query("SELECT SUM(balance) AS ball FROM member_balance WHERE member_id='$mem_id'");
$query = $query2->fetch_array();
$balance = $query['ball'];
echo "$".sprintf("%.3f",$balance);
?>