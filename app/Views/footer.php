<?php

	$serviceModel = model('App\Models\Services_m');
	$services = $serviceModel->getAllServices();

?>

<!--
	************************************************************
	* Footer section
	************************************************************ -->
	<footer class="pos-rel pd-tb-small bg-dark" data-rgen-sm="pd-tb-small">
		<div class="container typo-light" data-rgen-sm="align-c">
			<div class="row gt20 mb20">
				<div class="col-md-4">
					<p><a href="#" class="inline-block max-px-w150"><img src="/assets/images/introps/introps-white.png" class="max-px-w140" alt="logo"></a></p>
					<p>NO: 54 (1st Floor),<br>Katugastota Road,<br>Kandy, Sri Lanka, 20000</p> 
					<p><strong>Phone:</strong> +94 71 1500 200<br>
					<strong>Land Line:</strong> +94 81 2225 866<br>
					<strong>Email:</strong> info@introps.com</p> 
					
					<!--=========================================
					=  Social links
					=============================================-->
					<a href="https://www.facebook.com/introps" target="_blank" class="sq30 fs16 mr-r-4 rd-4 iconbox btn-white"><i class="fab fa-facebook-f"></i></a>
					<a href="#" target="_blank" class="sq30 fs16 mr-r-4 rd-4 iconbox btn-white"><i class="fab fa-twitter"></i></a>
					<a href="#" target="_blank" class="sq30 fs16 mr-r-4 rd-4 iconbox btn-white"><i class="fab fa-google"></i></a>
					<a href="#" target="_blank" class="sq30 fs16 mr-r-4 rd-4 iconbox btn-white"><i class="fab fa-youtube"></i></a>
					<a href="#" target="_blank" class="sq30 fs16 mr-r-4 rd-4 iconbox btn-white"><i class="fab fa-tumblr"></i></a>
				</div><!-- // END : Column //  -->
				
				<div class="col-md-8">
					<div class="row gt20 mb20">
						<div class="col-md-4">
							<h3 class="title tiny">Our Services</h3>
							<ul class="list-1 txt-white op-05">
								<?php
									foreach ($services as $service) {
										$url = base_url('services/srv/' . $service->s_id);
										echo '<li><a href="' . $url . '">' . esc($service->s_title) . '</a></li>';
									}
								?>
							</ul>
						</div><!-- // END : column //  -->
						
						<div class="col-md-4">
							<h3 class="title tiny">Help and Support</h3>
							<ul class="list-1 txt-white op-05">
								<li><a href="#">How to Use</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
						</div><!-- // END : column //  -->

						<div class="col-md-4">
							<h3 class="title tiny">About Us</h3>
							<ul class="list-1 txt-white op-05">
								<li><a href="#">About Us</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Our Clients</a></li>
								<li><a href="#">Terms and Conditions</a></li>
							</ul>
						</div><!-- // END : column //  -->
					</div><!-- // END : row //  -->
					
				</div><!-- // END : Column //  -->
			</div><!-- // END : row //  -->

			<hr class="light">
			<p class="mr-0 op-05"><a href="#" target="_blank">Introps IT</a> &copy; <span class="copyright-year"></span></p>
		</div>
	</footer><!-- / Footer section -->
	<!-- ************** END : Footer section **************  -->