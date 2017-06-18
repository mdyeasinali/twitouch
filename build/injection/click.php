<?php

include_once ("../../admin/db.php");
	
	if(isset($_GET['job_id']))
	{
		$job_id = $_GET['job_id'];
		$member_id = $_GET['member_id'];
		$new = $con->query("SELECT * FROM member WHERE member_id='$member_id'");
		foreach ($new as $new2 )
		$ref_id = $new2['ref_id'];
		
		$jq2 = $con->query("SELECT * FROM job WHERE job_id=$job_id");

		foreach ($jq2 as $jq )
		$url = $jq['answer'];
		$amount = $jq['payment'];
		$date = date("Y/m/d");
		
		$in = $con->query("INSERT INTO member_jobs(job_id,member_id,ref_id,amount,job_date)VALUES('$job_id','$member_id','$ref_id','$amount','$date')");
		if(!$in)
		{
			echo "<script>alert('Error!! Please go back to Job List')</script>";
		}
		else
		{
			echo "<script>window.location.href='$url'</script>";
		}
		
	}

?>