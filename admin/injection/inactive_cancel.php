<?php
require_once ('../db.php');
	if(isset($_GET['member_id']))
	{
		$member_id = $_GET['member_id'];
		$q2 = mysqli_query($con,"DELETE FROM inactive_request WHERE member_id='$member_id'");
		if(!$q or !$q2)
		{
			echo "<script>alert('Error!!!')</script>";
			echo "<script>window.location.href='../member_inactive_request.php'</script>";
		}
		else
		{
			echo "<script>alert('Cancel Success')</script>";
			echo "<script>window.location.href='../member_inactive_request.php'</script>";
		}
	}
?>