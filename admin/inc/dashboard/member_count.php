<?php
$query = $con->query("SELECT * FROM member");
$count  = $query->num_rows;
echo $count;

?>