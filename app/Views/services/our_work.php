
<section class="pos-rel pd-tb-small pt-6 pb-6 bg-dark" data-rgen-sm="pd-tb-small" id="portfolio">
    <div class="container typo-light" data-animate-in="fadeIn">
        <div class="w75 mr-auto align-c">
            <h2 class="title" data-rgen-sm="small"><?=$title?></h2>
            <p class="title-sub" data-rgen-sm="small"><?=$subtitle?></p>	
        </div>
        
        <div class="rw eq3 gt20 mb20 popgallery-widget">
            <?php foreach($prev_work as $k => $work){ ?>
                <div class="cl" data-animate-in="fadeInUp|0.<?=$k+1?>">
                    <figure class="hover-box1 mr-0">
                        <div class="overlay flex-bl typo-light">
                            <div class="content mr-30 z2">
                                <!-- Pop-up Image and link -->
                                <a href="<?= base_url($work->image_path) ?>" class="inline-flex sq40 bg-primary flex-cc fs24 mr-b-20 pop-img"><i class="pe-7s-expand1"></i></a>

                                <a href="<?= base_url($work->project_path) ?>" target="_blank" class="inline-flex sq40 bg-primary flex-cc fs24 mr-b-20"><i class="pe-7s-link"></i></a>
                                
                                <!-- Text content -->
                                <h3 class="title mini bold-n"><?=$work->title?></h3>
                                <p class="mr-0 fs12 op-08"><?=$work->subtitle?></p>
                            </div>
                            <b class="full-wh bg-dark op-09 z1 l0"></b>
                        </div>
                        <!-- Project image -->
                        <img src="<?=$work->image_path?>" alt="image">
                    </figure><!-- / hover box -->
                </div>
            <?php } ?>
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