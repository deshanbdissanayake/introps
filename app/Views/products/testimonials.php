<section class="pos-rel pd-tb-small bg-dark" data-rgen-sm="pd-tb-small" id="testimonials">
<div class="container pos-rel z2 typo-light">
	<div class="w75 mr-auto align-c" data-animate-in="fadeIn">
		<h2 class="title" data-rgen-sm="medium"><?=$testi_title?></h2>
		<p class="title-sub" data-rgen-sm="small"><?=$testi_subtitle?></p>	
	</div>

	<div class="row gt40 mb20">
		<?php foreach($testimonials as $tst): ?>
			<div class="col-md-4" data-animate-in="fadeInUp|0.1">
				<div class="info-obj img-t g20 mini pd-tiny bg-white rd-6 -mr-b-10 shadow-tiny testimonial-card">
					<div class="img"><span class="iconwrp rd bg-default txt-white -mr-t-50"><i class="fa fa-quote-left"></i></span></div>
					<div class="info">
						<p class="fs16 txt-dark"><?=$tst->review?></p>
					</div>
				</div>
				<div class="info-obj img-l g10 small mid pd-lr-20">
					<div class="img bdr-4 bdr-white shadow-small rd"><img src="<?=base_url($tst->cus_image)?>" class="rd" alt="image"></div>
					<div class="info pd-tb-20">
						<h3 class="fs16 bold-n mr-0"><?=$tst->cus_name?></h3>
						<em class="fs12"><?=$tst->cus_designation?></em>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div><!-- // END : row //  -->

</div><!-- // END : container //  -->

<div class="bg-holder full-wh z1">
	<b bg-holder="overlay" data-gradient="y" data-g-colors="rgba(0, 0, 0,0)|rgba(0, 0, 0, 0.1)" class="full-wh z2"></b>
	<b bg-holder="bg-img" class="full-wh bg-cover bg-cc"></b>
</div>
<div class="bg-holder full-wh z0">
	<!-- Overlay -->
	<b data-bgholder="overlay" class="full-wh z5" data-gradient="y" data-g-colors="rgba(0, 0, 0,0)|rgba(0, 0, 0, 0.1)"></b>
	<!-- Parallax image -->
	<div data-bgholder="parallax" class="full-wh z2"></div>
	<!-- Background image -->
	<b data-bgholder="bg-img" class="full-wh bg-cover bg-cc z1"></b>
</div>
</section>