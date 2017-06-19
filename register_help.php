<?php
require_once('admin/db.php');

if(isset($_POST['register']))
		{
			$name = $_POST['name'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			$password2 = $_POST['password2'];
			$email = $_POST['email'];
            $mobile = $_POST['mobile'];
			$ref_id = $_POST['ref_id'];
            $address = $_POST['address'];
			$role = "user";
			$status = "Inactive";
			$join_date = DATE("Y/m/d");
			
			if($password == $password2)
			{
				$pass = md5($password);
			}
			else
			{
				echo "<script>alert('Password Doesnt match')</script>";
				die();
                echo "<script>window.location.href='auth.php'</script>";
			}


            $check = $con->query("SELECT * FROM member_balance WHERE member_id='$ref_id'");
            $check2 = $check->fetch_assoc();
            $ref_bal = $check2['balance'];
            if($ref_bal < 15)
            {
                echo "<script>alert('Sorry!!! Your Referal Has Not enough privilage')</script>";
                die();
                echo "<script>window.location.href='auth.php'</script>";
            }


			$query = $con->query("SELECT * FROM users WHERE username = '$username'")or die ($con->error);
			$query2 = $query->num_rows;



			if($query2 > 0)
			{
				echo "<script>alert('Username Already Exits')</script>";
			}
			else
			{

				$q = $con->query("INSERT INTO users(name,username,password,email,ref_id,role,status)VALUES('$name','$username','$pass','$email','$ref_id','$role','$status')");
				$q2 = $con->query("INSERT INTO member(name,username,email,mobile,address,ref_id,join_date,status)VALUES('$name','$username','$email','$mobile','$address','$ref_id','$join_date','$status')");
				if(empty($q) or empty($q2))
				{
					echo "<script>alert('Database Error')</script>";
				}
				else
				{
					$rank = $con->query("SELECT * FROM member WHERE username='$username'");
					$rank2 = $rank->fetch_assoc();
					$id = $rank2['member_id'];
					
					$rowSQL = $con->query("SELECT MAX(ref_rank) AS max FROM member_ref WHERE ref_id='$ref_id'" );
					$row_num =  $rowSQL->fetch_array();
					$largestNumber = $row_num['max'];
					$ref_rank = $largestNumber + 1;
					$into = $con->query("INSERT INTO member_ref(member_id,ref_id,ref_rank)VALUES('$id','$ref_id','$ref_rank')");
					
					echo "<script>alert('Registration Successfull')</script>";
				}
			}
		}
?>

