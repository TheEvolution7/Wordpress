<?php
/*
 Template Name: Work
 */

get_header();

$section_1 = get_field('section_1');
$testimonials = get_field('testiominals');
$testiominals_list = get_field('testiominals_list');
$clients = get_field('clients');
$slider = get_field('slide');
?>

<div class="content-wrapper">
    <!-- Lines -->
    <section class="content-lines-wrapper">
        <div class="content-lines-inner">
            <div class="content-lines"></div>
        </div>
    </section>
    <!-- Header Banner -->
    <section class="banner-header banner-img valign bg-img bg-fixed" data-overlay-dark="3">
        <!-- Left Panel -->
		<video loop autoplay playsinline muted class="bg-video" src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/KeachSonsTimelapse.mp4"></video>
        <!-- Left Panel -->
        <div class="bg-light-under"></div>
        <div class="left-panel"></div>
    </section>
    <!-- Gallery -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-title"><?= $section_1['title'] ?></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10">
                    <p><?= $section_1['description'] ?></p>
                </div>
            </div>
            <div class="row">
				
<?php foreach ($section_1['list'] as $k => $value): ?>
				
				<div class="col-lg-4 col-md-6 gallery-item">
<!-- 	                    <a href="<?= esc_url($value['image']) ?>" title="" class="img-zoom">
	                        <div class="gallery-box">
	                            <div class="gallery-img"> <img src="<?= esc_url($value['image']) ?>" class="img-fluid mx-auto d-block"
	                                    alt="work-img"> </div>
	                        </div>
	                    </a> -->
						<a href="#modal-our-work-<?= $k ?>" class="item" data-fancybox> 
									<div class="position-re o-hidden img-thumb-work"><div class="bg-light-under"></div> <img src="<?= esc_url($value['image']) ?>" alt=""> </div>
									<div class="con">
										<?= $value['title'] ?>
										<div class="line"></div>
									</div>
						</a>
						<div id="modal-our-work-<?= $k ?>" style="display:none;max-width:800px;height: 100%;padding:0;width: 100%">
								  <a href="<?= esc_url($value['url']) ?>" class="dropbox-embed"></a>
								</div>
<!-- 						<div class="box-img-hidden" style="display:none">
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
    </section>
    <!-- Promo video - Testiominals -->
    <section class="testimonials">
        <div class="background bg-img bg-fixed section-padding pb-0" data-background="<?= esc_url($testimonials['image']['url']) ?>" data-overlay-dark="5">
            <video loop autoplay playsinline muted class="bg-video" src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/video/3.mp4"></video>
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
                <div class="col-md-7 owl-carousel owl-theme">
                    <?php foreach ($clients as $value): ?>
                        <?php foreach ($clients as $value): ?>
                            <?php if (!empty($value['image'])): ?>
                            <div class="clients-logo">
                                <a href="<?= $value['link']['url'] ?>"><img src="<?= esc_url($value['image']) ?>" alt=""></a>
                            </div>
                            <?php endif ?>
                        <?php endforeach ?>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer();