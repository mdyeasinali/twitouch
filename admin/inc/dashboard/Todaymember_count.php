<?php
$aj = date("Y/m/d");
$row = $con->query("SELECT * FROM member WHERE approve_date='$aj';");
$count = $row->num_rows;
echo $count;

?>