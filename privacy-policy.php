<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Privacy Policy | Digital Dezire</title>
	<!-- Stylesheets -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="plugins/revolution/css/settings.css" rel="stylesheet" type="text/css">
	<!-- REVOLUTION SETTINGS STYLES -->
	<link href="plugins/revolution/css/layers.css" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
	<link href="plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css">
	<!-- REVOLUTION NAVIGATION STYLES -->

	<link href="css/style.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">

	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">

	<link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
	<link rel="manifest" href="images/site.webmanifest">
	<link rel="mask-icon" href="images/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">

	<meta name="author" content="Digital Dezire Web Solutions">
	<meta name="robots" content="">
	<meta name="keywords" content="best digital marketing services and website development services in delhi, digital marketing agency, website designing agency, website design company delhi, digital dezire web soution, static website,dynamic website, ecommerce solution,wordpress development, multi vendor ecommerce, search engine optimization, social media marketing, social media management, google adword ppc, facebook instagram marketing, basic linux shared hosting,standard linux shared hosting, premium linux shared hosting corporate hosting, corporate hosting plans">
	<meta name="description" content="We Are The Best Digital Marketing Agency In Delhi, Which Provides Digital Marketing Solutions And Services At The Best Cost In Laxmi Nager.">
	<meta property="og:title" content="Best Website Designing Company In Delhi | Digital Dezire">
	<meta property="og:description" content="We Are The Best Digital Marketing Agency In Delhi, Which Provides Digital Marketing Solutions And Services At The Best Cost In Laxmi Nager.">
	<meta property="og:image" content="https://digitaldezire.com/image/logo-square.jpg">
	<meta name="format-detection" content="+919821861897">

	<!-- Responsive -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
	<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

		<!-- Google tag (gtag.js) -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-E862DGSSHP"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'G-E862DGSSHP');
	</script>

<link rel="canonical" href="https://digitaldezire.com/services.php" />

</head>

<body>

	<div class="page-wrapper">

		<!-- Preloader -->
		<div class="preloader"></div>

	
		<?php include 'header.php'; ?>

		<!-- Start main-content -->
		<section class="page-title" style="background-image: url(images/background/page-title.jpg);">
			<div class="auto-container">
				<div class="title-outer">
					<h1 class="title">Privacy Policy</h1>
					<ul class="page-breadcrumb">
						<li><a href="index.html">Home</a></li>
						<li><a href="#">Pages</a></li>
						<li>Privacy Policy</li>
					</ul>
				</div>
			</div>
		</section>
		<!-- end main-content -->

		<!-- About Section -->
		<section class="about-section myabout1">
			<div class="auto-container">
				<div class="row">
				<div class="sec-title">
				<p>All the information provided by you, would be used in accordance to respective laws. The information / data provided by you shall not be shared with any external organization or for any other commercial usage without your written consent. It would be however available to all the divisions / sister concerns / ventures of Digital Dezire Web Solutions.</p>

				<p>In order to facilitate the utilization of the services and maintain the continuity of a visit & help navigation on the site, we make use of temporary cookies. Updating / modification / deletion of your data / information would be done on your written request only.</p>
						</div>

					<!-- Image Column -->
					
				</div>
	</div>

	
			</div>
		</section>
		<!--Emd About Section -->

		
			<?php include 'footer.php'; ?>

	</div><!-- End Page Wrapper -->


	<!-- Scroll To Top -->
	<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

	<script src="js/jquery.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.fancybox.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/jquery.countdown.js"></script>
	<script src="js/mixitup.js"></script>
	<script src="js/wow.js"></script>
	<script src="js/appear.js"></script>
	<script src="js/select2.min.js"></script>
	<script src="js/swiper.min.js"></script>
	<script src="js/owl.js"></script>
	<script src="js/script.js"></script>
	<!-- form submit -->
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/jquery.form.min.js"></script>
	<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
	<script src="./js/index.js"></script>
	<script>
		(function ($) {
			$("#contact_form").validate({
				submitHandler: function (form) {
					var form_btn = $(form).find('button[type="submit"]');
					var form_result_div = '#form-result';
					$(form_result_div).remove();
					form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
					var form_btn_old_msg = form_btn.html();
					form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
					$(form).ajaxSubmit({
						dataType: 'json',
						success: function (data) {
							if (data.status == 'true') {
								$(form).find('.form-control').val('');
							}
							form_btn.prop('disabled', false).html(form_btn_old_msg);
							$(form_result_div).html(data.message).fadeIn('slow');
							setTimeout(function () { $(form_result_div).fadeOut('slow') }, 6000);
						}
					});
				}
			});
		})(jQuery);
	</script>
</body>

</html>