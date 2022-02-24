<?php 
    get_header();
?>
 <!-- Breadcrumb Section Start -->
 <div class="breadcrumb-section">
      <div class="breadcrumb-section__bg-shape">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/breadcrumb/breadcrumb-shape.png" alt="breadcrumb-shape">
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
              <h1 class="heading-light title mb-20"><?php echo the_title(); ?></h1>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                  <li class="breadcrumb-item">Home</li>
                  <li class="breadcrumb-item" aria-current="page"><?php echo the_title(); ?></li>
                </ol>
              </nav>
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
          <div class="col-lg-12">
            <?php echo the_content(); ?>
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
    <?php 
    get_footer();
?>