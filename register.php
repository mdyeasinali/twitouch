<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
		<meta charset="utf-8">
		<title>TwiTouch | Register</title>
		<meta name="description" content="">
		<meta name="author" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/base.css">
		<link rel="stylesheet" type="text/css" href="css/mmenu.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
		<link rel="stylesheet" type="text/css" href="css/magnific.css">
		<link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">

		<link rel="shortcut icon" href="#">
		<link rel="apple-touch-icon" href="#">
		<link rel="apple-touch-icon" sizes="72x72" href="#">
		<link rel="apple-touch-icon" sizes="114x114" href="#">
	</head>
	<body>

		<div id="page">
			<?php include "inc/header.php";?>
			<div class="page-hero" style="background-image: url(images/hero-1.jpg);">
				<div class="container">
					<div class="row">
						<div class="col-xl-10 offset-xl-1 col-lg-10 offset-lg-1 col-xs-12">
							<div class="page-hero-content">
								<h1 class="page-title">Register Account</h1>
							</div>
						</div>
					</div>
				</div>
			</div>

			<main class="main main-elevated">
				<div class="container">
					<div class="row">
						<div class="col-xl-10 offset-xl-1 col-lg-10 offset-lg-1 col-xs-12">
							<div class="content-wrap">
							
							<!-- 
								Success or Failed Msg will be placed here
							-->
							
								<div class="row">
                                    <div class="col-lg-6 col-xs-12">
                                        <form class="form-register" method="POST">
                                            <?php include "register_help.php";?>
                                            <h3>Sign Up</h3>

                                            <div class="form-field">
                                                <label for="name-register">Name</label>
                                                <input type="text" name="name" id="name-register" required>
                                            </div>

                                            <div class="form-field">
                                                <label for="username-register">Username</label>
                                                <input type="text" name="username" id="username-register" required>
                                            </div>

                                            <div class="form-field">
                                                <label for="password-register">Password</label>
                                                <input type="password" name="password" id="password-register" pattern=".{10,}" required title="10 characters minimum">
                                            </div>

                                            <div class="form-field">
                                                <label for="reap_password-register">Repeat Password</label>
                                                <input type="password" name="password2" id="reap_password-register" pattern=".{10,}" required title="10 characters minimum">
                                            </div>

                                            <div class="form-field">
                                                <label for="email-register">E-mail</label>
                                                <input type="email" name="email" id="email-register" required>
                                            </div>
                                            <div class="form-field">
                                                <label for="mobile-number">Mobile Number</label>
                                                <input type="text" name="mobile" id="mobile-number" required>
                                            </div>
                                            <div class="form-field">
                                                <label for="address">Address</label>
                                                <textarea type="text" name="address" id="address" rows="4" required></textarea>
                                            </div>
                                            <div class="form-field">
                                                <label for="ref_id">Reference ID</label>
                                                <input type="text" id="ref_id" name="ref_id" required>
                                            </div>

                                            <div class="form-field">
                                                <input type="submit" class="btn" name="register" value="Register">
                                            </div>
                                        </form>
                                    </div>
                                </div>
							</div>
						</div>
					</div>
				</div>
			</main>
	<?php include "inc/footer.php";?>
		</div>
		<!-- #page -->

		<script src="js/jquery-1.12.3.min.js"></script>
		<script src="js/jquery.mmenu.min.all.js"></script>
		<script src="js/jquery.fitvids.js"></script>
		<script src="js/jquery.magnific-popup.js"></script>
		<script src="js/jquery.matchHeight.js"></script>
		<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
		<script src="js/scripts.js"></script>

	</body>

</html>