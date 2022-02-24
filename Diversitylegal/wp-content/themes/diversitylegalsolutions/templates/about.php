<?php 
get_header();
/*
 Template Name: About
 */
$section_1 = get_field('section_1');
$section_2 = get_field('section_2');
$section_3 = get_field('section_3');
$section_4 = get_field('section_4');
?>
 <!-- Breadcrumb Section Start -->
    <div class="breadcrumb-section">
      <div class="breadcrumb-section__shape-1 floating-Y-animation-reverse">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/breadcrumb/shape-1.svg" class="make-it-inline w-100" alt="breadcrumb-shape">
      </div>
      <div class="breadcrumb-section__shape-2 circle-animation">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/breadcrumb/shape-2.svg" class="make-it-inline w-100" alt="breadcrumb-shape">
      </div>
      <div class="breadcrumb-section__shape-3  floating-Y-animation-02">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/breadcrumb/shape-3.svg" class="make-it-inline w-100" alt="breadcrumb-shape">
      </div>
      <div class="breadcrumb-section__bg-shape">
        <img src="<?= $section_1['image'] ?>" alt="<?= the_title(); ?>">
      </div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-8 col-lg-8 col-md-10 col-sm-11 col-xs-11">
            <div class="breadcrumb-section__content hero-content text-center">
              <h1 class="heading-light title mb-20"><?= the_title(); ?></h1>
              <p class="text-light"><?= $section_1['text'] ?></p>
              <!-- <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                  <li class="breadcrumb-item">Home</li>
                  <li class="breadcrumb-item active" aria-current="page"><?= the_title(); ?></li>
                </ol>
              </nav> -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Breadcrumb Section End -->
    <!-- About Section Start -->
    <div class="content-section-23 pb-5" style="background-color: #fff;">
      <div class="container">
        <div class="row align-items-center">
          <div class="offset-xl-1 col-xl-6 col-lg-6 col-md-7 col-xs-10 col-sm-10 order-lg-2">
            <div class="content-section-23__image-group thumb-img-about mb-mobile-lg" data-aos="fade-left"
              data-aos-delay="1300" data-aos-duration="1000">
              <img src="<?= $section_2['image'] ?>" alt="<?= $section_2['title'] ?>" class="mw-100">
              <!-- <div class="content-section-23__image-group--shape">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/home-10/content-2-shape.svg" class="w-100" alt="shape">
              </div> -->
              <!-- <div class="content-section-23__image-group--m-1 floating-Y-animation-reverse">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/new/ic-1.svg" width="100" alt="card">
              </div> -->
              <div class="content-section-23__image-group--m-2 floating-Y-animation">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/logo/logo-white.png" class="w-100" alt="card">
              </div>
            </div>
          </div>
          <div class="col-xl-5 col-lg-6 col-md-9 col-11">
            <div class="block-title content-section-23__content" data-aos="fade-up" data-aos-duration="800">
              <h6 class="subtitle text-secondary mb-20"><?= $section_2['subtitle'] ?></h6>
              <h2 class="title"><?= $section_2['title'] ?></h2>
              <p class="text-dark"><?= $section_2['content'] ?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="scetion-shape">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/home-2/section-shape-2.png" alt="shape" class="w-100">
      </div>
    </div>
    <!-- About Section End -->
    <!-- Fact Section Start -->
<!--     <div class="counter-section-10">
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-xl-4 col-lg-5 mb-mobile-lg" data-aos="fade-right" data-aos-delay="500"
            data-aos-duration="1000">
            <div class="counter-section-10__widget">
            <?php foreach($section_2['group'] as $section): ?>
              <div class="widget widget-column widget-column-center widget-counter">
                <h3 class='widget-title'><?= $section['text'] ?></h3>
                <p class='widget-text'><?= $section['title'] ?></p>
              </div>
            <?php endforeach ?>
            </div>
          </div>
          <div class="col-xl-6 offset-xl-2 col-lg-7 col-md-10 col-xs-11" data-aos="fade-left" data-aos-delay="500"
            data-aos-duration="1000">
            <div class="block-title counter-section-10__content text-center text-lg-start">
              <h2 class="title">
                <?= $section_2['title_2'] ?>
              </h2>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- Fact Section End -->
    <!-- Core value Section Start -->
    <div class="about-section-03 about-section-03--2">
      <div class="about-section-03--2__shape">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/about/shape.svg" alt="about-shape" class="w-100">
      </div>
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-xl-4 col-lg-4 col-md-8 col-xs-10 col-sm-10 order-lg-2" data-aos="fade-left"
            data-aos-delay="500" data-aos-duration="1000">
            <div class="about-section-03__content mb-mobile-lg">
              <div class="block-title content-title">
                <h2 class="title"><?= $section_3['title'] ?></h2>
                <p><?= $section_3['subtitle'] ?></p>
                <!-- <a class="btn btn-secondary btn-secondary-hvr" href="#">Get Started</a> -->
              </div>
            </div>
          </div>
          <div class="col-xl-8 col-lg-8 col-md-8 col-xs-10 col-sm-10 order-lg-1">
            <div class="about-section-03__widget">
            <?php foreach($section_3['group'] as $section): ?>
              <div class="about-section-03__widget--wrapper" data-aos="fade-right" data-aos-delay="NaN"
                data-aos-duration="1200">
                <div class="widget widget-content widget-column-till-md">
                  <div class="widget-icon">
                    <img src="<?= $section['image'] ?>" alt="<?= $section['title'] ?>">
                  </div>
                  <div class="widget-text">
                    <h3 class='widget-title'><?= $section['title'] ?></h3>
                    <p class='widget-text'><?= $section['subtitle'] ?></p>
                  </div>
                </div>
              </div>
            <?php endforeach ?> 
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Core value Section End -->
    
    

    <!-- Cta Section Start -->
    <div class="cta-section-10">
      <div class="cta-section-10__shape-1  floating-X-animation-reverse-01">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/home-10/cta-shape-1.svg" class="make-it-inline w-100" alt="shape">
      </div>
      <div class="cta-section-10__shape-2 floating-Y-animation-reverse-03">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/home-10/cta-shape-2.svg" class="make-it-inline w-100" alt="shape">
      </div>
      <div class="cta-section-10__shape-3 floating-X-animation-reverse-01">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/home-10/cta-shape-3.svg" class="make-it-inline w-100" alt="shape">
      </div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 col-sm-10" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
            <div class="block-title text-center">
              <h2 class="title heading-light"><?= $section_4['title'] ?>
              </h2>
              <p class="heading-light"><?= $section_4['subtitle'] ?>
              </p>
            </div>

            <?= $section_4['form'] ?>

          </div>
        </div>
      </div>
    </div>
    <!-- Cta Section End -->
<?php get_footer(); ?>