<?php
/*
 Template Name: About
 */

get_header();

$section_1 = get_field('section_1');
$section_2 = get_field('section_2');
$section_3 = get_field('section_3');
$section_4 = get_field('section_4');

?>

<section class="page-title-area">
    <div class="section__bg" style="background-image: url(<?= $section_1['image']; ?>);"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title-content text-center">
                    <h3 class="title"><?= $section_1['title_1']; ?></h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?= $section_1['title_1']; ?></li>
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

<!--====== ABOUT 2 PART START ======-->

<section class="about-2-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-9">
                <div class="about-5-content about-2-content mt-30">
                    <?= $section_2['title_1']; ?>
                    <ul class="nav nav-pills mb-4" id="pills-tab" role="tablist">
                        <?php foreach ($section_2['tab'] as $key => $section): ?>
                            <?php if (array_key_first($section_2['tab']) == $key): ?>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="<?= $key ?>" data-toggle="pill" href="#<?= $key ?>"
                                        role="tab" aria-controls="pills-home" aria-selected="true"><?= ucfirst($key) ?></a>
                                </li>
                            <?php else: ?>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="<?= $key ?>" data-toggle="pill" href="#<?= $key ?>"
                                        role="tab" aria-controls="pills-profile" aria-selected="false"><?= ucfirst($key) ?></a>
                                </li>
                            <?php endif ?>
                        <?php endforeach ?>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <?php foreach ($section_2['tab'] as $key => $section): ?>
                            <div class="tab-pane fade <?= array_key_first($section_2['tab']) == $key ? 'show active' : '' ?>" id="<?= $key ?>" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                                <div class="text">
                                    <?= $section['text'] ?>
                                </div>
                                <div class="list d-sm-flex d-block">
                                    <?= $section['content'] ?>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="about-2-thumb mt-30 animated wow fadeInRight" data-wow-duration="3000ms"
                    data-wow-delay="0ms">
                    <div class="thumb text-right">
                        <img src="<?= $section_2['image_1']; ?>" alt="">
                    </div>
                    <div class="thumb-2 ml-80">
                        <img src="<?= $section_2['image_2']; ?>" alt="">
                        <div class="box">
                            <?= $section_2['title_3']; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== ABOUT 2 PART ENDS ======-->

<!--====== SERVICES 5 PART START ======-->

<section class="service-2-area">
    <div class="section__bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-3 section-title-4 text-center">
                    <h3 class="title"><?= $section_3['title'] ?></h3>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <?php foreach ($section_3['group'] as $section): ?>
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

<!--====== SERVICES 5 PART ENDS ======-->

<!--====== CLIENT PART START ======-->

<section class="client-area">
    <div class="section__bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="client-slide">
                    <div class="item">
                        <img src="<?= $section_4['image'] ?>" alt="">
                        <div class="content">
                            <h3><?= $section_4['title'] ?></h3>
                            <div class="info d-flex justify-content-center">
                                <h5 class="title"><?= $section_4['title_1'] ?></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();