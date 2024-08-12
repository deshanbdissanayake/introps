
<section class="pos-rel pd-tb-medium parallax" id="home" data-rgen-sm="pd-tb-small align-c">
    <div class="container pd-tb-small" data-rgen-sm="pd-tb-small">
        <div class="max-px-w500 typo-light">
            <h2 class="title f-1 bold-3 lh-3" data-rgen-sm="large" data-animate-in="fadeInUp|0.1"><?= $home_title ?></h2>
            <p class="title-sub mini" data-rgen-sm="small" data-animate-in="fadeInUp|0.2"><?= $home_subtitle ?></p>
            
            <a href="<?=$home_path?>" data-rgen-sm="small" target="_blank" class="btn btn-white solid bdr-2 rd-6" data-animate-in="fadeInUp|0.3">BUY NOW</a>
            <a href="<?=$home_video_link?>" class="btn txt-white large video-popup mr-lr-20" data-animate-in="fadeInUp|0.4">
                <i class="pe-7s-video fs40 btn-icon" data-rgen-sm="fs20"></i> <span class="btn-txt fs20 f-1 bold-3" data-rgen-sm="fs16">Take quick tour</span>
            </a>
        </div>
    </div>
    
    <div class="bg-holder full-wh z0">
        <!-- Overlay -->
        <b data-bgholder="overlay" class="full-wh z5" data-bgcolor="rgba(0, 0, 0, 0.2)"></b>
        <!-- Background video -->
        <div data-bgholder="video" class="videobg z4 full-wh"></div>
        <!-- bg slider -->
        <div data-bgholder="slider" class="full-wh z3" data-rgen-sm="h100">
            <div class="bgslider full-wh"></div>
        </div>
        <!-- Parallax image -->
        <div data-bgholder="parallax" class="full-wh z2" data-parallax-img="<?= base_url($home_bgimage) ?>"></div>
        <!-- Background image -->
        <b data-bgholder="bg-img" class="full-wh bg-cover bg-cc z1"></b>
    </div>
</section>