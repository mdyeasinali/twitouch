<?php
$query2 = $con->query("SELECT * FROM member WHERE username='$user'");
$query = $query2->fetch_assoc();
$member_id = $query['member_id'];
$today = date("Y/m/d");
$result = $con->query( "SELECT SUM(amount) AS total FROM member_jobs WHERE member_id='$member_id' AND job_date='$today'");
$row = $result->fetch_array();
$sum = $row['total'];
echo "$" . sprintf("%.2f", $sum);
?>