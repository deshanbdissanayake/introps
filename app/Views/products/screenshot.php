<style>
	.ss_styles{
		height: 200px !important;
    	object-fit: cover !important;
	}
</style>
	<section class="pos-rel pd-tb-small bg-gray pt-6 pb-6" data-rgen-sm="pd-tb-small" id="portfolio">
		<div class="container" data-animate-in="fadeIn">
			<div class="w75 mr-auto align-c">
				<h2 class="title" data-rgen-sm="small"><?=$ss_title?></h2>
				<p class="title-sub" data-rgen-sm="small"><?=$ss_desc?></p>	
			</div>
			
			<div class="rw eq3 gt20 mb20 popgallery-widget pt-5">
			<?php 
				if (!empty($ss_prev_work)) {
					foreach ($ss_prev_work as $pw) {
				?>
						<div class="cl" data-animate-in="fadeInUp|0.1">
							<h3 class="title mini bold-n align-c"><?=$pw->title?></h3>
							<figure class="hover-box1">
								<div class="overlay flex-cc full-wh">
									<div class="content pos-rel z1">
										<a href="<?= $pw->image ?>" class="sq60 mr-6 bg-primary rd fs24 z1 iconbox pop-img">
											<i class="pe-7s-expand1"></i>
										</a>
									</div>
									<b class="full-wh bg-dark op-08"></b>
								</div>
								<img src="<?= $pw->image ?>" alt="image" class="ss_styles">
							</figure>
						</div>
			<?php }} ?>
			</div><!-- // END : row //  -->

		</div>

		<!--
=================================
= Background holder
=================================
-->
<div class="bg-holder full-wh z0">
	<!-- Overlay -->
	<b data-bgholder="overlay" class="full-wh z5" data-bgcolor="rgba(45, 51, 69, 0)"></b>
	<!-- Parallax image -->
	<div data-bgholder="parallax" class="full-wh z2"></div>
	<!-- Background image -->
	<b data-bgholder="bg-img" class="full-wh bg-cover bg-cc z1"></b>
</div>
	</section>
	<!-- ************** END : Portfolio section **************  --> 