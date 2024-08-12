
<section class="pos-rel pd-tb-small bg-dark" id="services" data-rgen-sm="pd-tb-small">
    <div class="container typo-light">
        <div class="w75 mr-auto align-c mr-b-small" data-rgen-sm="mr-b-30">
            <h2 class="title" data-rgen-sm="small"><?=$feature_title?></h2>
            <p class="title-sub" data-rgen-sm="small"><?=$feature_subtitle?></p>		
        </div>
        
        <div class="rw eq3 gt60 mb60">
            <?php 
                if (!empty($features)) {
                    foreach ($features as $k => $feat) {
            ?>
						<div class="cl" data-animate-in="fadeInUp|0.<?=$k+1?>">
                            <div class="info-obj img-t g20 mini align-c mr-0">
                                <div class="img txt-light"><span class="iconwrp"><i class="<?=$feat->icon?>"></i></span></div>
                                <div class="info">
                                    <h3 class="title bold-n tiny mr-b-10"><?=$feat->t_title?></h3>
                                    <p class="mr-0"><?=$feat->t_desc?></p>
                                </div>
                            </div><!-- info box -->
                        </div><!-- // END : column //  -->
                        
			<?php }} ?>
        </div><!-- // END : row //  -->

    </div><!-- // END : Container //  --> 

    <div class="bg-holder full-wh z0">
        <!-- Overlay -->
        <b data-bgholder="overlay" class="full-wh z5" data-bgcolor="rgba(45, 51, 69, 0)"></b>
        <!-- Parallax image -->
        <div data-bgholder="parallax" class="full-wh z2"></div>
        <!-- Background image -->
        <b data-bgholder="bg-img" class="full-wh bg-cover bg-cc z1"></b>
    </div>
</section>