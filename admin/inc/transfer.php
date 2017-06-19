<?php
	if(isset($_POST['submit']))
	{
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		$reciever_id = $_POST['reciever_id'];
		$amount = $_POST['amount'];
		$message = $_POST['message'];
		$date = date("Y/m/d");
		$status = "pending";
		
		$collect2 = $con->query("SELECT * FROM member_balance WHERE member_id='$member_id'");
		$collect = $collect2->fetch_assoc();
		$current = $collect['balance'];


		
		$rcv = $con->query("SELECT * FROM member_balance WHERE member_id='$reciever_id'");
		$balda = $rcv->num_rows;
		$rcv2 = $rcv->fetch_assoc();
		$rcv_old = $rcv2['balance'];

		$match2 = $con->query("SELECT * FROM users WHERE username='$username' AND password='$password'");
		$match = $match2->num_rows;
		if($match == 1)
		{
			if($current > $amount)
			{
			    $new =0;
				$new = $current - $amount;
                $rcv_new =0;
				$rcv_new = $rcv_old + $amount;

				$update1 = $con->query("INSERT INTO transfer_history(member_id,reciever_id,amount,message,transfer_date,status)VALUES('$member_id','$reciever_id','$amount','$message','$date','$status')") or die($con->error());
				$update2 = $con->query("UPDATE member_balance SET balance='$new' WHERE member_id='$member_id'");
				if($balda > 0)
				{
					$update3 = $con->query("UPDATE member_balance SET balance='$rcv_new' WHERE member_id='$reciever_id'") or die($con->error());
				}
				else
				{
					$update3 = $con->query("INSERT INTO member_balance(member_id,balance)VALUES('$reciever_id','$rcv_new')") or die($con->error());
				}

				if(!$update1 or !$update2 or !$update3)
				{
					echo "<script>alert('Error!!!!')</script>";
				}
				else
				{
					echo "<script>alert('Transfer Success')</script>";
				}
			}
			else
			{
				echo "<script>alert('Enter Right Amount')</script>";
			}
		}
		else
		{
			echo "<script>alert('Username or Password Incorrect')</script>";
		}
	}
?>