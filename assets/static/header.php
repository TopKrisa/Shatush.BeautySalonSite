<?php session_start()

?>
<link href="/assets/images/favicon.ico" rel="shortcut icon" />

<!-- Stylesheets -->
<link rel="stylesheet" href="../css/bootstrap.min.css" />
<link rel="stylesheet" href="../css/font-awesome.min.css" />
<link rel="stylesheet" href="../css/owl.carousel.min.css" />

<!-- Main Stylesheets -->
<link rel="stylesheet" href="../css/stylesheet.css">

<div id="preloder">
	<div class="loader"></div>
</div>

<!-- Header section -->
<header class="header-section">
	<nav class="navbar navbar-expand-md navbar-dark bg-dark site-navbar">
		<a class="navbar-brand site-logo" href="/">
			<h2><span>SHA</span>TUSH</h2>
			<p>Fashion Forward</p>
		</a>
		<button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="collapsibleNavId">
			<!-- Main menu -->
			<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
				<li class="nav-item">
					<a class="nav-link" href="/">Главная</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/about">О нас</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/portfolio">Портфолио</a>
				</li>
				<!-- <li class="nav-item">
						<a class="nav-link" href="blog.html">blog</a>
					</li> -->
				<li class="nav-item">
					<a class="nav-link" href="/cantacts">Контакты</a>
				</li>
				<?php
				$user = $_SESSION["User"];
				if ($_SESSION["User"]) {
					echo '<li><a class="nav-link clos" href="/profile">Профиль</a></li>
					
					
					
					<li>
					<form action="/auth/logout" method="post">
					<a class="nav-link" href=" /logout"><button class="nav-link clos">Выйти</button></a>
					</form>
					</li>
					';
				}
				?>

			</ul>
			<div class="">
				<?php

				if (!$_SESSION["User"]) {
					echo  '<a href="/login" class="btn">Войти</a>';
				} else {
					$user = $_SESSION["User"];
					//echo $user["path"];
					echo '<article class="item">
						<div class="photo" id="profileToggle">
						  <a href="#" class="uri">
								<img class="personPhoto" alt="" src="' . $user["path"] . '">
						  </a>
						</div>
					  </article>';
				}

				?>
			</div>
		</div>
	</nav>
</header>
<div class="popup cls" id="pop">
	<ul>
		<?php
		$user = $_SESSION["User"];
		echo '<li><a class="ass" href="/profile">Профиль</a></li>';


		?>

		<li>
			<form action="/auth/logout" method="post">
				<a class="ass" href="/logout"><button>Выйти</button></a>
			</form>
		</li>
	</ul>
</div>



<style>
	.clos {
		display: none;
	}

	button {
		border: none;
		background: none;
	}

	.popup li .ass {
		text-align: center;
		align-items: center;
		width: 100%;
		vertical-align: middle;
		color: #262626;
		transition: all 0.4s ease;
	}

	.popup li:hover {
		color: #ff006c;
	}

	.popup li {
		list-style: none;
		text-align: center;
		padding: 5px;
	}

	.popup ul {
		width: 100%;
		display: flex;
		flex-wrap: wrap;
		justify-content: center;
	}

	.popup ul li {
		list-style: none;
		width: 100%;
		vertical-align: middle;
	}

	.popup {
		border-radius: 3px;
		position: absolute;
		top: 10.5%;
		left: 93%;
		width: 100px;
		height: 70px;
		background: rgba(255, 255, 255, 0.5);
		z-index: 999999;
		transition: 0.4s ease;

	}

	.cls {

		display: none;
	}

	.uri {
		cursor: pointer;
	}

	.item {
		margin-left: 30px;
		margin-right: -20px;
	}

	.photo {
		width: 50px;
		height: 50px;
		margin: 0;
		overflow: hidden;
		border-radius: 50%;

	}


	.personPhoto {
		width: auto;
		height: 100%;
		margin: 0 auto;
		object-fit: cover;
	}

	@media screen and (max-width: 425px) {
		.photo {
			display: none;
		}

		.popup {
			display: none;
		}

		.clos {
			display: inline;
		}
	}

	@media screen and (max-width: 768px) and (min-width: 500px) {

		.item {
			margin: 0;
		}

		.popup {
			position: static;
			margin: 0 auto;
			background-color: #262626;
			width: 100%;
			border-radius: 0;
			transition: all 0.3ms ease;
		}

		.popup li .ass {
			color: #fff;
		}

		.popup li .ass:hover {
			color: #ff006c;
		}

		.popup li form .ass button {
			color: #fff;
		}

		.popup li form .ass button:hover {
			color: #ff006c;
		}

		.cls {
			display: none;
		}

		.photo {
			display: flex;
			margin: 0 auto;

		}
	}

	@media only screen and (min-width: 992px) and (max-width: 1199px) {

		.popup {
			left: 90%;
		}
	}
</style>
<!-- <a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a> -->
<!-- <i class="fa fa-vk" aria-hidden="true"></i> -->
</div>
</div>
</nav>
</header>

<script>
	let button = document.getElementById("profileToggle");
	button.addEventListener('click', function() {

		document.querySelector('#pop').classList.toggle('cls');
	});
</script>