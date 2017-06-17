<?php
$query = $con->query("SELECT * FROM member WHERE status='Active'");
$count  = $query->num_rows;
echo $count;

?>