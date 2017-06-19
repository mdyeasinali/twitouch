<?php
require_once ('../db.php');
	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
		$today = date("Y/m/d");
		$select = $con->query("SELECT * FROM withdraw_history WHERE id='$id'");
        $select2 = $select->fetch_assoc();
		$member_id = $select2['member_id'];
		$amount = $select2['amount'];
		$admin = "10001";
		$stat = "approved";
			
		$select3 = $con->query("SELECT * FROM member_balance WHERE member_id='$member_id'");
		$select4 = $select3->fetch_assoc();
		$n = $select4['balance'];
		$new = $n - $amount;
		if($new <= 0)
		{
			$chui = $con->query("DELETE FROM withdraw_history WHERE id='$id'");
			if($chui)
			{
				echo "<script>alert('Not enough balance in Member Account')</script>";
			}
			echo "<script>window.location.href='../withdraw_request.php'</script>";
		}
		else
		{
		$select50 = $con->query("SELECT * FROM member_balance WHERE member_id='$admin'");
		$select40 = $select50->fetch_assoc();
		$then = $select40['balance'];
		$now = $then + $amount;
			
		$add = $con->query("UPDATE member_balance SET balance='$now' WHERE member_id='$admin'") or die(mysqli_error());
		$upu = $con->query("UPDATE withdraw_history SET approve_date='$today',status='$stat' WHERE id='$id' ") or die(mysqli_error());
		$sub = $con->query("UPDATE member_balance SET balance='$new' WHERE member_id='$member_id'") or die(mysqli_error());
		
		if(!$add or !$upu or !$sub)
		{
			echo "<script>alert('Error!!!')</script>";
			echo "<script>window.location.href='../withdraw_request.php'</script>";
		}
		else
		{
			echo "<script>alert('Success')</script>";
			echo "<script>window.location.href='../withdraw_request.php'</script>";
		}
		}
	}
?>