<section class="pd-tb-small pos-rel pt-6 pb-6" data-rgen-sm="pd-tb-small align-c" id="price">	
	<div class="container">
		<h2 class="title align-c" data-rgen-sm="medium" data-animate-in="fadeIn"><?=$title?></h2>
			<p class="title-sub align-c" data-rgen-sm="small" data-animate-in="fadeIn"><?=$subtitle?></p><br>
		
		<div class="row gt20 mb20 justify-content-center">

			<?php foreach($packages as $k => $package){ ?>
				<div class="col-md-3 mx-3" data-animate-in="fadeInUp|0.<?=$k+1?>">
					<div class="bdr-2 bdr-default hov-bdr-dark hov-shadow-large anim rd-10 align-c pos-rel">
						<?php if($package->pkg_fav){ ?>
							<span class="tag-text rd-4 pos-abs t0 c-item -mr-t-40 bg-primary bold-3 pd-lr-20">
								POPULAR
								<i class="fs26 fa fa-caret-down pos-abs c-item txt-primary" style="bottom: -15px;"></i>
							</span>
						<?php } ?>
						<h2 class="title small pd-20 bdr-b-2 bdr-op-1"><?=$package->pkg_name?></h2>
						<div class="pd-tiny">
							<p class="lh-1 mr-b-30 txt-dark"><span class="fs50"><?= $package->pkg_price > 0 ? number_format($package->pkg_price, 0) : 'Custom' ?></span><?= $package->pkg_price > 0 ? 'LKR' : '' ?></p>
							<?php 
								foreach($package->features as $feature){
								if($feature->pf_type == 'main'){
							?>
								<p class="pric-sub title-sub f-2 small"><?=$feature->pf_desc?></p>
							<?php }} ?>
							<hr>
							<a href="/contact?package=<?=$package->pkg_name?>" class="btn btn-default small solid">Get started now</a>
						</div>
					</div>
					<div class="pd-tiny align-c">
						<?php
							foreach($package->features as $j => $feature){
								if($feature->pf_type == 'common'){
									echo $j !== 0 ? '<hr class="mr-tb-10">' : '';
						?>
							<?=$feature->pf_desc?>
						<?php }} ?>
					</div>
				</div><!-- // END : column //  -->
			<?php } ?>
		</div><!-- // END : row //  -->
	</div>
	<div class="bg-holder full-wh z0">
		<!-- Overlay -->
		<b data-bgholder="overlay" class="full-wh z5" data-bgcolor="rgba(45, 51, 69, 0)"></b>
		<!-- Parallax image -->
		<div data-bgholder="parallax" class="full-wh z2"></div>
		<!-- Background image -->
		<b data-bgholder="bg-img" class="full-wh bg-cover bg-cc z1"></b>
	</div>
</section>