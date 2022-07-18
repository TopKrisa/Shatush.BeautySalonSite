<?php
session_start();

use App\Services\Router;

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>SHATUSH | Главная</title>
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
	require_once 'assets/static/header.php'; ?>
	<!-- Header section end-->

	<!-- Hero section -->

	<section class="hero-section" style="z-index: 2S;">
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg" data-setbg="assets/images/slider/1.jpg">
				<div class="container">
					<h2>Мы умеем делать стиль</h2>
					<!-- <a href="/portfolio" class="site-btn">Подробнее <i class="fa fa-angle-double-right"></i></a> -->
				</div>
				<div class="next-hs set-bg" data-setbg="assets/images/slider/2.jpg">
					<!-- <a href="" class="nest-hs-btn">Далее</a> -->
				</div>
			</div>
			<div class="hs-item set-bg" data-setbg="assets/images/slider/2.jpg">
				<div class="container">
					<h2>Стиль это навсегда</h2>
					<!-- <a href="/portfolio" class="site-btn">Подробнее <i class="fa fa-angle-double-right"></i></a> -->
				</div>
				<div class="next-hs set-bg" data-setbg="assets/images/slider/1.jpg">
					<!-- <a href="" class="nest-hs-btn">Далее</a> -->
				</div>
			</div>
		</div>
		<? require_once 'assets/static/Social.php'; ?>
	</section>
	<!-- Hero section end-->

	<!-- Intro section -->
	<section class="intro-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<img src="assets/images/intro-img.jpg" alt="">
				</div>
				<div class="col-lg-7 intro-text">
					<span>Мы создаем красоту и успех</span>
					<h2>"I firmly believe that with the right footwear one can rule the world."</h2>
					<p>Aenean quis velit pulvinar, pellentesque neque vel, laoreet orci. Suspendisse potenti. Donec congue vel justo eget malesuada. In arcu justo, sagittis consequat pulvinar quis, pretium quis massa. Vestibulum nec nibh eu nisi rutrum iaculis. Pellentesque placerat sit amet leo in vestibu-lum. Suspendisse quam neque, rutrum vel scelerisque eu</p>
					<!-- <a href="#" class="site-btn sb-dark">Подробнее <i class="fa fa-angle-double-right"></i></a> -->
				</div>
			</div>
		</div>
	</section>
	<!-- Intro section end-->

	<!-- Portfolio section -->
	<section class="portfolio-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-7">
					<a href="/portfolio" class="portfolio-item">
						<img src="assets/images/portfolio-home/1.jpg" alt="">
						<h4>Больше</h4>
					</a>
				</div>
				<div class="col-lg-3 col-md-5">
					<a href="/portfolio" class="portfolio-item">
						<img src="assets/images/portfolio-home/2.jpg" alt="">
						<h4>Больше</h4>
					</a>
				</div>
				<div class="col-lg-5 col-md-12">
					<a href="/portfolio" class="portfolio-item">
						<img src="assets/images/portfolio-home/3.jpg" alt="">
						<h4>Больше</h4>
					</a>
				</div>
				<div class="col-lg-6 col-md-12">
					<a href="/portfolio" class="portfolio-item">
						<img src="assets/images/portfolio-home/4.jpg" alt="">
						<h4>Больше</h4>
					</a>
				</div>
				<div class="col-lg-3 col-sm-6">
					<a href="/portfolio" class="portfolio-item">
						<img src="assets/images/portfolio-home/5.jpg" alt="">
						<h4>Больше</h4>
					</a>
					<a href="/portfolio" class="portfolio-item">
						<img src="assets/images/portfolio-home/7.jpg" alt="">
						<h4>Больше</h4>
					</a>
				</div>
				<div class="col-lg-3 col-sm-6">
					<a href="/portfolio" class="portfolio-item">
						<img src="assets/images/portfolio-home/6.jpg" alt="">
						<h4>Больше</h4>
					</a>
					<a href="/portfolio" class="portfolio-item">
						<img src="assets/images/portfolio-home/8.jpg" alt="">
						<h4>Больше</h4>
					</a>
				</div>
				<div class="col-lg-3 col-sm-6">
					<a href="/portfolio" class="portfolio-item">
						<img src="assets/images/portfolio-home/9.jpg" alt="">
						<h4>Больше</h4>
					</a>
				</div>
				<div class="col-lg-3 col-sm-6">
					<a href="/portfolio" class="portfolio-item">
						<img src="assets/images/portfolio-home/10.jpg" alt="">
						<h4>Больше</h4>
					</a>
					<a href="/portfolio" class="portfolio-item">
						<img src="assets/images/portfolio-home/11.jpg" alt="">
						<h4>Больше</h4>
					</a>
				</div>
				<div class="col-lg-6 col-md-12">
					<a href="/portfolio" class="portfolio-item">
						<img src="assets/images/portfolio-home/12.jpg" alt="">
						<h4>Больше</h4>
					</a>
				</div>
			</div>
		</div>
	</section>
	<!-- Portfolio section end -->

	<!-- Blog section -->
	<!-- <section class="blog-section spad">
		<div class="container">
			<div class="blog-slider owl-carousel">
				<div class="blog-item">
					<div class="blog-thumb set-bg" data-setbg="assets/images/blog/1.jpg">
						<div class="blog-date">
							<h2>20</h2>
							<p>Янв.</p>
						</div>
					</div>
					<div class="blog-head">
						<div class="blog-tags">fashion, event, lifestyle</div>
						<h2><a href="single-blog.html">Our fashion App</a></h2>
					</div>
					<p>Aenean quis velit pulvinar, pellentesque neque vel, laoreet orci. Suspendisse po-tenti. Donec congue vel justo eget malesuada. In arcu justo, sagittis consequat pulvinar quis, pretium quis massa. Vestibulum nec nibh eu nisi rutrum iaculis. Pellentesque placerat sit amet leo in vestibulum. Suspendisse quam neque, rutrum vel scelerisque eu.</p>
				</div>
				<div class="blog-item">
					<div class="blog-thumb set-bg" data-setbg="assets/images/blog/2.jpg">
						<div class="blog-date">
							<h2>20</h2>
							<p>Jan</p>
						</div>
					</div>
					<div class="blog-head">
						<div class="blog-tags">fashion, event, lifestyle</div>
						<h2><a href="single-blog.html">Our fashion App</a></h2>
					</div>
					<p>Aenean quis velit pulvinar, pellentesque neque vel, laoreet orci. Suspendisse po-tenti. Donec congue vel justo eget malesuada. In arcu justo, sagittis consequat pulvinar quis, pretium quis massa. Vestibulum nec nibh eu nisi rutrum iaculis. Pellentesque placerat sit amet leo in vestibulum. Suspendisse quam neque, rutrum vel scelerisque eu.</p>
				</div>
				<div class="blog-item">
					<div class="blog-thumb set-bg" data-setbg="assets/images/blog/3.jpg">
						<div class="blog-date">
							<h2>20</h2>
							<p>Jan</p>
						</div>
					</div>
					<div class="blog-head">
						<div class="blog-tags">fashion, event, lifestyle</div>
						<h2><a href="single-blog.html">Our fashion App</a></h2>
					</div>
					<p>Aenean quis velit pulvinar, pellentesque neque vel, laoreet orci. Suspendisse po-tenti. Donec congue vel justo eget malesuada. In arcu justo, sagittis consequat pulvinar quis, pretium quis massa. Vestibulum nec nibh eu nisi rutrum iaculis. Pellentesque placerat sit amet leo in vestibulum. Suspendisse quam neque, rutrum vel scelerisque eu.</p>
				</div>
			</div>
		</div>
	</section> -->
	<!-- Blog section end-->

	<!-- Back to top -->

	<!-- Footer section -->
	<? require_once "assets/static/footer.php" ?>
	<!-- Footer section end -->


	<!--====== Javascripts & Jquery ======-->


</body>

</html>