<?php
session_start();

use App\Services\Router;


?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>SHATUSH | Контакты</title>
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


	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="assets/images/header-bg/4.jpg">
		<h2>Контакты</h2>
		<? require_once 'assets/static/Social.php'; ?>
	</section>
	<!-- Page top section end-->

	<style>
		.modals {
			background-color: rgba(0, 0, 0, 0.3);
			position: fixed;
			top: 0;
			left: 0;
			display: none;
			width: 100%;
			height: 100%;
			z-index: 999999;
			transition: all 0.8s ease 0s;
		}

		.modal_contens_actions {

			border-radius: 5px;
			position: fixed;
			top: 50%;
			background: #fff;
			left: 50%;
			transform: translate(-50%, -50%);
			width: 300px;
			height: 150px;
			padding: 10px;
			z-index: 9999999999;
			display: flex;
		}

		.thanks {
			margin: auto;
			font-size: 21px;
			font-weight: 500;
		}
	</style>

	<!-- Contact page -->
	<section class="page-warp contact-page">

		<div class="modals" id="ThanksForMessage">
			<div class="modal_contens_actions">
				<button type="button" class="close" data-dismiss="modals" id="cls" style="position:fixed; right: 0; top:0; margin: 10px;" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<div class="thanks">
					Спасибо за сообщение
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="section-title">
						<span>мода, события, стиль жизни</span>
						<h2>Связаться</h2>
					</div>
					<form class="comment-form" id="form">
						<div class="row">
							<div class="col-md-6">
								<input type="text" placeholder="Ваше Имя" name="name" id="name" include>
							</div>
							<div class="col-md-6">
								<input type="tel" placeholder="Ваш телефон" name="phone" id="phone" class="art-stranger" include>
							</div>
							<div class="col-md-12">
								<select class="form-control" type="text" style="margin-bottom: 1rem; border: 3px solid #e3e3e3; border-radius: 0px;" id="theme" name="theme">
									<option value="0">Выберите услугу</option>
									<?php
									$categories =  \R::getAll("SELECT c.id, c.name, u.name as 'worker' FROM `categories` c, users u where c.worker = u.id;");
									foreach ($categories as $category) {
										echo '<option value="' . $category["id"] . '">' . $category["name"] . ' - ' . $category["worker"] . '</option>';
									}
									?>
								</select>
								<textarea placeholder="Message" include name="message" id="message"></textarea>
								<button class="site-btn sb-dark">Отправить <i class="fa fa-angle-double-right"></i></button>
							</div>
						</div>
					</form>
				</div>
				<div class="col-lg-4">
					<div class="map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2453.9115463133758!2d113.50946333531702!3d52.04492391488405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5dca35e242d79ae5%3A0xb24e0f62c72c9ed0!2z0KjQsNGC0YPRiA!5e0!3m2!1sru!2sru!4v1656983283992!5m2!1sru!2sru" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
					<div class="contact-text">
						<p>Aenean quis velit pulvinar, pellentesque neque vel, laoreet orci. Suspendisse potenti. Donec congue vel justo eget malesuada. In arcu justo, sagittis consequat pulvinar quis, pretium quis massa. </p>
						<ul>
							<li>Main Str, no 23, New York</li>
							<li>+546 990221 123</li>
							<li>fashion@contact.com</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Contact page end-->



	<!-- Footer section -->
	<?php
	require_once "assets/static/footer.php";
	?>
	<!-- Footer section end -->
	<script src="assets/js/InputMask.js"></script>
	<script>
		$('.art-stranger').mask('+7(999)999-99-99');

		$.fn.setCursorPosition = function(pos) {
			if ($(this).get(0).setSelectionRange) {
				$(this).get(0).setSelectionRange(pos, pos);
			} else if ($(this).get(0).createTextRange) {
				var range = $(this).get(0).createTextRange();
				range.collapse(true);
				range.moveEnd('character', pos);
				range.moveStart('character', pos);
				range.select();
			}
		};


		$('input[type="tel"]').click(function() {
			$(this).setCursorPosition(4); // set position number
		});
	</script>
	<script>
		$('.site-btn').click(function(e) {
			e.preventDefault();
			const modal = document.getElementById('ThanksForMessage');
			let name = $('input[name="name"]').val(),
				phone = $('input[name="phone"]').val(),
				theme = $('#theme').val(),
				message = $('input[name="message"]').val();
			$.ajax({
				url: '/message',
				type: 'POST',
				datatype: 'json',
				data: {
					name: name,
					phone: phone,
					theme: theme,
					message: message
				},
				success: function(response) {

					const data = JSON.parse(response);
					console.log('data', data)
					if (data.status == 1) {
						modal.style.display = "block";

					} else {



					}

				}
			});
		});

		const modal = document.getElementById('ThanksForMessage');
		const clsBtn = document.getElementById('cls');
		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none"
			}

		}
		clsBtn.onclick = function() {
			modal.style.display = "none"
		}
	</script>
</body>

</html>