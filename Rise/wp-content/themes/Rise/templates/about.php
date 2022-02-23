<?php
/*
 Template Name: About
 */

get_header();

$about = get_field('about');
$team = get_field('team');
$client_1 = get_field('client_1');
$clients_say = get_field('clients_say');
$testimonials = get_field('testiominals');
$testiominals_list = get_field('testiominals_list');
$clients = get_field('clients');
?>

<div class="content-wrapper">
    <!-- Lines -->
    <section class="content-lines-wrapper">
        <div class="content-lines-inner">
            <div class="content-lines"></div>
        </div>
    </section>
    <!-- Header Banner -->
    <section class="banner-header banner-img valign bg-img bg-fixed" data-overlay-dark="3" data-background="<?= esc_url($about['image_banner']['url']) ?>">
        <!-- Left Panel -->
        <div class="bg-light-under"></div>
        <div class="left-panel"></div>
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
    <!-- Team -->
    <section class="team section-padding">
        <div class="parallax-container js-text-parallax">
            <div class="fx-wrap" data-x="-200">
              <h3 class="fx-target">Team</h3>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-title"><?= $team['title'] ?></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 owl-carousel owl-theme">
                    <?php foreach ($team['list'] as $value): ?>
                        <div class="item">
                            <div class="img"> <img src="<?= esc_url($value['image']) ?>" alt=""> </div>
                            <div class="info">
                                <?= $value['title'] ?>
                                <div class="social valign">
                                    <div class="full-width">
                                        <p><?= $value['description'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials -->
    <!-- <section class="testimonials section-padding2">
        <div class="parallax-container js-text-parallax">
            <div class="fx-wrap" data-x="200">
              <h3 class="fx-target">Testimonials</h3>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-title"><?= $client_1 ?></h2>
                </div>
            </div>
            <div class="row">
                <?php foreach ($clients_say as $value): ?>
                    <div class="col-md-4">
                        <div class="item testimonials-box bg">
                            <span class="quote"><img src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/img/quot.png" alt=""></span>
                            <p><?= $value['description'] ?></p>
                            <div class="info">
                                <div class="author-img"> <img src="<?= esc_url($value['image']) ?>" alt=""> </div>
                                <div class="cont">
                                    <h6><?= $value['title'] ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </section> -->
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