<?php
require_once ('../db.php');
	if(isset($_GET['member_id']))
	{
		$member_id = $_GET['member_id'];
		$select = $con->query("SELECT * FROM member WHERE member_id='$member_id'");

		foreach ($select as $select2)
		$username = $select2['username'];
		
		$date = date("Y/m/d");
		$status = "Inactive";
		$approval = "yes";
		//$q = mysqli_query($con,"UPDATE member SET status='$status' WHERE member_id='$member_id'");
		$q = $con->query("UPDATE member SET status='$status' WHERE member_id='$member_id'");
		$q2 = $con->query("UPDATE inactive_request SET inactive_date='$date',approval='$approval' WHERE member_id='$member_id'");
		$q3 = $con->query("UPDATE users SET status='$status' WHERE username='$username'");
		if(!$q or !$q2 or !$q3)
		{
			echo "<script>alert('Error!!!')</script>";
			echo "<script>window.location.href='../member_inactive_request.php'</script>";
		}
		else
		{
			echo "<script>alert('Success')</script>";
			echo "<script>window.location.href='../member_inactive_request.php'</script>";
		}
	}
?>