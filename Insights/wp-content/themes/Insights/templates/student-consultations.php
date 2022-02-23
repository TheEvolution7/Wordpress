<?php
/*
 Template Name: Student Consultations
 */

 get_header();

$section_1 = get_field('section_1');
$section_2 = get_field('section_2');
$section_3 = get_field('section_3');
$section_4 = get_field('section_4');
$section_5 = get_field('section_5');
?>

<!--====== PAGE TITLE  PART START ======-->

<section class="page-title-area">
    <div class="section__bg" style="background-image: url(<?= $section_1['image']['url']; ?>);"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title-content text-center">
                    <h3 class="title"><?= $section_1['title_1']; ?></h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?= $section_1['title_2']; ?></li>
                        </ol>
                    </nav>
                    <div class="scroll-to-down">
                        <a href="#portfolio-scroll"><i class="fal fa-arrow-down"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== PAGE TITLE  PART ENDS ======-->

<!--====== SERVICE PART START ======-->

<section class="service-area service-page-area pb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="section-title-3 text-center">
                    <h3 class="title"><?= $section_2['title']; ?></h3>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <?php foreach ($section_2['group'] as $section): ?>
                <div class="col-lg-3 col-6 d-flex">
                    <div class="service-2-item _2 text-center mt-30 animated wow fadeInUp" data-wow-duration="1000ms"
                        data-wow-delay="0ms">
                        <div class="icon">
                            <img src="<?= $section['image_1'] ?>" alt="">
                        </div>
                        <h4 class="title"><?= $section['title'] ?></h4>

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

<!--====== SERVICE PART ENDS ======-->

<!--====== PORTFOLIO STYLE 4 PART START ======-->

<section class="portfolio-style-4-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-9">
                <div class="section-title-3 text-center">
                    <h3 class="title"><?= $section_3['title'] ?></h3>
                </div>
            </div>
        </div>
        <div class="row grid-3">
            <?php foreach ($section_3['group'] as $section): ?>
                <div class="col-md-4 col-12">
                    <div class="portfolio-style-4-item mt-30">
                        <div class="portfolio-thumb _long">
                            <img src="<?= $section['image'] ?>" alt="">
                            <h4><?= $section['title_1'] ?></h4>
                        </div>
                        <div class="portfolio-content">
                            <h5 class="title"><?= $section['title_2'] ?></h5>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>

<!--====== PORTFOLIO STYLE 4 PART ENDS ======-->

<!--====== SUBSCRIBE PART START ======-->

<section class="subscribe-area">
    <div class="section__bg" style="background-image: url(<?= $section_4['image'] ?>);"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="subscribe-item text-center">
                    <h3 class="title"><?= $section_4['title_`'] ?></h3>
                    <button type="button" class="main-btn main-btn-3 mt-30 text-uppercase"><?= $section_4['title_2'] ?></button>
                </div>
            </div>

        </div>
    </div>
</section>

<!--====== SUBSCRIBE PART ENDS ======-->

<!--====== TESTIMONIAL PART START ======-->

<section class="testimonial-area service-testimonial-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-9">
                <div class="section-title-3 text-center">
                    <h3 class="title"><?= $section_5['title_1'] ?></h3>
                    <p><?= $section_5['title_2'] ?></p>
                </div>
            </div>
        </div>
        <div class="row testimonial-active">
            <?php $i = 0; foreach ($section_5['group'] as $section): ?>
                <?php if ($i++ % 2 == 0): ?>
                    <div class="col-lg-4">
                        <div class="testimonial-item testimonial-5-item mt-30">
                            <div class="box-content">
                                <div class="quote">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="53.729" height="40"
                                        viewBox="0 0 53.729 40">
                                        <g id="Group_21" data-name="Group 21" transform="translate(0 0)">
                                            <path data-name="Union 1"
                                                d="M47.055,40a1.21,1.21,0,0,1-1.018-.509L31.106,19.357A12.178,12.178,0,0,1,29.07,11.1,12.364,12.364,0,1,1,45.98,23.881l6.957,14.253A1.313,1.313,0,0,1,51.806,40ZM18.1,40a1.209,1.209,0,0,1-1.018-.509L2.149,19.357A12.77,12.77,0,0,1,.056,11.043,12.395,12.395,0,1,1,17.023,23.881L23.98,38.134A1.313,1.313,0,0,1,22.849,40Z"
                                                transform="translate(0 0)" />
                                        </g>
                                    </svg>
                                </div>
                                <p><?= $section['description'] ?>
                                </p>
                                <div class="info">
                                    <img src="<?= $section['image'] ?>" alt="">
                                    <h5 class="title"><?= $section['title'] ?></h5>
                                    <span><?= $section['sub'] ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="col-lg-4">
                        <div class="testimonial-item testimonial-5-item mt-30">
                            <div class="box-content">
                                <div class="quote">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="53.729" height="40"
                                        viewBox="0 0 53.729 40">
                                        <g id="Group_21" data-name="Group 21" transform="translate(0 0)">
                                            <path data-name="Union 1"
                                                d="M47.055,40a1.21,1.21,0,0,1-1.018-.509L31.106,19.357A12.178,12.178,0,0,1,29.07,11.1,12.364,12.364,0,1,1,45.98,23.881l6.957,14.253A1.313,1.313,0,0,1,51.806,40ZM18.1,40a1.209,1.209,0,0,1-1.018-.509L2.149,19.357A12.77,12.77,0,0,1,.056,11.043,12.395,12.395,0,1,1,17.023,23.881L23.98,38.134A1.313,1.313,0,0,1,22.849,40Z"
                                                transform="translate(0 0)" />
                                        </g>
                                    </svg>
                                </div>
                                <p><?= $section['description'] ?>
                                </p>
                                <div class="info">
                                    <img src="<?= $section['image'] ?>" alt="">
                                    <h5 class="title"><?= $section['title'] ?></h5>
                                    <span><?= $section['sub'] ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif ?>
            <?php endforeach ?>
            
        </div>
    </div>
</section>

<!--====== TESTIMONIAL PART ENDS ======-->
<?php
get_footer();