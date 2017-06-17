<?php
session_start();
require_once ('db.php"');
if($_SESSION['name'])
{
	$user = $_SESSION['name'];
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>StartUI - Premium Bootstrap 4 Admin Dashboard Template</title>

    <link href="img/favicon.144x144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
    <link href="img/favicon.114x114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
    <link href="img/favicon.72x72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
    <link href="img/favicon.57x57.png" rel="apple-touch-icon" type="image/png">
    <link href="img/favicon.png" rel="icon" type="image/png">
    <link href="img/favicon.ico" rel="shortcut icon">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="css/separate/vendor/slick.min.css">
    <link rel="stylesheet" href="css/separate/pages/profile.min.css">
    <link rel="stylesheet" href="css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="css/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body class="with-side-menu">

<?php require_once "inc/header.php";?>

	<div class="mobile-menu-left-overlay"></div>
	<?php require_once "inc/sidebar.php" ;?>


	<div class="page-content">
        <div class="container-fluid">
            <header class="section-header">
                <div class="tbl">
                    <div class="tbl-row">
                        <div class="tbl-cell">
                            <h3>Profile Settings</h3>
                            <ol class="breadcrumb breadcrumb-simple">
                                <li><a href="#">Profile</a></li>
                                <li class="active">Change Password</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </header>
            <section class="card">
                <div class="card-block">
                    <div class="row">
                        <div class="col-md-6">
                            <form id="form-signup_v1" method="POST">

                                <?php include "injection/change_password.php";?>


                                <div class="form-group">
                                    <label class="form-label" for="signup_v1-password">Old Password</label>
                                    <div class="form-control-wrapper">
                                        <input id="password-register" required  class="form-control" name="o_pass" type="password" data-validation="[L>=16]" data-validation-message="$ must be at least 6 characters">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="signup_v1-password">New Password</label>
                                    <div class="form-control-wrapper">
                                        <input  id="reap_password-register" required class="form-control" name="n_pass" type="password" data-validation="[L>=16]" data-validation-message="$ must be at least 6 characters">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="signup_v1-password-confirm">Confirm Password</label>
                                    <div class="form-control-wrapper">
                                        <input id="password-register"  required  class="form-control"  name="c_pass" type="password" data-validation="[V==signup_v1[password]]" data-validation-message="$ does not match the password">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn">Save</button>
                                </div>
                            </form>
                        </div>
                </div>
            </section>


    </div><!--.row-->

		</div><!--.container-fluid-->
	</div><!--.page-content-->


<script src="js/lib/jquery/jquery.min.js"></script>
<script src="js/lib/tether/tether.min.js"></script>
<script src="js/lib/bootstrap/bootstrap.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/lib/slick-carousel/slick.min.js"></script>
// image PreviewImage
<script type="text/javascript">

    function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
    };
</script>


<script>
    $(function () {
        $(".profile-card-slider").slick({
            slidesToShow: 1,
            adaptiveHeight: true,
            prevArrow: '<i class="slick-arrow font-icon-arrow-left"></i>',
            nextArrow: '<i class="slick-arrow font-icon-arrow-right"></i>'
        });

        var postsSlider = $(".posts-slider");

        postsSlider.slick({
            slidesToShow: 4,
            adaptiveHeight: true,
            arrows: false,
            responsive: [
                {
                    breakpoint: 1700,
                    settings: {
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 1350,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 500,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });

        $('.posts-slider-prev').click(function(){
            postsSlider.slick('slickPrev');
        });

        $('.posts-slider-next').click(function(){
            postsSlider.slick('slickNext');
        });

        /* ==========================================================================
         Recomendations slider
         ========================================================================== */

        var recomendationsSlider = $(".recomendations-slider");

        recomendationsSlider.slick({
            slidesToShow: 4,
            adaptiveHeight: true,
            arrows: false,
            responsive: [
                {
                    breakpoint: 1700,
                    settings: {
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 1350,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 500,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });

        $('.recomendations-slider-prev').click(function() {
            recomendationsSlider.slick('slickPrev');
        });

        $('.recomendations-slider-next').click(function(){
            recomendationsSlider.slick('slickNext');
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
header("location: ../auth.php");
}
?>