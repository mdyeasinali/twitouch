<?php
require_once ('../db.php');
	if(isset($_GET['member_id']))
	{
		$member_id = $_GET['member_id'];
		$find = $con->query("SELECT * FROM member WHERE member_id = '$member_id'") or die(mysqli_error());

        foreach($find as $f)
		$username = $f['username'];
		
		$q = $con->query($con,"DELETE FROM users WHERE username = '$username'");
		$q2 = $con->query($con,"DELETE FROM member WHERE member_id = '$member_id'");
		
		if(!$q OR !$q2)
		{
			echo "<script>alert('Error!!!')</script>";
			echo "<script>window.location.href='../member_request.php'</script>";
		}
		else
		{
			echo "<script>alert('Success')</script>";
			echo "<script>window.location.href='../member_request.php'</script>";
		}
			
	}

?>