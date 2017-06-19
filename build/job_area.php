<?php
session_start();
include_once ("../admin/db.php");
if(isset($_GET['job_id']))
{
	$job_id = $_GET['job_id'];
	$member_id = $_GET['member_id'];
	$find_out = $con->query("SELECT * FROM member WHERE member_id='$member_id'");
	$find_out2 = $find_out->fetch_assoc();
	$my_ref_id = $find_out2['ref_id'];
?>

<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Twitouch | Job Area</title>

	<link href="img/favicon.144x144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
	<link href="img/favicon.114x114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
	<link href="img/favicon.72x72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
	<link href="img/favicon.57x57.png" rel="apple-touch-icon" type="image/png">
	<link href="img/favicon.png" rel="icon" type="image/png">
	<link href="img/favicon.ico" rel="shortcut icon">

	<link rel="stylesheet" href="css/separate/vendor/select2.min.css">
	<link rel="stylesheet" href="css/lib/font-awesome/font-awesome.min.css">
	<link rel="stylesheet" href="css/separate/vendor/bootstrap-touchspin.min.css">
    <link rel="stylesheet" href="css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="css/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body class="with-side-menu">
<?php require_once "inc/header.php" ;?>

	<div class="mobile-menu-left-overlay"></div>
	<?php require_once "inc/sidebar.php" ;?>

<div class="page-content">
		<div class="container-fluid">
			<section class="card">
				<div class="card-block">
					<?php
						$query2 = $con->query("SELECT * FROM job WHERE job_id='$job_id'");
						$query = $query2->fetch_assoc();
						$catagory = $query['catagory'];
						if($catagory == "Data Entry")
						{
					?>
						
					<div class="row">
						<form method="POST">
							<?php include "injection/job_question.php";?>
							<div class="col-md-10">
									<fieldset class="form-group">
										<label class="form-label">Question</label>
										<p><?php echo $query[question];?></p>
									</fieldset>
									<fieldset class="form-group">
										<label class="form-label">Answer</label>
										<input type="text" name="answer" class="form-control" id="inputPassword" placeholder="">
									</fieldset>
									<fieldset class="form-group">
										<button type="submit" name="submit" class="btn btn-rounded btn-success sign-up">Submit</button>
									</fieldset>
							</div>
						</form>
					</div><!--.row-->
					<?php
						}
						else if($catagory == "Youtube")
						{
					?>
						<h3>
						<a target="_blank" href="<?php echo "injection/click.php?job_id=$query[job_id]&member_id=$member_id" ;?>" onclick="location.href='jobs_red.php';">Click Here</a> To Watch the video
						</h3>
					<?php
						}
						else if($catagory == "Facebook")
						{
					?>
						<h3><a target="_blank" href="<?php echo "injection/click.php?job_id=$query[job_id]&member_id=$member_id" ;?>" onclick="location.href='jobs_red.php';">Click Here</a> To Like the Facebook Page/Post</h3>
					<?php
						}
						else
						{
							echo "<h3>Yet to Publish</h3>";
						}
					?>
				</div>	
			</section>
		</div><!--.container-fluid-->
	</div><!--.page-content-->

	<script src="js/lib/jquery/jquery.min.js"></script>
	<script src="js/lib/tether/tether.min.js"></script>
	<script src="js/lib/bootstrap/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script>

	<script src="js/lib/html5-form-validation/jquery.validation.min.js"></script>
	<script>
		$(function() {
			/* ==========================================================================
			 Validation
			 ========================================================================== */

			$('#form-signin_v1').validate({
				submit: {
					settings: {
						inputContainer: '.form-group'
					}
				}
			});

			$('#form-signin_v2').validate({
				submit: {
					settings: {
						inputContainer: '.form-group',
						errorListClass: 'form-error-text-block',
						display: 'block',
						insertion: 'prepend'
					}
				}
			});

			$('#form-signup_v1').validate({
				submit: {
					settings: {
						inputContainer: '.form-group',
						errorListClass: 'form-tooltip-error'
					}
				}
			});

			$('#form-signup_v2').validate({
				submit: {
					settings: {
						inputContainer: '.form-group',
						errorListClass: 'form-tooltip-error'
					}
				}
			});
		});
	</script>

<script src="js/app.js"></script>
</body>
</html>
<?php
}
else
{
header("location: jobs.php");
}
?>