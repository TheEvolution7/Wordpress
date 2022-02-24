<?php 
get_header();
/*
 Template Name: Home
 */
$section_1 = get_field('section_1');
$section_2 = get_field('section_2');
$section_3 = get_field('section_3');
$section_4 = get_field('section_4');
$section_5 = get_field('section_5');
$section_6 = get_field('section_6');
$section_7 = get_field('section_7');
$section_8 = get_field('section_8');

?>

<!-- Hero Section Start -->
 <div class="hero-section-07 bg-images" style="background-image: url(<?= $section_1['banner'] ?>);">
      <div class="hero-section-07__bottom-shape">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/home-7/hreo-shape.png" alt="shape">
      </div>
      <div class="hero-section-07__shape-1 circle-x-02">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/home-7/round-shape.svg" class="w-100" alt="shape">
      </div>
      <div class="hero-section-07__circle-1 particle"></div>
      <div class="hero-section-07__circle-2 particle"></div>
      <div class="hero-section-07__circle-3 particle"></div>
      <div class="hero-section-07__circle-4 particle"></div>
      <div class="hero-section-07__circle-5 particle"></div>
      <div class="hero-section-07__circle-1 particle"></div>
      <div class="hero-section-07__circle-2 particle"></div>
      <div class="hero-section-07__circle-3 particle"></div>
      <div class="hero-section-07__circle-4 particle"></div>
      <div class="hero-section-07__circle-5 particle"></div>
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-8 col-md-9 col-sm-10 col-xs-10" data-aos="fade-right" data-aos-delay="1300"
            data-aos-duration="1000">
            <div class="hero-section-07__content hero-content mb-mobile-lg text-center">
              <h1 class="title heading-light"><?= $section_1['title'] ?></h1>
              <p class="text-light text"><?= $section_1['subtitle'] ?></p>
              <div class="hero-section-07__content--btn-group">
                <a class="btn hero-btn btn-primary btn-primary-hvr" href="<?= $section_1['link'] ?>"><?= $section_1['button'] ?></a>
                <!-- <a class="btn-2 popup-btn" data-fancybox href="https://www.youtube.com/watch?v=LWZ7iytIA6k">
                  <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/home-7/hero-play.svg" alt="icon"></div>
                  <span>Watch video</span>
                </a> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Hero Section End -->

    <!-- Content Section Start -->
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
                <img src="image/new/ic-1.svg" width="100" alt="card">
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
    <!-- Content Section End -->
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


    <!-- About Section Start -->
    <div class="about-section-02 pb-0 pt-0">
      <div class="scetion-shape">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/home-2/section-shape-2.png" alt="shape" class="w-100">
      </div>
      <div class="about-section-02__shape">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/home-5/shape-right.svg" alt="shape" class="w-100 make-it-inline">
      </div>
      <div class="container pb-5 pt-5">
        <div class="row pt-5 align-items-center text-lg-start text-center justify-content-center">
          <div class="col-xl-6 col-lg-7 col-md-9 col-sm-10 col-xs-11">
            <div class="row align-items-center justify-content-center">
              <div class="col-xl-6 col-lg-12 col-md-12">
                <div class="row">
                <?php foreach(array_slice($section_3['group'], 0, 2) as $section): ?>
                  <div class="col-xl-12 col-md-6">
                    <div class="card-about-01">
                      <div class="card-about-01--img">
                        <img src="<?= $section['icon'] ?>" alt="<?= $section['title'] ?>">
                      </div>
                      <div class="card-about-01__body">
                        <h5 class="card-about-01__body--title"><?= $section['title'] ?></h5>
                        <p class="text-dark card-about-01__body--text"><?= $section['subtitle'] ?></p>
                      </div>
                    </div>
                  </div>
                <?php  endforeach ?>
                  
                </div>
              </div>
              <?php foreach(array_slice($section_3['group'], 2, 3) as $section): ?>
                <div class="col-lg-6 col-md-6">
                <div class="row">
                  <div class="col-xl-12">
                    <div class="card-about-01">
                      <div class="card-about-01--img">
                      <img src="<?= $section['icon'] ?>" alt="<?= $section['title'] ?>">
                      </div>
                      <div class="card-about-01__body">
                      <h5 class="card-about-01__body--title"><?= $section['title'] ?></h5>
                        <p class="text-dark card-about-01__body--text"><?= $section['subtitle'] ?></p></div>
                    </div>
                  </div>
                </div>
              </div>
              <?php  endforeach ?>
            </div>
          </div>
          <div class="col-xl-5 col-lg-5 offset-xl-1 col-md-9 col-sm-10 col-xs-11" data-aos="fade-up"
            data-aos-delay="500" data-aos-duration="1000">
            <div class="about-section-02__content block-title">
              <h6 class="subtitle text-secondary mb-20"><?= $section_3['subtitle'] ?></h6>
              <h2 class="title"><?= $section_3['title'] ?></h2>
              <p class="text-dark"><?= $section_3['content'] ?></p>
              <a href="<?= $section_3['link'] ?>" class="btn btn-primary"><?= $section_3['button'] ?></a>
            </div>
          </div>
        </div>
      </div>
      <div class="scetion-shape">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/home-2/section-shape.png" alt="shape" class="w-100">
      </div>
    </div>
    <!-- About Section End -->


    <!-- Contact  Section Start -->
    <div class="content-section-03">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-6 col-xxl-5 col-xl-6 col-md-8 col-xs-11 mb-mobile-lg">
            <div class="content-section-03__texts block-title text-center text-lg-start" data-aos="fade-left"
              data-aos-duration="800">
              <h6 class="subtitle text-secondary"><?= $section_4['subtitle'] ?></h6>
              <h2 class="title"><?= $section_4['title'] ?> </h2>
              <p class="text-dark"><?= $section_4['content'] ?></p>
              <a href="<?= $section_4['link'] ?>" class="btn btn-primary btn-primary-hvr"><?= $section_4['button'] ?></a>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xxl-6 col-md-9 col-xl-6 offset-xxl-1 col-xs-11 ">

            <div class="video-block video-block--02" data-aos="zoom-in" data-aos-duration="800">
              <img src="<?= $section_4['image'] ?>" alt="<?= $section_4['title'] ?>" class="w-100">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Contact  Section End -->

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
                <?php $i=0;foreach($section_5 as $section): ?>   
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
            <?php $i=0;foreach($section_5 as $section): ?>   
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
    <!-- Content Section End -->

    <!-- Content Section Start -->
    <div class="content-section-04">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-xl-6 col-lg-6 col-md-8 col-xs-11">
            <div class="content-texts block-title text-center text-lg-start">
              <h6 class="subtitle text-primary"><?= $section_6['subtitle'] ?></h6>
              <h2 class="title "><?= $section_6['title'] ?></h2>
              <p class="text-dark"><?= $section_6['content'] ?></p>
              <a href="<?= $section_6['link'] ?>" class="btn btn-primary btn-primary-hvr"><?= $section_6['button'] ?></a>
            </div>
          </div>
          <div class="col-xl-5 offset-xl-1 col-lg-6 col-md-10 col-xs-10">
            <div class="row justify-content-center content-section-04__widget">
          
            <?php $i = 1;foreach($section_6['group'] as $section): ?>  
              <div class="col-lg-12 col-sm-6 col-10 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200"  data-aos-duration="1000">
                <div class="widget widget-content--02 widget-column-till-md ">
                  <div class="widget-icon">
                    <?= $i ?>
                  </div>
                  <div class="widget-text">
                    <h3 class="widget-title"><?= $section['title'] ?></h3>
                    <p class="widget-text"><?= $section['subtitle'] ?></p>
                  </div>
                </div>
              </div>
            <?php $i++;endforeach  ?>    
            </div>
          </div>
        </div>
      </div>
<!--       <div class="scetion-shape">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/home-2/section-shape.png" alt="shape" class="w-100">
      </div> -->
    </div>
    <!-- Content Section End -->


    <!-- Content Section Start -->
<!--     <div class="content-section-15">
      <div class="content-section-15__circle-1 particle"></div>
      <div class="content-section-15__circle-2 particle"></div>
      <div class="content-section-15__circle-3 particle"></div>
      <div class="content-section-15__circle-1 particle"></div>
      <div class="content-section-15__circle-2 particle"></div>
      <div class="content-section-15__circle-3 particle"></div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-xl-5 col-lg-6 col-md-8 col-xs-10 col-sm-11">
            <div class="block-title content-section-15__content mb-mobile-lg">
              <h6 class="subtitle text-secondary mb-20"></h6>
              <h2 class="title"><?= $section_7['title'] ?></h2>
              <p class="text-dark"><?= $section_7['subtitle'] ?></p>
              <a class="btn btn-primary btn-primary-hvr" href="<?= $section_7['link'] ?>"><?= $section_7['button'] ?></a>
            </div>
          </div>
          <div class="col-lg-6 offset-xl-1 col-lg-6">
            <div class="row justify-content-center widgets-row content-section-15__card-group">
            <?php $i = 0;foreach($section_7['group'] as $section): ?>    
              <div class="col-xl-6 col-lg-6 col-sm-6 col-xs-6 col-11" data-aos="fade-up" data-aos-delay="<?= $i+=300 ?>" data-aos-duration="1000">
                <div class="widget widget-card">
                  <div class="widget-icon">
                    <img src="<?= $section['icon'] ?>" alt="<?= $section['title'] ?>">
                  </div>
                  <div class="widget-text">
                    <h3 class='widget-title'><?= $section['title'] ?></h3>
                    <p class='widget-text'><?= $section['subtitle'] ?></p>
                  </div>
                </div>
              </div>
            <?php $i++;endforeach  ?>  
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- Content Section End -->

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
              <h2 class="title heading-light"><?= $section_8['title'] ?>
              </h2>
              <p class="heading-light"><?= $section_8['subtitle'] ?>
              </p>
            </div>

            <?= $section_8['form'] ?>

          </div>
        </div>
      </div>
    </div>
    <!-- Cta Section End -->
<?php get_footer(); ?>