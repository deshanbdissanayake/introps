<style>
    .bg-glass {
        background-color: #2d3345 !important;
    }
</style>

<section class="pos-rel pd-tb-medium" id="about" data-rgen-sm="pd-tb-medium">
	<div class="container">
	<div class="w75 mr-auto align-c" data-animate-in="fadeIn">
		<h2 class="title" data-rgen-sm="small">Insights and Updates</h2>
		<p class="title-sub" data-rgen-sm="small">Stay informed with the latest industry news, expert insights, and updates from our team. Dive into our blog to discover valuable content and trends in software development.</p>	
	</div>

		<div class="row gt20 mb20">

			<?php foreach($blogs as $k => $blog): ?>
				<!--
				<div class="col-md-6" data-animate-in="fadeInUp|0.<?=$k+1?>">
					<div class="hover-box1 min-px-h350">
						<div class="full-wh z2 pd-mini flex-bl overlay-wrp" data-rgen-sm="pd-30">
							<a href="/blog/post/<?=$blog->blog_id?>" class="full-wh z3">&nbsp;</a> 
							<div class="info-obj img-t g20 small z2 pos-rel">
								<div class="info typo-light">
									<h3 class="title small bold-n"><?=$blog->title?></h3>
									<p class="mr-0"><?=$blog->short_desc?></p>
								</div>
							</div>
							<div class="full-wh" data-bgcolor="rgba(45, 51, 69, 0.7)"></div>
						</div>
						<b class="bg-cc bg-cover full-wh img-wrp" data-bg="<?=$blog->image?>"></b>
					</div>
				</div>
				-->
				<div class="col-md-4" data-animate-in="fadeInUp|0.<?=$k+1?>">
					<div class="info-obj img-t g20">
						<div class="img"><a href="/blog/post/<?=$blog->blog_id?>" target="_blank"><img src="<?=$blog->image?>"></a></div>
						<div class="info">
							<h3 class="title mini mr-b-4"><a href="/blog/post/<?=$blog->blog_id?>" target="_blank"><?=$blog->title?></a></h3>
							<p class="italic"><i class="fa fa-calendar"></i> <?=$blog->published_by?> (<?=$blog->publish_date?>)</p>
							
							<p><?=$blog->short_desc?></p>

							<a href="/blog/post/<?=$blog->blog_id?>" target="_blank" class="btn small btn-dark">Read more...</a>
							
						</div>
					</div>
				</div>
			<?php endforeach; ?>
			
		</div>

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