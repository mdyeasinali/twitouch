<?php
$today = date("Y/m/d");
$result2 = $con->query("SELECT amount AS total FROM ref_earn WHERE earn_date='$today' AND member_id='$mem_id'");
$row2 = $result2->fetch_array();
$sum2 = sprintf("%.3f", $row2['total']);
echo "$" . $sum2;
?>