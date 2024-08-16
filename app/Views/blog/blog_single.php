<style>
    .bg-glass {
        background-color: #2d3345 !important;
    }
	.label-default{
		background-color: #e5e5e5;
		color: #333;
		padding: 5px;
		padding-left: 10px;
		padding-right: 10px;
		border-radius: 5px;
		cursor: pointer;
		margin-right: 5px;
	}
</style>

<section class="pd-tb-medium pos-rel" data-rgen-sm="pd-tb-medium">
	<div class="container">
		<div class="w75 mr-auto align-c" data-animate-in="fadeIn">
			<h2 class="title" data-rgen-sm="small"><?=$blog->title?></h2>
			<p class="title-sub" data-rgen-sm="small">
				<?=$blog->published_by?> (<?=$blog->publish_date?>)
			</p>
		</div>
		<br>
		
		<div class="row gt20 mb20">
			<div class="col-md-6 last-md offset-md-1">
				<img src="<?=$blog->image?>" alt="<?=$blog->title?> image">    
			</div>
			
			<div class="col-md-5">
				<h2 class="title small f-1 bold-3" data-rgen-sm="small" data-animate-in="fadeInUp|0.1">Introduction</h2>
				<p class="title-sub" data-rgen-sm="small"><?=$blog->intro?></p>
			</div>
		</div>
		
		<div class="row">
			<div class="col-12">
				<h3 class="title small f-1 bold-3" data-rgen-sm="small" data-animate-in="fadeInUp|0.1">Article</h3>
				<p class="title-sub" data-rgen-sm="small"><?=$blog->paragraph_1?></p>
				<p class="title-sub" data-rgen-sm="small"><?=$blog->paragraph_2?></p>
				<p class="title-sub" data-rgen-sm="small"><?=$blog->paragraph_3?></p>
				<p class="title-sub" data-rgen-sm="small"><?=$blog->paragraph_4?></p>
			</div>
		</div><!-- // END : new row //  -->
		<div class="row">
			<div class="col-12">
				<h2 class="title small f-1 bold-3" data-rgen-sm="small" data-animate-in="fadeInUp|0.1">Conclusion</h2>
				<p class="title-sub" data-rgen-sm="small"><?=$blog->conclusion?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<?php foreach($blog->tags as $tag): ?>
					<label class="label label-default label-sm">#<?=$tag->tag_name?></label>
				<?php endforeach; ?>
			</div>
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