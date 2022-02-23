<?php
/*
 Template Name: Home
 */

get_header();

$section_1 = get_field('section_1');
$section_2 = get_field('section_2');
$section_3 = get_field('section_3');
$section_4 = get_field('section_4');

?>


<!--====== HERO PART START ======-->

<section class="hero-slider">
    <?php foreach ($section_1 as $section): ?>
        <div class="hero-area hero-2-area">
            <div class="section__bg" style="background-image: url(<?= $section['image']['url']; ?>);">
                <div id="particles-background-1" class="vertical-centered-box"></div>
                <div id="particles-foreground-1" class="vertical-centered-box"></div>
            </div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="hero-2-content">
                            <span data-animation="fadeInDown" data-delay="0.5s"><?= $section['title_1'] ?></span>
                            <h1 class="title" data-animation="fadeInLeft" data-delay="0.6s"><?= $section['title_2'] ?></h1>
                            <div class="play" data-animation="fadeInUp" data-delay="0.7s">
                                <a class="video-popup" href=""><img src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/play.svg" alt=""></a>
                                <p><?= $section['description_3'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach ?>
</section>

<!--====== HERO PART ENDS ======-->


<!--====== ABOUT 2 PART START ======-->

<section class="about-2-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-9">
                <div class="about-2-content mt-30">
                    <span><?= $section_2['title_1'] ?></span>
                    <h3 class="title"><?= $section_2['title_2'] ?></h3>
                    <p><?= $section_2['description_3'] ?></p>
                    <div class="item active mt-60">
                        <h4 class="title"><?= $section_2['title_4'] ?></h4>
                        <p><?= $section_2['title_5'] ?></p>
                    </div>
                    <div class="item mt-40">
                        <h4 class="title"><?= $section_2['title_6'] ?></h4>
                        <p><?= $section_2['title_7'] ?></p>
                    </div>
                    <a class="main-btn main-btn-3 mt-65" href="<?= $section_2['url_9'] ?>"><?= $section_2['title_8'] ?></a>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="about-2-thumb mt-30 animated wow fadeInRight" data-wow-duration="3000ms"
                    data-wow-delay="0ms">
                    <div class="thumb text-right">
                        <img src="<?= $section_2['image_10']['url']; ?>" alt="">
                    </div>
                    <div class="thumb-2 ml-80">
                        <img src="<?= $section_2['image_11']['url']; ?>" alt="">
                        <div class="box">
                            <h3 class="title"><span><?= $section_2['title_12'] ?></span></h3>
                            <span> <?= $section_2['title_13'] ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== ABOUT 2 PART ENDS ======-->

<!--====== SERVICE 2 PART START ======-->

<section class="service-2-area">
    <div class="section__bg" style="background-image: url(<?= $section_3['image_1']['url'] ?>);"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-3 section-title-4 text-center">
                    <?= $section_3['title_2'] ?>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <?php foreach ($section_3['group'] as $section): ?>
                <div class="col-lg-3 col-md-6 col-sm-11 d-flex">
                    <div class="service-2-item text-center mt-30 animated wow fadeInUp" data-wow-duration="1000ms"
                        data-wow-delay="0ms">
                        <div class="icon">
                            <img src="<?= $section['image_1'] ?>" alt="">
                        </div>
                        <?= $section['title'] ?>
                        <div class="service-dot">
                            <img src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/service-dot-2.png" alt="">
                            <div class="item">
                                <img src="<?= $section['image_2'] ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>

<!--====== SERVICE 2 PART ENDS ======-->

<!--====== TESTIMONIAL PART START ======-->

<section class="testimonial-2-area">
    <div class="bg" style="background-image: url(<?= $section_4['image'] ?>);"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <?= $section_4['title'] ?>
            </div>
        </div>
    </div>
</section>

<!--====== TESTIMONIAL PART ENDS ======-->
<?php
get_footer();