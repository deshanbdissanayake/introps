<style>
	.op-75 {
		opacity: 0.75;
	}
	.grayscale{
		filter: grayscale(100%);
	}
	.client_logo {
		max-width: 80% !important;
	}
</style>

<section class="pd-tb-mini" data-rgen-sm="pd-tb-small">
	<div class="container">
		<div class="row gt30 middle-md">
			<div class="col-md-4" data-animate-in="fadeInLeft">
				<h2 class="title small">Trusted by Amazing Clients</h2>
				<p class="mr-0">We have earned the trust of many satisfied clients by consistently delivering exceptional results.</p>
			</div>
			
			<div class="col-md-8" data-animate-in="fadeInRight">
				<ul class="inline-list gt-small size-small reset op-75">
					<li><img class="client_logo grayscale" src="assets/images/introps/clients/genzo.png" alt="brand"></li>
					<li><img class="client_logo grayscale" src="assets/images/introps/clients/lcl2.png" alt="brand"></li>
					<li><img class="client_logo grayscale" src="assets/images/introps/clients/LTS.png" alt="brand"></li>
					<li><img class="client_logo grayscale" src="assets/images/introps/clients/merk.png" alt="brand"></li>
					<li><img class="client_logo grayscale" src="assets/images/introps/clients/roolanka.png" alt="brand"></li>
					<li><img class="client_logo grayscale" src="assets/images/introps/clients/zax.png" alt="brand"></li>
				</ul>
			</div>
		</div>
	</div>
</section>

<script>
	$(document).on('mouseenter', '.client_logo', function(){
		$('.client_logo').addClass('grayscale');
		$(this).removeClass('grayscale');
	});
	$(document).on('mouseleave', '.client_logo', function(){
		$('.client_logo').addClass('grayscale');
	});
</script>
