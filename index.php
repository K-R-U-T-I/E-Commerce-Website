<?php
	include('include/conn.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>KT coMpaNY</title>
	<meta name="author" content="SEIKO">
	<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="favicon.ico">
	<link href="css/font-awesome.css" rel="stylesheet" type="text/css">

	<!-- Vendor -->
	<link href="js/vendor/bootstrap/bootstrap.min.css" rel="stylesheet">
	<link href="js/vendor/slick/slick.css" rel="stylesheet">
	<link href="js/vendor/swiper/swiper.min.css" rel="stylesheet">
	<link href="js/vendor/magnificpopup/dist/magnific-popup.css" rel="stylesheet">
	<link href="js/vendor/nouislider/nouislider.css" rel="stylesheet">
	<link href="js/vendor/darktooltip/dist/darktooltip.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">


	<!-- Custom -->
	<link href="css/style.css" rel="stylesheet">
	<link href="css/megamenu.css" rel="stylesheet">
	<link href="css/tools.css" rel="stylesheet">

	<!-- Color Schemes -->
	<link href="css/style-color-pink.css" rel="stylesheet">
	<link href="css/style-color-green.css" rel="stylesheet">
	<link href="css/style-color-lightgreen.css" rel="stylesheet">
	<link href="css/style-color-blue.css" rel="stylesheet">
	<link href="css/style-color-lightblue.css" rel="stylesheet">
	<link href="css/style-color-violet.css" rel="stylesheet">
	<link href="css/style-color-tomato.css" rel="stylesheet">
	<link href="css/style-color-caribbean.css" rel="stylesheet">
	<link href="css/style-color-orange.css" rel="stylesheet">

	<!-- Icon Font -->
	<link href="fonts/icomoon-reg/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700|Raleway:100,100i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Roboto:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
	<script>
		(function (i, s, o, g, r, a, m) {
			i['GoogleAnalyticsObject'] = r;
			i[r] = i[r] || function () {
				(i[r].q = i[r].q || []).push(arguments)
			}, i[r].l = 1 * new Date();
			a = s.createElement(o),
				m = s.getElementsByTagName(o)[0];
			a.async = 1;
			a.src = g;
			m.parentNode.insertBefore(a, m)
		})(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

		ga('create', 'UA-88345127-1', 'auto');
		ga('send', 'pageview');
	</script>
</head>

<body class="fullwidth">
<!-- 
<body>
 -->	
	<!--================ Header Area =================-->
        <?php include('template/header.php'); ?>

	<!--================ Banner Area =================-->
	        <!-- <?php// include('template/banner.php'); ?> -->


  <?php
        @$page = $_REQUEST['page'];

        if ($page=='' && basename($_SERVER['PHP_SELF'])=='index.php') {
            $page = 'home';
        }
        if ($page!='' && file_exists('middle_page/'.$page.'.php')) {
            include('middle_page/'.$page.'.php');
        }
        else{
            include('middle_page/404.php');
        }

?>        
        <!--================Footer Area =================-->
        <?php include('template/footer.php'); ?>        

</body>
	<!-- jQuery Scripts  -->
	<script src="js/vendor/jquery/jquery.js"></script>
	<script src="js/vendor/bootstrap/bootstrap.min.js"></script>
	<script src="js/vendor/swiper/swiper.min.js"></script>
	<script src="js/vendor/slick/slick.min.js"></script>
	<script src="js/vendor/parallax/parallax.js"></script>
	<script src="js/vendor/isotope/isotope.pkgd.min.js"></script>
	<script src="js/vendor/magnificpopup/dist/jquery.magnific-popup.js"></script>
	<script src="js/vendor/countdown/jquery.countdown.min.js"></script>
	<script src="js/vendor/nouislider/nouislider.min.js"></script>
	<script src="js/vendor/ez-plus/jquery.ez-plus.js"></script>
	<script src="js/vendor/tocca/tocca.min.js"></script>
	<script src="js/vendor/bootstrap-tabcollapse/bootstrap-tabcollapse.js"></script>
	<script src="js/vendor/scrollLock/jquery-scrollLock.min.js"></script>
	<script src="js/vendor/darktooltip/dist/jquery.darktooltip.js"></script>
	<script src="js/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
	<script src="js/vendor/instafeed/instafeed.min.js"></script>
	<script src="js/megamenu.min.js"></script>
	<script src="js/tools.min.js"></script>
	<script src="js/app.js"></script>
	<script src="js/validation.js"></script>

</body>

</html>
