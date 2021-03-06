<!DOCTYPE html>
<html lang="es-MX">
	<head>
		<meta charset="UTF-8">
		<title>Ohana Comercializadora<?php echo "{$page_title}"; ?></title>
		<meta name="robots" content="<?php echo $meta_robots; ?>">
		<meta name="description" content="<?php echo $meta_description; ?>">

		<!-- Normalize -->
		<link rel="stylesheet" href="/css/normalize.css">

		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Arimo:400' rel='stylesheet' type='text/css'>

	  <!-- Styles -->
		<link rel="stylesheet" href="/css/feature-carousel.css">
		<link rel="stylesheet" href="/css/styles.css">

		<!-- Jquery -->
	  <script src="/js/jquery.min.js"></script>

		<!-- Feature Carousel -->
	  <script src="/js/jquery.feature-carousel.js"></script>

		<!-- Jquery Validation -->
	  <script src="/js/jquery-validate.min.js"></script>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	  <!--[if lt IE 9]>
	  	<link rel="stylesheet" href="/css/styles-i8.css">
	    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>	    
	    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	  <![endif]-->
	  <!--[if lt IE 10]>
			<script src="/js/placeholders.min.js"></script>
			<script src="/js/flexibility.min.js"></script>
  	<![endif]-->
	</head>
	<body id="<?php echo $page_name; ?>">

		<h1 class="hide">Ojana Comercializadora</h1>

		<header>
			<div class="header">
				<div class="header__wrapper">

					<div class="logo-menu">
						<div id="logo">
							<a href="/">
								<img src="/images/header/ojana-logo.jpg" alt="Ojana Logo">
							</a>
						</div> <!-- / #logo -->
						
						<?php include('_partials/menu.php'); ?>
					</div> <!-- /.logo-menu -->

					<!-- #carousel -->
					<?php include('_partials/carousel.php'); ?>

				</div> <!-- /.header__wrapper -->
			</div> <!-- /.header -->
		</header>

		<section>
			<div class="content">
				<?php include_once($page_view); ?>
			</div> <!-- /.content -->
		</section>

		<aside>
			<div class="aside">

				<?php if($page_name == 'home') : ?>

				<div class="bottom-address">
					<p>Dirección: C. Rio Panuco S/N Mza-1, Col. Ampliación tulprtlac, 55418, Ecatepec Morelos, Estado de México</p>
				</div>

				<?php endif; ?>

				<?php if($page_name == 'contact') : ?>

				<div class="phone-mail">

					<div class="phone-blue-icon"></div>
					<p class="phone-number">(55) 6130-9408</p>

					<div class="mail-blue-icon"></div>

					<div class="mails">
						<p>
							ventas@hojana.com<br>
							nadhia.calderon@hojana.com
						</p>
					</div> <!-- /.mails -->

				</div> <!-- .phone-mail -->

				<?php endif; ?>

			</div> <!-- /.aside -->
		</aside>

		<a href="#" class="scroll-top"><span class="scroll-top__icon"></span></a>

		<footer>
			<div id="footer">
				<div class="footer__wrapper">

					<p id="footer__copyright">Copyright <?php echo date('Y'); ?> &copy; Ojana Comercializadora <span class="dot">&#8226;</span> <span class="reserved">Todos los Derechos Reservados</span></p>

					<p id="footer__developed-by">Desarrollo por <img src="/images/icons/global-net-studio-logo.png" alt="Global Net Studio Logo"> <a href="http://globalnetstudio.com/" target="_blank">Global Net Studio</a></p>

				</div> <!-- /.footer_wrapper -->
			</div> <!-- /.footer -->
		</footer>

		<!-- Custom Scripts -->
		<script src="/js/scripts.js"></script>
	</body>
</html>