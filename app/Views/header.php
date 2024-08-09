<?php

	$serviceModel = model('App\Models\Services_m');
	$services = $serviceModel->getAllServices();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!--Webpage Title-->
	<title><?= (isset($p_title)) ? $p_title : "Introps IT - Global Enterprise Software Solution Provider." ?></title>
	<!--Webpage Meta description-->
	<meta name="description" content="<?= (isset($p_des)) ? $p_des : "Introps IT specializes in software, app, and web solutions. Let our skilled team craft immersive digital experiences." ?>" />
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
    <link href="/assets/lib/owl-carousel//assets/owl.carousel.min.css" rel="stylesheet">
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
    <link href="/assets/css/themes/default.css" rel="stylesheet">
    <link href="/assets/css/template-custom.css" rel="stylesheet">

	<!-- Favicons -->
	<link rel="icon" href="/assets/images/introps-logo.png">
	<link rel="apple-touch-icon" href="/assets/images/favicons/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="//assets/images/favicons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="//assets/images/favicons/apple-touch-icon-114x114.png">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/light.min.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

	<style>

		/* Container for the dropdown */
		.dropdown {
			position: relative;
			display: inline-block;
		}

		/* Dropdown button */
		.dropbtn {
			font-size: 16px;  
			border: none;
			outline: none;
			color: white;
			padding: 14px 16px;
			background-color: inherit;
			font-family: inherit;
			margin: 0;
			cursor: pointer;
		}

		/* Dropdown toggle icon */
		.dropbtn i {
			margin-left: 5px;
		}

		/* Dropdown content (hidden by default) */
		.dropdown-content {
			display: none;
			position: absolute;
			background-color: #f9f9f9;
			min-width: 160px;
			box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			z-index: 1;
			top: 100%; /* Aligns the top of the dropdown content just below the button */
			left: 0;   /* Aligns the left edge of the dropdown content with the left edge of the button */
		}

		/* Links inside the dropdown */
		.dropdown-content a {
			float: none;
			color: black;
			padding: 12px 16px;
			text-decoration: none;
			display: block;
			text-align: left;
		}

		/* Change color of dropdown links on hover */
		.dropdown-content a:hover {
			background-color: #ddd;
		}

		/* Show the dropdown menu on hover */
		.dropdown:hover .dropdown-content {
			display: block;
		}

		/* Change the background color of the dropdown button when the dropdown content is shown */
		.dropdown:hover .dropbtn {
			background-color: #7a2d2c;
		}

		.bg-glass {
			background-color: #00000054;
			}
			
		.title-sub.small {
			font-size: 0.9rem !important;
		}
		
		.bg-white{
			background: #fff;
		} 
		.title-sub {
			font-size: 1.2rem;
			margin-bottom: 2.5rem;
			font-weight: 300;
		}
		.fs16 {
			font-size: 0.9rem;
		}
		
		.info2{
			width: 300px;
			height: 180px;
			line-height: 20px;
			word-break: break-all;
			display: -webkit-box;
			-webkit-box-orient: vertical;
			-moz-box-orient: vertical;
			-ms-box-orient: vertical;
			box-orient: vertical;
			-webkit-line-clamp: 5;
			-moz-line-clamp: 5;
			-ms-line-clamp: 5;
			line-clamp: 5;
			/*overflow: hidden;*/
		}
		.mfp-fade.mfp-bg {
			opacity: 0;
			transition: all 0.5s ease-out; 
		}
		.mfp-fade.mfp-bg.mfp-ready {
			opacity: 0.8;
		}
		.mfp-fade.mfp-bg.mfp-removing {
			opacity: 0;
		}
		.mfp-fade.mfp-wrap .mfp-content {
			opacity: 0;
			transition: all 0.5s ease-out; 
		}
		.mfp-fade.mfp-wrap.mfp-ready .mfp-content {
			opacity: 1;
		}
		.mfp-fade.mfp-wrap.mfp-removing .mfp-content {
			opacity: 0;
		}
		/* Custom styles for the close button */
		.mfp-close {
			color: white !important;
			opacity: 1 !important;
		}
		.pric-sub{
			margin-bottom: 20px;
		}
		.custom-icon-size {
			font-size: 4em; /* Adjust the size as needed */
		}
		.mt-custom{
			margin-top: 100px;
		}
	</style> 

	<style> 
		/* custom css (desh(2024-07-26)) */
		.pt-6{
			padding-top: 5rem;
		}
		.pb-6{
			padding-bottom: 5rem;
		}
		.pv-2{
			padding-top: 1.5rem;
			padding-bottom: 1.5rem;
		}
	</style> 

</head>

<body>
<div class="page-loader"><b class="spinner"></b></div>
<div id="page" data-linkscroll='y'>

	<header class="main-head dark" data-glass="y" data-sticky="y">
    <div class="container pd-0 min-px-h100" data-rgen-sm="pd-lr-20 h-reset">
        <div class="row gt0 align-items-center head-row">
 
            <div class="col-md-2 pos-rel">
                <a class="nav-handle" data-nav=".m-content" data-navopen="pe-7s-more" data-navclose="pe-7s-close"><i class="pe-7s-more"></i></a>
                <div class="header-logo-wrp">
                    <a class="header-logo pd-tb-small" href="/#"><img src="/assets/images/introps/introps-white.png" alt="Brand logo"></a>  
                </div> 
            </div>
			
            <div class="col-md-10 align-r m-content">
                <ul class="row gt20 justify-content-md-end mr-0 align-items-center">
                    <li class="col-md-auto">
                        <nav class="menu-wrp align-l">
                            <ul class="menu">
                                <li class="menu-item"><a href="/#">Home</a></li>
                                <li class="menu-item dropdown">
                                    <a class="dropbtn" href="#services">Services <i class="fa fa-caret-down"></i></a>
                                    <div class="dropdown-content">
										<?php
											foreach ($services as $service) {
												$url = base_url('services/srv/' . $service->s_id);
												echo '<a href="' . $url . '">' . esc($service->s_title) . '</a>';
											}
										?>
                                    </div>
                                </li>
                                <li class="menu-item dropdown">
                                    <a class="dropbtn" href="#products">Products <i class="fa fa-caret-down"></i></a>
                                    <div class="dropdown-content">
                                        <a href="/products/invigo">Invigo</a>
                                        <a href="/products/irest">iRest</a>
                                        <a href="/products/isales">iSales</a>
                                    </div> 
                                </li>
                                <li class="menu-item"><a href="/Portfolio">Portfolio</a></li>
                                <li class="menu-item dropdown">
                                    <a class="dropbtn" href="/Introps_content/about">Introps <i class="fa fa-caret-down"></i></a>
                                    <div class="dropdown-content">
                                        <a href="/introps/team">Team</a>
                                        <a href="/introps/careers">Careers</a>
                                    </div>
                                </li>
                                <li class="menu-item"><a href="/blog">Blog</a></li>
                            </ul><!-- // END : Navigation links //  -->
                        </nav><!-- // END : Nav //  -->		
                    </li> 

                    <li class="col-md-auto" data-rgen-sm="pd-0 pd-t-10 align-c">
                        <a href="/introps/contact" class="btn btn-white mini"><i class="far fa-envelope mr-r-4"></i> CONTACT US</a>
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

<script>
   $(document).ready(function() {
      // Check if the current URL is the specific page
      if (window.location.href === 'https://invlanding.introps.com/#') {
         $.magnificPopup.open({
            items: {
               src: '#popup-content'
            },
            type: 'inline',
            midClick: true, // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
            mainClass: 'mfp-fade',
            removalDelay: 300 // Delay in milliseconds before popup is removed
         });
      }
   });
</script>



</body>
</html>