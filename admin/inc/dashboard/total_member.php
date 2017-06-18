<?php
	$aj = "Active";
	$meminfo = $con->query("SELECT * FROM member");
	$count = $meminfo->num_rows;
	echo $count;

?>