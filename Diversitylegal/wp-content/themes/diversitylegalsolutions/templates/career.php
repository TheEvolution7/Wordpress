<?php 
get_header();
/*
 Template Name: Career
 */
$section_1 = get_field('section_1');
$section_2 = get_field('section_2');
$section_3 = get_field('section_3');
$section_4 = get_field('section_4');
$section_5 = get_field('section_5');
$careers = new WP_Query(array('post_type'=>'post','post_status'=>'publish','cat_parent' => 9,'category__not_in' => 3,'order' => 'DESC'));
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
              <h1 class="heading-light title mb-20"><?= the_title(); ?></h1>
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
    <!-- Video Section Start -->
    <div class="video-section-01 video-section-01--3 bg-transparent">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-xxl-6 col-md-9 col-xl-6 col-lg-6 offset-xxl-1 order-lg-2 mb-mobile-lg">
            <div class="video-block" data-aos="fade-left" data-aos-duration="800">
              <img src="<?= $section_2['image'] ?>" alt="<?= $section_2['title'] ?>" class="w-100">
              <div class="dots">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/career/dots.svg" class="w-100" alt="dot">
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-xxl-5 col-xl-6 col-md-8 order-lg-1">
            <div class="video-section-content block-title" data-aos="fade-right" data-aos-duration="800">
              <h6 class="subtitle mb-20 text-primary"><?= $section_2['subtitle'] ?></h6>
              <h2 class="title"><?= $section_2['title'] ?></h2>
              <p class="text-dark pe-0 pe-lg-7"><?= $section_2['content'] ?> </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Video Section End -->
    <!-- Fact Section Start -->
    <div class="counter-section-06">
      <div class="container">
        <div class="row justify-content-center widgets-row">
        <?php foreach($section_3 as $section): ?>
          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-6 col-8">
            <div class="widget widget-column widget-column-center widget-counter">
              <h3 class='widget-title'><?= $section['subtitle'] ?> </h3>
              <p class='widget-text'><?= $section['title'] ?> </p>
            </div>
          </div>
        <?php endforeach ?>
        </div>
      </div>
    </div>
    <!-- Fact Section End -->
    <!-- Service Section Start -->
    <!-- <div class="service-section-03">
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-lg-5 col-md-8 mb-mobile-lg">
            <div class="service-section-03__sidebar">
              <h6 class="title"><?= $section_4['text'] ?></h6>
             
                <?php 
                    $args = array('type' => 'post','parent'=> 9);
                    $categories = get_categories( $args ); 
                ?>
                <ul class="p-0 m-0 service-section-03__sidebar--list">
                  <li class="active"><a href="<?php echo esc_url( home_url( '/career' ) ); ?>">All Departments</a></li>
                <?php foreach ( $categories as $category ) :  ?>
                  <li class="<?= is_category($category->slug) ? 'active' : '' ?>"><a href="<?php echo esc_url( home_url( '/category/'.$category->slug ) ); ?>"><?= $category->name ?></a></li>
                <?php endforeach ?>
                </ul>
              
              
            </div>
          </div>
          <div class="col-xl-8 col-lg-7">
            <div class="service-section-03__wrapper">
              <div class="block-title service-section-03__wrapper--content">
                <h2 class="titel"><?= $section_4['title'] ?></h2>
                <p class="text-dark m-0"><?= $section_4['subtitle'] ?></p>
              </div>
              <div class="tab-container mt-3">
                
                  <ul class="service-section-03__wrapper--job-list">
                  <?php if ($careers->have_posts()) : ?>
                  <?php while ($careers->have_posts()) : $careers->the_post(); ?>
                    <li><a href="<?php echo the_permalink() ?>">
                        <div class="list-content">
                          <div class="list-content--texts">
                            <h6><?php the_title() ;?></h6>
                            <span><?php  the_excerpt(); ?></span>
                          </div>
                          <div class="list-content--icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/career/arrow.svg" class="make-it-inline" alt="arrow-icon">
                          </div>
                        </div>
                      </a>
                    </li>
                  <?php endwhile ?> 
                <?php endif ?>     
                  </ul>
                
                
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <div class="service-section-03">
      <div class="container">
        <div class="row">
          <div class="col-xl-10 col-md-10 co-xs-12 col-sm-12 col-12">
            <div class="service-section-03__wrapper">
              <div class="block-title service-section-03__wrapper--content">
                <h2 class="titel"><?= $section_4['title'] ?></h2>
                <p class="text-dark m-0"><?= $section_4['subtitle'] ?></p>
              </div>
              <div class="tab-container mt-3">
                <?= $section_4['form'] ?>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
<style>
	.cta-section-04__button-group a img {height: 80px;object-fit:contain;border-radius: 18px;}
</style>
    <!-- Service Section End -->
    <!-- Cta Section Start -->
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
                </div><div class="col-xl-6">
                  <div class="cta-section-04__button-group m-auto" data-aos="fade-left" data-aos-duration="800">
                    <a href="<?= $section_5['link_app_store'] ?>">
                      <img src="<?= $section_5['image_1'] ?>" class="w-100" alt="app store">
                    </a>
                    <a href="<?= $section_5['link'] ?>">
                      <img src="<?= $section_5['image_2'] ?>" class="w-100" alt="app store">
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
    <!-- Cta Section End -->
<?php get_footer(); ?>