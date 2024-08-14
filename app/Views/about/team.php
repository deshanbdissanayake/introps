<style>
    .bg-glass {
        background-color: #2d3345 !important;
    }
</style>

<section class="pos-rel pd-tb-small pd-b-0" id="reviews" data-rgen-sm="pd-tb-small align-c">
    <div class="container">
        <div class="row gt20 middle-md">
            <div class="col-md-6 mr-t-20" data-animate-in="fadeInLeft|0.1">
                <img src="/assets/images/person-800x800-01.jpg" alt="person">
            </div>
            
            <div class="col-md-5 offset-md-1 pd-tb-20" data-animate-in="fadeInRight|0.1">
            <div class="col-md-12 pb-5" data-animate-in="fadeInLeft">
                <h2 class="title fs24" data-rgen-sm="medium">Our Managing Director</h2>
                <p class="title-sub small" data-rgen-sm="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco exaliquip exea commodo proident.</p>
                
                <hr>

                <h3 class="bold-1 fs16 mr-0">D.K. Aluthgedara</h3>
                <em class="fs12">Managing Director of Introps IT</em>
            </div>
        </div>
    </div>
    
    <hr>

    <div class="container pt-4 pb-5">
        <div class="row gt20 middle-md">
            <div class="col-md-12 pb-4" data-animate-in="fadeInLeft">
                <h2 class="title fs24" data-rgen-sm="medium">Passionate people on our team</h2>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam</p>
            </div>

            <?php foreach($deps as $dep): ?>
                <h2 class="title tiny f-1 bold-3 ml-2" data-rgen-sm="small"><?=$dep->dep_name?></h2>
                <div class="col-md-12">
                    <div class="row gt40 mb20">
                        <?php foreach($team as $m): ?>
                            <?php if($m->dep_id === $dep->dep_id): ?>
                            <div class="col-md-3" data-animate-in="fadeInRight|0.1">
                                <div class="info-obj img-t g20 align-c mr-0">
                                    <div class="img"><img src="<?=$m->image?>" alt="person"></div>
                                    <div class="info">
                                        <h3 class="title fs14 mr-b-4 bold-n"><?=$m->name?></h3>
                                        <p class="mr-0 fs12"><em><?=$m->designation?></em></p>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
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
    