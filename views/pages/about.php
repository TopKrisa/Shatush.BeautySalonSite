<?php
session_start();

use App\Services\Router;


?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>SHATUSH | О нас</title>
	<meta charset="UTF-8">
	<meta name="description" content="Instyle Fashion HTML Template">
	<meta name="keywords" content="instyle, fashion, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="/assets/images/favicon.ico" rel="shortcut icon" />

	<!-- Stylesheets -->
	<link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="/assets/css/font-awesome.min.css" />
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css" />

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
	require_once 'assets/static/header.php'; ?>
	<!-- Header section end-->

	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="assets/images/header-bg/1.jpg">
		<h2>О нас</h2>
		<? require_once 'assets/static/Social.php'; ?>
	</section>
	<!-- Page top section end-->

	<!-- Intro section -->
	<section class="intro-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 order-2 order-lg-1 intro-text">
					<span>Мы создаем красоту и успех</span>
					<h2>"I firmly believe that with the right footwear one can rule the world."</h2>
					<p>Aenean quis velit pulvinar, pellentesque neque vel, laoreet orci. Suspendisse potenti. Donec congue vel justo eget malesuada. In arcu justo, sagittis consequat pulvinar quis, pretium quis massa. Vestibulum nec nibh eu nisi rutrum iaculis. Pellentesque placerat sit amet leo in vestibu-lum. Suspendisse quam neque, rutrum vel scelerisque eu</p>
					<a href="#" class="site-btn sb-dark">Read More <i class="fa fa-angle-double-right"></i></a>
				</div>
				<div class="col-lg-5 order-1 order-lg-2">
					<img src="assets/images/about-img.jpg" alt="">
				</div>
			</div>
		</div>
	</section>
	<!-- Intro section end-->

	<!-- Award section -->
	<section class="award-section spad">
		<div class="container">
			<div class="section-title text-center">
				<span>Aenean quis velit pulvinar,</span>
				<h2>Awards & Nominations</h2>
			</div>
			<div class="award-slider owl-carousel">
				<div class="award-box">
					<div class="award-year">2011</div>
					<h4>Fashion AWARDS</h4>
					<p>Suspendisse rhoncus turpis sed viverra molestie</p>
				</div>
				<div class="award-box">
					<div class="award-year">2012</div>
					<h4>Fashion magazine AWARDS</h4>
					<p>Suspendisse rhoncus turpis sed viverra molestie</p>
				</div>

			</div>
		</div>
	</section>
	<!-- Award section end-->

	<!-- Milestones section -->
	<section class="milestones-section set-bg" data-setbg="assets/images/milestones-bg.jpg">
		<div class="container">
			<div class="row text-white">
				<div class="col-lg-3 col-sm-6">
					<div class="milestone-item">
						<h2>14</h2>
						<p>Наград</p>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="milestone-item">
						<h2>500</h2>
						<p>Постоянных клиентов</p>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="milestone-item">
						<h2>3</h2>
						<p>Отличных специалиста</p>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="milestone-item">
						<h2>56</h2>
						<p>Номинаций</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Milestones section end-->

	<!-- Brand History section -->
	<section class="brand-history-section spad">
		<div class="container">
			<div class="section-title text-center">
				<span></span>
				<h2>История</h2>
			</div>
			<div class="row justify-content-md-center">
				<div class="col-lg-10">
					<div class="brand-history-item">
						<h2>2005</h2>
						<h4>Aenean quis velit pulvinar, pellentesque </h4>
						<p>Aenean quis velit pulvinar, pellentesque neque vel, laoreet orci. Suspendisse potenti. Donec congue vel justo eget malesuada. In arcu justo, sagittis consequat pulvinar quis, pretium quis massa. Vestibulum nec nibh eu nisi rutrum iaculis.</p>
					</div>
					<div class="brand-history-item">
						<h2>2008</h2>
						<h4>Suspendisse rhoncus turpis </h4>
						<p>Aenean quis velit pulvinar, pellentesque neque vel, laoreet orci. Suspendisse potenti. Donec congue vel justo eget malesuada. In arcu justo, sagittis consequat pulvinar quis, pretium quis massa. Vestibulum nec nibh eu nisi rutrum iaculis.</p>
					</div>
					<div class="brand-history-item">
						<h2>2008</h2>
						<h4>Suspendisse rhoncus turpis </h4>
						<p>Aenean quis velit pulvinar, pellentesque neque vel, laoreet orci. Suspendisse potenti. Donec congue vel justo eget malesuada. In arcu justo, sagittis consequat pulvinar quis, pretium quis massa. Vestibulum nec nibh eu nisi rutrum iaculis.</p>
					</div>
				</div>
			</div>

		</div>
	</section>
	<!-- Brand History section end-->


	<!-- Footer section -->
	<? require_once "assets/static/footer.php" ?>
	<!-- Footer section end -->


	<!--====== Javascripts & Jquery ======-->


</body>

</html>