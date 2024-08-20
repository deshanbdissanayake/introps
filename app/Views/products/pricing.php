<section class="pd-tb-medium pos-rel pt-6 pb-6" data-rgen-sm="pd-tb-small align-c" id="price">
	<div class="container pos-rel z1">
		<div class="row middle-md">
			<div class="col-md-4" data-rgen-sm="mr-b-20" data-animate-in="fadeIn">
				<h2 class="title" data-rgen-sm="medium"><?=$price_title?></h2>
				<p class="title-sub" data-rgen-sm="small"><?=$price_subtitle?></p>
				<hr>
				<h3 class="title mini bold-n">Talk to us</h3>
				<p>Drop us a line and we'll get back to you shortly.</p>
				<a href="/contact?ref=products&id=<?= service('uri')->getSegment(3) ?>&pkg=custom" class="btn btn-dark small bold-n">Contact Us</a>
			</div>

			<div class="col-md-7 offset-md-1 align-c">
				<div class="row gt40 mb20">
					<?php
						if(!empty($price_packages)):
						foreach($price_packages as $package):
							$bdr = $package->pkg_fav ? 'bdr-default' : '';
							$bg = $package->pkg_fav ? 'bg-default' : '';
							$txt = $package->pkg_fav ? 'txt-default' : '';

					?>
						<div class="col-md-6" data-animate-in="fadeInUp|0.1">
							<div class="price-table-1 anim align-c bdr-1 <?=$bdr?> pd-tiny rd-5">
								<?php if($package->pkg_fav): ?>
									<span class="tag-text <?=$bg?>">Most Popular</span>
								<?php endif; ?>
								<h2 class="title small pd-10 <?=$txt?>"><?=$package->pkg_name?></h2>

								<hr>
								
								<p class="lh-1 mr-b-30 txt-dark"><span class="fs50"><?= $package->pkg_price > 0 ? number_format($package->pkg_price, 0) : 'Custom' ?></span><?= $package->pkg_price > 0 ? 'LKR' : '' ?><br> /per month</p>

								<hr>
								<?php foreach($package->features as $feature): ?>
									<p><?=$feature->pf_desc?></p>
								<?php endforeach; ?>
								<hr>

								<a href="/contact?ref=products&id=<?= service('uri')->getSegment(3) ?>&pkg=<?=$package->pkg_id?>" class="btn btn-dark solid mr-tb-20">GET STARTED</a>
							</div>
						</div>
					<?php
						endforeach;
						endif;
					?>

				</div><!-- row -->
			</div><!-- column -->
		</div><!-- row -->
	</div><!-- container -->
</section>