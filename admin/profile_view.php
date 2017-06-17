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
        <div class="row">
            <div class="card box-typical-full-height">
                <section class="box-typical">
                    <div class="profile-card">
                        <div class="profile-card-photo">
                            <img src="img/photo-220-1.jpg" alt=""/>
                        </div>
                        <div class="profile-card-name"><?php  echo $user;?></div>
                        <div class="profile-card-status">Company Founder</div>
                        <div class="profile-card-location">Greater Seattle Area</div>
                        <button type="button" class="btn btn-rounded">Follow</button>
                        <div class="btn-group">
                            <button type="button"
                                    class="btn btn-rounded btn-primary-outline dropdown-toggle"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false">
                                Connect
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-home"></span>Quant and Verbal</a>
                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-cart"></span>Real Gmat Test</a>
                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-speed"></span>Prep Official App</a>
                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-users"></span>CATprer Test</a>
                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-comments"></span>Third Party Test</a>
                            </div>
                        </div>
                    </div><!--.profile-card-->

                    <div class="profile-statistic tbl">
                        <div class="tbl-row">
                            <div class="tbl-cell">
                                <b>200</b>
                                Connections
                            </div>
                            <div class="tbl-cell">
                                <b>1.9M</b>
                                Followers
                            </div>
                        </div>
                    </div>

                    <ul class="profile-links-list">
                        <li class="nowrap">
                            <i class="font-icon font-icon-earth-bordered"></i>
                            <a href="#">example.com</a>
                        </li>
                        <li class="nowrap">
                            <i class="font-icon font-icon-fb-fill"></i>
                            <a href="#">facebook.com/example</a>
                        </li>
                        <li class="nowrap">
                            <i class="font-icon font-icon-vk-fill"></i>
                            <a href="#">vk.com/example</a>
                        </li>
                        <li class="nowrap">
                            <i class="font-icon font-icon-in-fill"></i>
                            <a href="#">linked.in/example</a>
                        </li>
                        <li class="nowrap">
                            <i class="font-icon font-icon-tw-fill"></i>
                            <a href="#">twitter.com/example</a>
                        </li>
                        <li class="divider"></li>
                    </ul>
                </section><!--.box-typical-->



                <section class="box-typical">
                    <header class="box-typical-header-sm bordered">About</header>
                    <div class="box-typical-inner">
                        <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Vestibulum id ligula porta felis euismod semper.</p>
                    </div>

                </section><!--.box-typical-->
            </div><!--.col- -->









        </div><!--.col- -->


    </div><!--.row-->

		</div><!--.container-fluid-->
	</div><!--.page-content-->


<script src="js/lib/jquery/jquery.min.js"></script>
<script src="js/lib/tether/tether.min.js"></script>
<script src="js/lib/bootstrap/bootstrap.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/lib/slick-carousel/slick.min.js"></script>
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