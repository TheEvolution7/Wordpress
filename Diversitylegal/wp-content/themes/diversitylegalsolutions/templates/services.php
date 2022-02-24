<?php 
get_header();
/*
 Template Name: Services
 */
$section_1 = get_field('section_1');
$section_2 = get_field('section_2');
$section_3 = get_field('section_3');
$section_4 = get_field('section_4');
$section_5 = get_field('section_5');
?>
<!-- Breadcrumb Section Start -->
<div class="breadcrumb-section">
      <div class="breadcrumb-section__bg-shape">
        <img src="<?= $section_1['image'] ?>" alt="<?= the_title(); ?>">
      </div>
      <div class="breadcrumb-section__shape-1 floating-Y-animation-reverse">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/breadcrumb/shape-1.svg" class="make-it-inline w-100" alt="breadcrumb-shape">
      </div>
      <div class="breadcrumb-section__shape-2 circle-animation">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/breadcrumb/shape-2.svg" class="make-it-inline w-100" alt="breadcrumb-shape">
      </div>
      <div class="breadcrumb-section__shape-3  floating-Y-animation-02">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/breadcrumb/shape-3.svg" class="make-it-inline w-100" alt="breadcrumb-shape">
      </div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-8 col-lg-8 col-md-10 col-sm-11 col-xs-11">
            <div class="breadcrumb-section__content hero-content text-center">
              <h1 class="heading-light title mb-20"><?= $section_1['title'] ?></h1>
              <p class="text-light"><?= $section_1['text'] ?></p>
              <!-- <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                  <li class="breadcrumb-item">Home</li>
                  <li class="breadcrumb-item" aria-current="page"><?php the_title() ?></li>
                </ol>
              </nav> -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Breadcrumb Section End -->
    <!-- Service Section Start -->
    <div class="service-section-01 service-section-01--2">
      <div class="service-section-01--2__shape-1">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/service/shape.svg" alt="shape" class="w-100">
      </div>
      <div class="service-section-01--2__shape-2">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/service/dots.svg" alt="shape" class="w-100">
      </div>
      <div class="container">
        <div class="row">
          <div class="section-title text-center">
            <h2 class="title"><?= $section_2['title'] ?></h2>
            <p class="text-dark">
              <?= $section_2['subtitle'] ?>
            </p>
          </div>
        </div>
        <div class="row justify-content-center justify-content-sm-start feature-widgets-row">
        <?php foreach($section_2['group'] as $section): ?>
          <div class="col-lg-4 col-md-6 col-sm-6 col-xs-8" data-aos="fade-left" data-aos-duration="800">
            <div class="widget widget-column service-section-01__card service-section-01--2__card">
              <div class="widget-icon">
                <img src="<?= $section['icon'] ?>" alt="<?= $section['title'] ?>">
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
    <!-- Service Section End -->
    <!-- Content Section Start -->
    <div class="content-section-08">
      <div class="content-section-08__shape-1 circle-x">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/home-4/content-shape-5.svg" alt="shape" class="make-it-inline">
      </div>
      <div class="content-section-08__shape-2 shape-x-1">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/home-4/content-shape-6.svg" alt="shape" class="make-it-inline fill-secondary">
      </div>
      <div class="container">
        <div class="content-section-08__tab">
          <div class="row justify-content-center">
            <div class="col-xl-10 col-xs-11">
              <div class="content-section-08__tab" data-aos-duration="500">
                <ul class="nav nav-tabs nav-tab--content-2 nav-tab--content-2--02 " id="myTab" role="tablist">
                <?php $i=0;foreach($section_3 as $section): ?>   
                  <li class="nav-item" role="presentation">
                    <a class="nav-link  <?= $i == 0 ? 'active' : null ?>" id="tab-<?= $i ?>" data-bs-toggle="tab" href="#title-<?= $i ?>" role="tab"
                      aria-controls="title-<?= $i ?>" aria-selected="<?= $i == 0 ? 'true' : 'false' ?>"><?= $section['title_tab'] ?></a>
                  </li>
                <?php $i++;endforeach  ?> 
                </ul>

              </div>
            </div>
          </div>
          <div class="tab-content tab-content--content-2" id="myTabContent" data-aos="fade-up" data-aos-duration="500"
            data-aos-delay="300">
            <?php $i=0;foreach($section_3 as $section): ?>   
            <div class="tab-pane fade <?= $i == 0 ? 'active show' : null ?>" id="title-<?= $i ?>" role="tabpanel" aria-labelledby="tab-<?= $i ?>">
              <div class="row align-items-center justify-content-center">
                <div class="col-xl-7 col-lg-6 col-md-8 col-sm-10 col-xs-11">
                  <div class="content-section-08__image-group">
                    <img class="w-100" src="<?= $section['image'] ?>" alt="<?= $section['title'] ?>">
                    <!-- <div class="content-section-08__image-group--card">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/image/home-4/content-2-card.png" alt="content image">
                    </div> -->
                    <div class="content-section-08__image-group--shape">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/image/home-4/content-shape-4.svg" alt="content image" class="make-it-inline">
                    </div>
                  </div>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-8 col-11" data-aos="fade-left" data-aos-delay="500"
                  data-aos-duration="1000">
                  <div class="content-section-08__content text-center text-lg-start block-title">
                    <h2 class="title heading-light"><?= $section['title'] ?></h2>
                    <p class="text-light"><?= $section['subtitle'] ?></p>
                    <a class="btn btn-primary btn-primary-hvr" href="<?= $section['link'] ?>"><?= $section['button'] ?></a>
                  </div>
                </div>
              </div>
            </div>
            <?php $i++;endforeach  ?>   
          </div>
        </div>
      </div>
    </div>
   
    <!-- Testimonial Section Start -->
    <!-- <div class="testimonil-section-10">
      <div class="container">
        <div class="section-title content-title text-center">
          <h6 class="subtitle text-grren mb-20"><?= $section_4['subtitle'] ?></h6>
          <h2 class="title"><?= $section_4['title'] ?> </h2>
        </div>
        <div class="row align-items-center justify-content-center">
          <div class="col-xl-3 offset-xl-1 col-lg-6 col-md-8">
            <div class="testimonil-section-10__image-group" data-aos="zoom-in" data-aos-duration="800">
              <img src="<?= $section_4['image'] ?>" alt="" class="w-100">
            </div>
          </div>
          <div class="col-xl-6 offset-xl-1 col-lg-6 col-md-10">
            <div class="testimonil-slider--02 mobile-slider">
            <?php foreach($section_4['group'] as $section): ?>  
              <div class="slide">
                <div class="testimonil-section-10__content">
                  <p class="heading-dark text"><?= $section['content'] ?> </p>
                  <div class="client-info">
                    <div class="client-info--img">
                      <img src="<?= $section['image'] ?>" alt="<?= $section['title'] ?>">
                    </div>
                    <div class="client-info--texts">
                      <h6 class="name"><?= $section['title'] ?></h6>
                      <span class="profession text-dark"><?= $section['subtitle'] ?></span>
                    </div>
                  </div>
                  <div class="quote">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/service/qutes.svg" alt="quote">
                  </div>
                </div>
              </div>
            <?php endforeach ?>  
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- Testimonial Section End -->
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
              <h2 class="title heading-light"><?= $section_5['title'] ?>
              </h2>
              <p class="heading-light"><?= $section_5['subtitle'] ?>
              </p>
            </div>

            <?= $section_5['form'] ?>

          </div>
        </div>
      </div>
    </div>
    <!-- Cta Section End -->
<?php get_footer(); ?>