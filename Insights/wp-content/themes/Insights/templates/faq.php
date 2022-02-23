<?php
/*
 Template Name: Faq
 */

 get_header();
 $section_1 = get_field('section_1');
 $section_2 = get_field('section_2');
?>

<div class="page-title-area">
    <div class="section__bg" style="background-image: url(<?= $section_1['image']; ?>);"></div>
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

<!--====== FAQ PART START ======-->

<section class="faq-section">
    <div class="container">
        <div class="row">
            <?php $i = 0 ?>
            <?php foreach ($section_2 as $key => $section): ?>
                <div class="col-12">
                    <h3 class="title"><?= $key ?></h3>
                    <div class="accordion1" id="accordion1">
                        <?php foreach ($section as $k => $value): ?>
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="main-btn btn-block text-left" type="button"
                                            data-toggle="collapse" data-target="#collapse<?= $i . '-' . $k?>" aria-expanded="true"
                                            aria-controls="collapse<?= $i . '-' . $k?>">
                                            <?= $value['title'] ?>
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapse<?= $i . '-' . $k?>" class="collapse show" aria-labelledby="heading<?= $i . '-' . $k?>"
                                    data-parent="#accordion1">
                                    <div class="card-body">
                                        <?= $value['description'] ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
                <?php $i++ ?>
            <?php endforeach ?>
            
        </div>
    </div>
</section>
<?php
get_footer();