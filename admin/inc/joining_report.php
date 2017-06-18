<?php
$upload = $con->query("SELECT * FROM joining_report");

	if($upload)
	{
	    foreach ($upload as $upload2){
?>
	<tr>
		<td><?php echo $upload2['ref_id'];?></td>
		<td><?php echo $upload2['joined_id'];?></td>
		<td><?php echo $upload2['approve_date'];?></td>
		<td><?php echo $upload2['deducted_amount'];?></td>
		<td><?php echo $upload2['reason'];?></td>
	</tr>
<?php
			}
	}
?>
