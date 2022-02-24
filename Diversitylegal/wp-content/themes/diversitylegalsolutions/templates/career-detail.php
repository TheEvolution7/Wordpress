<?php 
get_header();
$section_1 = get_field('section_1',15);
$file = get_field('file');
$section_5 = get_field('section_5',15);
$section_6 = get_field('section_6',15);
?>
<!-- Breadcrumb Section Start -->
<div class="breadcrumb-section">
  <div class="breadcrumb-section__bg-shape">
    <img src="<?= $section_1['banner'] ?>" alt="Career Details">
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
          <h1 class="heading-light title mb-20">Career Details</h1>
          <p class="text-light"><?= $section_1['text'] ?></p>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
              <li class="breadcrumb-item">Home</li>
              <li class="breadcrumb-item">Career</li>
              <li class="breadcrumb-item" aria-current="page"><?php the_title(); ?></li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Breadcrumb Section End -->
<!-- Content Section Start -->
<div class="content-section-25">
  <div class="container">
    <div class="row">
      <div class="col-xl-4 col-lg-4 col-md-8 mb-mobile-lg">
        <div class="content-section-25__sidebar">
          <h6 class="title">Application Process</h6>
          <ul class="content-section-25__sidebar--lis">
            <li>1. Download Application
              <div class="download-btn-group">
                <a href="<?= $file['pdf'] ?>">
                  <div class="icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/career/pdf.svg" class="make-it-inline" alt="pdf-icon">
                  </div>
                  <p>Download.Pdf</p>
                </a>
                <a href="<?= $file['doc'] ?>">
                  <div class="icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/career/doc.svg" class="make-it-inline" alt="doc-icon">
                  </div>
                  <p>Download.Doc</p>
                </a>
              </div>
            </li>
            <li>2. Fill Information</li>
              <li>3. Send Back To Us</li>
          </ul>
        </div>
      </div>
      <div class="col-xl-8 col-lg-8 col-md-10">
        <div class="content-section-25__content mb-5">
          <div class="block-title content-section-25__content--texts">
            <h2 class="title"><?php the_title(); ?></h2>
          </div>
          <div class="content-section-25__content--list">
            <?php the_content(); ?>
          </div>
          
        </div>
          <?= $section_6['form_career']; ?>
      </div>
    </div>
  </div>
</div>
<!-- Content Section End -->
<!-- Footer Section Start -->
<div class="cta-section-04 cta-bg-group-1">
  <div class="container">
    <div class="cta-section-04__wrapper overflow-hidden">
      <div class="row justify-content-center">
        <div class="col-xl-10 col-md-10 co-xs-12 col-sm-12 col-12">
          <div class="row justify-content-center">
            <div class="col-xl-6 col-md-8">
              <div class="cta-section-04__contennt text-center text-xl-start">
                <div class="block-title" data-aos="fade-right" data-aos-duration="800">
                  <h2 class="heading-light title"><?= $section_5['title'] ?> </h2>
                  <p class="heading-light"><?= $section_5['subtitle'] ?> </p>
                </div>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="cta-section-04__button-group m-auto" data-aos="fade-left" data-aos-duration="800">
                <a href="<?= $section_5['link_app_store'] ?>">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/image/common/appstore.png" class="w-100" alt="app store">
                </a>
                <a href="<?= $section_5['link_google_play'] ?>">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/image/common/playstore.png" class="w-100" alt="app store">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="cta-section-04__wrapper--shape-1" data-aos="fade-left" data-aos-delay="1300" data-aos-duration="1000">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/common/cta-shape-1.svg" class="make-it-inline" alt="shape">
      </div>
      <div class="cta-section-04__wrapper--shape-2" data-aos="fade-left" data-aos-delay="1600" data-aos-duration="1000">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/common/cta-shape-2.svg" class="make-it-inline" alt="shape">
      </div>
      <div class="cta-section-04__wrapper--shape-3 floating-Y-animation-reverse-03">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/common/cta-shape-3.svg" class="make-it-inline" alt="shape">
      </div>
      <div class="cta-section-04__wrapper--shape-4 circle-animation-02">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/common/cta-shape-4.svg" class="make-it-inline" alt="shape">
      </div>
      <div class="cta-section-04__wrapper--shape-5 floating-X-animation-reverse-01">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/common/cta-shape-5.svg" class="make-it-inline" alt="shape">
      </div>
    </div>
  </div>
  <div class="cta-bg-group-1--shape-1">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/common/cta-shape-1.svg" class="make-it-inline" alt="shape">
  </div>
  <div class="cta-bg-group-1--shape-2">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/common/cta-shape-2.svg" class="make-it-inline" alt="shape">
  </div>
</div>
<?php get_footer(); ?>