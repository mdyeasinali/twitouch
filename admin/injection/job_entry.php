<?php
	if(isset($_POST['submit']))
	{
		$catagory = $_POST['catagory'];
		$question = $_POST['question'];
		$answer = $_POST['answer'];
		
		$pay2 = $con->query("SELECT * FROM job_catagory WHERE catagory='$catagory'");
		$pay = $pay2->fetch_assoc();
		$payment = $pay['payment'];
		
		$add3 = $con->query("INSERT INTO job(catagory,question,answer,payment)VALUES('$catagory','$question','$answer','$payment')");
			if(!$add3)
			{
				echo "<script>alert('Database Error')</script>";
			}
			else
			{
				echo "<script>alert('Success')</script>";
			}
	}
?>