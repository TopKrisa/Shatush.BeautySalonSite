<?php
session_start();

use App\Services\Router;


?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>SHATUSH | Портфолио</title>
	<meta charset="UTF-8">
	<meta name="description" content="Instyle Fashion HTML Template">
	<meta name="keywords" content="instyle, fashion, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="/assets/images/favicon.ico" rel="shortcut icon" />

	<!-- Stylesheets -->
	<link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="/assets/css/font-awesome.min.css" />
	<link rel="stylesheet" href="/assets/css/owl.carousel.min.css" />

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="/assets/css/stylesheet.css">
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>
	<!-- Page Preloder -->
	<?php
	require_once 'assets/static/header.php';
	?>

	<!-- Header section -->

	<!-- Header section end-->

	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="assets/images/header-bg/3.jpg">
		<h2>Портфолио</h2>
		<? require_once 'assets/static/Social.php'; ?>
	</section>
	<!-- Page top section end-->
	<style>
		#BigPhoto {
			display: block;
			margin: auto;
			margin-bottom: 30px;
		}
	</style>
	<!-- Portfolio page -->
	<div class="portfolio-page">
		<ul class="portfolio-cata">
			<li class="active"><a>Работы специалистов</a></li>


		</ul>
		<img src="assets/images/1.jpg" alt="" id="BigPhoto" class="portfolio-big-img">
		<!-- Related portfolio slider -->
		<div class="portfolio-slider owl-carousel">
			<?


			$photos = \R::getAll("SELECT * FROM `photos`");
			foreach ($photos as $photo) {
				echo '<a class="btns"><img style="height: 145px; width: 145px; object-fit: cover;" class="SmallPhoto" src="' . $photo["path"] . '" alt=""></a>';
			}

			?>
		</div>
	</div>
	<!-- Portfolio page end-->

	<!-- Back to top -->

	<!-- Footer section -->
	<? require_once "assets/static/footer.php" ?>
	<!-- Footer section end -->
	<script>
		const Photos = document.getElementsByClassName("SmallPhoto");
		const Preview = document.getElementById("BigPhoto");
		const Buttons = document.getElementsByClassName("btns");

		for (let i = 0; i <= Photos.length; i++) {
			var btn = new Photo(Photos[i].currentSrc, Buttons[i])

		}

		function Photo(source, button) {

			this.source = source;
			this.button = button;
			button.onclick = function(e) {

				Preview.src = source;
			}
		}
	</script>

	<!--====== Javascripts & Jquery ======-->
</body>

</html>