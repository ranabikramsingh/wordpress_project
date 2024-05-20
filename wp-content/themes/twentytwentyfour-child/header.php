<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>Index - Append Bootstrap Template</title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="assets/img/favicon.png" rel="icon">
	<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com" rel="preconnect">
	<link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/aos/aos.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

	<!-- Main CSS File -->
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css" rel="stylesheet">

	<!-- =======================================================
  * Template Name: Append
  * Template URL: https://bootstrapmade.com/append-bootstrap-website-template/
  * Updated: May 10 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
	<?php wp_head(); ?>
</head>

<body class="index-page">

	<header id="header" class="header d-flex align-items-center fixed-top">
		<div class="container-fluid position-relative d-flex align-items-center justify-content-between">

			<a href="/wordpress-project" class="logo d-flex align-items-center me-auto me-xl-0">
				<!-- Uncomment the line below if you also wish to use an image logo -->
				<!-- <img src="assets/img/logo.png" alt=""> -->
				<h1 class="sitename">Rana Website</h1><span>.</span>
			</a>

			<nav id="navmenu" class="navmenu">
				<ul>
					<!-- <li><a href="index.html#hero" class="">Home</a></li>
					<li><a href="index.html#about">About</a></li>
					<li><a href="index.html#services">Services</a></li>
					<li><a href="index.html#portfolio">Portfolio</a></li>
					<li><a href="index.html#pricing">Pricing</a></li>
					<li><a href="index.html#team">Team</a></li>
					<li><a href="blog.html">Blog</a></li>
					<li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
						<ul>
							<li><a href="#">Dropdown 1</a></li>
							<li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
								<ul>
									<li><a href="#">Deep Dropdown 1</a></li>
									<li><a href="#">Deep Dropdown 2</a></li>
									<li><a href="#">Deep Dropdown 3</a></li>
									<li><a href="#">Deep Dropdown 4</a></li>
									<li><a href="#">Deep Dropdown 5</a></li>
								</ul>
							</li>
							<li><a href="#">Dropdown 2</a></li>
							<li><a href="#">Dropdown 3</a></li>
							<li><a href="#">Dropdown 4</a></li>
						</ul>
					</li>
					<li><a href="index.html#contact">Contact</a></li> -->

					<!-- Call dynamically menu bar -->
					<i>
						<?php
						wp_nav_menu(array('theme_location' => 'primary-menu', 'menu_class' => 'nav_2'))
						?>
					</i>

				</ul>
				<i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
			</nav>

			<a class="btn-getstarted" href="/wordpress-project/about">Get Started</a>

		</div>
	</header>