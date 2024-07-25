<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!--Webpage Title-->
	<title><?= (isset($p_title)) ? $p_title : "Invigo	 : web-based invoicing system, inventory management, stock management, customizable invoices, real-time stock updates, automated invoicing, sales reports,cloud-based access" ?></title>
	<!--Webpage Meta description-->
	<meta name="description" content="<?= (isset($p_des)) ? $p_des : "Invigo is a web-based invoicing and inventory management system that helps businesses streamline operations, manage stock in real-time, issue customizable invoices, and gain valuable insights with advanced reporting and analytics. Access your business data securely from anywhere with Invigo." ?>" />
	<!--Webpage Meta keywords-->
	<meta name="keywords" content="Invigo, web-based invoicing system, inventory management, stock management, customizable invoices, real-time stock updates, automated invoicing, sales reports, customer relationship management, CRM, cloud-based access, secure data, business automation, multi-currency support, tax reports, integration, customization, responsive design <?= (isset($p_key)) ? $p_key : "invigo,invoice management system" ?>" />
	<!--Webpage canonical URL-->
	<?php if (isset($p_can)) echo "<link rel='canonical' href='$p_can' />"; ?>
 

    <!--pageMeta-->
    
    <!-- Lib CSS -->
    <link href="/assets/lib/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="/assets/lib/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="/assets/lib/owl-carousel/owl.css" rel="stylesheet">
    <link href="/assets/lib/Swiper/css/swiper.min.css" rel="stylesheet">
    <link href="/assets/lib/owl-carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/assets/lib/vegas/vegas.min.css" rel="stylesheet">
    <link href="/assets/lib/Magnific-Popup/magnific-popup.css" rel="stylesheet">
    <link href="/assets/lib/sweetalert/sweetalert2.min.css" rel="stylesheet">
    <link href="/assets/lib/materialize-parallax/materialize-parallax.css" rel="stylesheet">


    <!-- Icon fonts -->
    <link href="/assets/fonts/fontawesome-all.min.css" rel="stylesheet">
    <link href="/assets/fonts/pe-icon-7-stroke.css" rel="stylesheet">
    <link href="/assets/fonts/et-line-font.css" rel="stylesheet">

    <!-- Template CSS -->
    <link href="/assets/css/animate.css" rel="stylesheet">
    <link href="/assets/css/main.css" rel="stylesheet">
    <link href="/assets/css/rgen-grids.css" rel="stylesheet">
    <link href="/assets/css/helper.css" rel="stylesheet">
    <link href="/assets/css/responsive.css" rel="stylesheet">

    <!-- Theme color css -->
    <link href="/assets/css/themes/theme-06.css" rel="stylesheet">
    <link href="/assets/css/template-custom.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="icon" href="/assets/images/favicons/favicon.png">
    <link rel="apple-touch-icon" href="/assets/images/favicons/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/assets/images/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/assets/images/favicons/apple-touch-icon-114x114.png">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <!--[if IE 9 ]><script src="js/ie-matchmedia.js"></script><![endif]-->
</head>

<body>
<div class="page-loader"><b class="spinner"></b></div>
<div id="page" data-linkscroll='y'>


	<!--
	************************************************************
	* Header
	************************************************************ -->
	<header class="main-head dark" data-bgcolor="rgba(0, 0, 0, 0.2)" data-glass="y" data-sticky="y">
		<div class="container pd-0 min-px-h80 bdr-b bdr-op-light-1" data-rgen-sm="pd-lr-20 h-reset">
			
			<div class="row gt0 align-items-center head-row">
				
				<!--=================================
				= Logo section
				==================================-->
				<div class="col-md-3 pos-rel">
					<a class="nav-handle" data-nav=".m-content" data-navopen="pe-7s-more" data-navclose="pe-7s-close"><i class="pe-7s-more"></i></a>
					<div class="header-logo-wrp">
						<a class="header-logo pd-tb-small" href="http://rgenesis.com"><img src="/assets/images/logo1.png" alt="Brand logo"></a>
					</div>
				</div><!-- // END : Column //  -->
				
				<!--=================================
				= Navigation links
				==================================-->
				<div class="col-md-9 align-r m-content">
					<ul class="row gt20 justify-content-md-end mr-0 align-items-center">
						<li class="col-md-auto">
							<nav class="menu-wrp align-l">
								<ul class="menu">
									<li class="menu-item"><a href="#about">About</a></li>
									<li class="menu-item"><a href="#services">Services</a></li>
                                    <li class="menu-item"><a href="#testimonials">Testimonials</a></li>
                                    <li class="menu-item"><a href="#testimonials">Contact</a></li>
								</ul><!-- // END : Navigation links //  -->
							</nav><!-- // END : Nav //  -->		
						</li>

						<li class="pd-l-20" data-rgen-sm="pd-0 pd-t-10 align-c">
                            <a href="#contact" class="btn btn-white mini"><i class="fa fa-envelope-o mr-r-5"></i> CONTACT US</a>
                            <a href="http://rgenesis.com" target="_blank" class="btn btn-white mini"><i class="fa fa-envelope-o mr-r-5"></i> Purchase</a>
                        </li>
					</ul>

				</div><!-- // END : Column //  -->

			</div><!-- // END : row //  -->

		</div><!-- // END : container //  -->
	</header>
	<!-- ************** END : Header **************  -->


<script src="/assets/js/webfonts.js" type="text/javascript"></script>

<script src="/assets/lib/jquery/jquery-3.3.1.min.js" type="text/javascript"></script>
<script src="/assets/lib/jquery/jquery-migrate-3.0.0.min.js" type="text/javascript"></script>
<script src="/assets/lib/jquery/popper.min.js" type="text/javascript"></script>
<script src="/assets/lib/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/assets/lib/jquery-smooth-scroll/jquery.smooth-scroll.min.js" type="text/javascript"></script>
<script src="/assets/lib/jQuery-viewport-checker/jquery.viewportchecker.min.js" type="text/javascript"></script>
<script src="/assets/lib/Swiper/js/swiper.min.js" type="text/javascript"></script>
<script src="/assets/lib/owl-carousel/owl.js" type="text/javascript"></script>
<script src="/assets/lib/Magnific-Popup/jquery.magnific-popup.min.js" type="text/javascript"></script>
<script src="/assets/lib/isotope/imagesloaded.pkgd.min.js" type="text/javascript"></script>
<script src="/assets/lib/isotope/isotope.pkgd.min.js" type="text/javascript"></script>
<script src="/assets/lib/isotope/packery-mode.pkgd.min.js" type="text/javascript"></script>
<script src="/assets/lib/jQuery-Countdown/jquery-countdown.js" type="text/javascript"></script>

<script src="/assets/lib/sweetalert/sweetalert2.min.js" type="text/javascript"></script>
<script src="/assets/lib/jquery-validation/jquery.validate.min.js" type="text/javascript"></script>
<script src="/assets/lib/youtubebackground/jquery.youtubebackground.js" type="text/javascript"></script>
<script src="/assets/lib/Vide/jquery.vide.min.js" type="text/javascript"></script>
<script src="/assets/lib/vegas/vegas.min.js" type="text/javascript"></script>
<script src="/assets/lib/materialize-parallax/materialize-parallax.js" type="text/javascript"></script>
<script src="/assets/lib/countUp/countUp.js" type="text/javascript"></script>
<script src="/assets/lib/stellar/jquery.stellar.min.js" type="text/javascript"></script>
<script src="/assets/js/enquire.min.js" type="text/javascript"></script>
<script src="/assets/js/main.js"></script>

</body>
</html>