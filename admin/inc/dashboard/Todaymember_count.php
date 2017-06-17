<?php
$query = $con->query("select count(*) from member where date(join_date)=date(date_sub(now(),interval 1 day));");
$count  = $query->num_rows;
echo $count;

?>