<?php
/*
 Template Name: Home
 */

get_header();
$slider = get_field('slider');
$about = get_field('about');
$work = get_field('work');
$services = get_field('services');
$testimonials = get_field('testiominals');
$testiominals_list = get_field('testiominals_list');
$clients = get_field('clients');
?>
<div id="test"></div>

<!-- Preloader -->
    <div id="preloader">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 188.9 264">
            <title>logo-3</title>
            <g id="f9e7d1ab-8601-4e50-8023-cfa6562628b9" data-name="Layer 2">
                <g id="bf522287-957d-4f36-950b-9c487379be8d" data-name="Layer 1">
                    <path
                        d="M0,.3C42.6.3,85.2-.6,127.7.7c24.2.6,42.4,13.7,53.8,35.3,13.6,25.7,7.8,59.1-15.2,79.5l-3.4-5.3L146.4,81.8a12.1,12.1,0,0,1-1.2-4.6c-.4-5.1-.4-10.3-.9-15.5-.7-8.8-10.4-17.5-19.3-17.6l-97-.4H24.9L0,.9Z"
                        fill="#ff2022" />
                    <path
                        d="M51.2,88.5H86.4l48.2.2a4.4,4.4,0,0,1,4.3,2.4c16.2,28.4,32.6,56.7,48.8,85.1a6.4,6.4,0,0,1,1.2,3.5l-.3,82.2a19,19,0,0,1-.3,2.1l-2.2-3.6q-36.4-63-72.8-126c-1.2-2-2.4-2.8-4.7-2.8H78.2a4.4,4.4,0,0,1-3.4-1.7c-7.6-12.9-15.1-26-22.6-39C51.9,90.4,51.8,89.9,51.2,88.5Z"
                        fill="#ff2022" />
                </g>
            </g>
        </svg>

        
    </div>
<header class="header slider-fade">
    <div class="owl-carousel owl-theme">
        <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
        <?php if (have_rows('slider')): ?>
            <?php foreach ($slider as $value): ?>
            <div class="text-right item bg-img" data-overlay-dark="5" data-background="<?= esc_url($value['image']['url']) ?>">
                <video loop autoplay playsinline muted class="bg-video" src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/CrossFit_2021_Rise_x_NOBULL.MP4"></video>
                <div class="bg-light-under"></div>
                <div class="v-middle caption mt-30">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7 offset-md-5">
                                <div class="o-hidden">
                                    <?= $value['content'] ?>
                                    <!-- <div class="butn-light mt-30 mb-30"><a class="vid" href="https://youtu.be/j-_utBEwGbQ"><span><i class="ti-control-play"></i> Play video</span></a></div> -->
                                    <div class="butn-light mt-30 mb-30"><a href="<?= $value['link']['url'] ?>" target="_blank"><span>Contact Now</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        <?php endif ?>
    </div>
    <!-- Corner -->
    <div class="hero-corner"></div>
    <div class="hero-corner3"></div>
    <!-- Left Panel -->
    <div class="left-panel">
        <ul class="social-left clearfix">
            <li><a href="https://www.instagram.com/riseprojectsco/"><i class="ti-instagram"></i></a></li>
            <li><a href="https://www.facebook.com/riseprojects960/"><i class="ti-facebook"></i></a></li>
			<li><a href="https://www.linkedin.com/company/rise-contracting/about/"><i class="ti-linkedin"></i></a></li>
        </ul>
    </div>
</header>

<div class="content-wrapper">
    <!-- Lines -->
    <section class="content-lines-wrapper">
        <div class="content-lines-inner">
            <div class="content-lines"></div>
        </div>
    </section>
    <!-- About -->
    <section class="about section-padding">
        <div class="parallax-container js-text-parallax">
            <div class="fx-wrap" data-x="200">
              <h3 class="fx-target">About</h3>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">
                    <h2 class="section-title"><?= $about['title'] ?></h2>
                    <?= $about['content'] ?>
                   
                </div>
                <div class="col-md-6 animate-box" data-animate-effect="fadeInUp">
                    <div class="about-img">
                        <div class="img"> 
                            <div class="img-border">
                                <div class="bg-light-under __hover"></div>
                                <img src="<?= esc_url($about['image']['url']) ?>" class="img-fluid" alt=""> 
                            </div>
                            
                        </div>
                        <div class="about-img-2 about-buro"><?= $about['sub'] ?></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Projects -->
    <section class="projects section-padding">
        <div class="parallax-container js-text-parallax">
            <div class="fx-wrap" data-x="-200">
              <h3 class="fx-target">Work</h3>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-title">Our <span>Work</span></h2>
                </div>
            </div>
            
        </div>
        <div class="container-fluide">
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme" >
                        <?php foreach ($work as $k => $value): ?>
							<div>
								<a href="#modal-our-work-<?= $k ?>" class="item" data-fancybox target="_blank"> 
									<div class="position-re o-hidden img-thumb-work"><div class="bg-light-under"></div> <img src="<?= esc_url($value['image']) ?>" alt=""> </div>
									<div class="con">
										<?= $value['title'] ?>
										<div class="line"></div>
									</div>
								</a>
<!--                                 <a 
                                  href="<?= esc_url($value['url']) ?>" 
                                  class="dropbox-embed"
                                ></a> -->
								
								<div id="modal-our-work-<?= $k ?>" style="display:none;max-width:800px;height: 100%;padding:0;width: 100%">
								  <a href="<?= esc_url($value['url']) ?>" class="dropbox-embed"></a>
								</div>

								<!-- <div class="box-img-hidden" style="display:none">
									<a
									  href="https://lipsum.app/id/1/1024x768"
									  data-fancybox="gallery-1"
									  data-caption="Img 2"
									></a>
									<a
									  href="https://lipsum.app/id/1/1024x768"
									  data-fancybox="gallery-1"
									  data-caption="Img 3"
									></a>
									<a
									  href="https://lipsum.app/id/1/1024x768"
									  data-fancybox="gallery-1"
									  data-caption="Img 3"
									></a>
									<a
									  href="https://lipsum.app/id/1/1024x768"
									  data-fancybox="gallery-1"
									  data-caption="Img 4"
									></a>
								</div> -->
						</div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services -->
    <section class="services section-padding">
        <div class="parallax-container js-text-parallax">
            <div class="fx-wrap" data-x="200">
              <h3 class="fx-target">Services</h3>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-title">Our <span>Services</span></h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <?php foreach ($services as $key => $service): ?>
                    <div class="col-md-4 d-flex">
                        <div class="item">
                            <a href="<?= $service['link']['url'] ?>"> <img src="<?= esc_url($service['image']) ?>" alt="">
                                <h5><?= $service['title'] ?></h5>
                                <div class="line"></div>
                                <p><?= $service['description'] ?></p>
                                <div class="numb">0<?= $key ?></div>
                            </a>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>
    

    <!-- Promo video - Testiominals -->
    <section class="testimonials">
        <div class="background bg-img bg-fixed section-padding pb-0" data-background="<?= esc_url($testimonials['image']['url']) ?>" data-overlay-dark="5">
            <video loop autoplay playsinline muted class="bg-video" src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/Project1600_101317_v1.mp4"></video>
            <div class="bg-light-under __hover"></div>
            <div class="container">
                <div class="row">
                    <!-- Promo video -->
                    <div class="col-md-6">
                        
                    </div>
                    <!-- Testiominals -->
                    <div class="col-md-5 offset-md-1">
                        <div class="testimonials-box animate-box" data-animate-effect="fadeInUp">
                            <div class="head-box">
                                <h4><?= $testimonials['title'] ?></h4>
                            </div>
                            <div class="owl-carousel owl-theme">
                                <?php foreach ($testiominals_list as $key => $value): ?>
                                    <div class="item"> <span class="quote"><img src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/img/quot.png" alt=""></span>
                                        <p><?= $value['description'] ?></p>
                                        <div class="info">
                                            <?php if (!empty($value['image'])): ?>
                                                <div class="author-img"> <img src="<?= esc_url($value['image']) ?>" alt=""> </div>
                                            <?php endif ?>
                                            <div class="cont">
                                                <?= $value['title'] ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Clients -->
    <section class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-6 owl-carousel owl-theme owl-logo">
                    <?php foreach ($clients as $value): ?>
                        <?php if (!empty($value['image'])): ?>
                        <div class="clients-logo">
                            <a href="<?= $value['link']['url'] ?>"><img src="<?= esc_url($value['image']) ?>" alt=""></a>
                        </div>
                        <?php endif ?>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </section>
    
<?php

get_footer();