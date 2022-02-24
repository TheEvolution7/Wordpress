<?php 
get_header();
/*
 Template Name: Contact
 */
$section_1 = get_field('section_1');
$section_2 = get_field('section_2');
?>
 <!-- Breadcrumb Section Start -->
 <div class="breadcrumb-section">
      <div class="breadcrumb-section__bg-shape">
        <img src="<?= $section_1['image'] ?>" alt="<?= $section_1['title'] ?>">
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
                  <li class="breadcrumb-item" aria-current="page"><?= the_title(); ?></li>
                </ol>
              </nav> -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Breadcrumb Section End -->
    <!-- Form Section Start -->
    <div class="contactform-section-01">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-4 col-lg-4 col-md-8 mb-mobile-lg">
            <div class="contactform-section-01__sidebar">
              <h4 class="title"><?= $section_2['heading'] ?></h4>
              <div class="contactform-section-01__sidebar--body">
                <!-- <div class="address">
                  <h6 class="address--title"><?= $section_2['title_1'] ?></h6>
                  <div class="address__box">
                    <div class="icon">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/image/contact/small-map-icon.svg" alt="map-icon">
                    </div>
                    <span><?= $section_2['address'] ?></span>
                  </div>
                </div> -->
                <div class="info">
                  <h6 class="info--title"><?= $section_2['title_2'] ?></h6>
                  <ul class="info__box m-0 p-0">
                    <li class="info__box--lists">
                      <i class="fas fa-phone-alt"></i>
                      <a href="tel:<?= $section_2['phone'] ?>"><?= $section_2['phone'] ?></a>
                    </li>
                    <li class="info__box--lists">
                      <i class="fas fa-envelope"></i>
                      <a href="mailto:<?= $section_2['email'] ?>"> <?= $section_2['email'] ?></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-7 offset-xl-1 col-lg-8 col-md-10">
            <div class="contactform-section-01__from">
              <?= $section_2['form'] ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Form Section End -->
    <!-- Map Section Start -->
    <div class="contactmap-section">
      <div class="container-fluid g-0">
        <div class="contactmap-section__map">
          
        </div>
      </div>
    </div>
    <!-- Map Section End -->
<?php get_footer(); ?>