<?php
/*
 Template Name: Contact
 */

 get_header();

$section_1 = get_field('section_1');
$section_2 = get_field('section_2');

?>

<div class="page-title-area">
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
</div>

<!--====== PAGE TITLE  PART ENDS ======-->

<!--====== CONTACT US PART START ======-->

<section class="contact-us-area contact-us-page">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="contact-us-box">
                    <h3 class="title"><?= $section_2['title']; ?></h3>
                    <p><?= $section_2['description']; ?></p>
                    <?php the_field('form'); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();