<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <!-- Bootstrap , fonts & icons  -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/icon-font/css/style.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/typography-font/typo.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/fontawesome-5/css/all.css" />
  <!-- Plugin'stylesheets  -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/plugins/aos/aos.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/plugins/fancybox/jquery.fancybox.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/plugins/nice-select/nice-select.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/plugins/slick/slick.min.css">
  <!-- Vendor stylesheets  -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/color-scheme-6.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/color-scheme-1.css" />
  <?php wp_head(); ?>
</head>
<body>
<?php wp_body_open();?>
    <?php  global $wp;if ( home_url( $wp->request ) == home_url() ) : ?>
        <div class="preloader-wrapper" id="loader">
            <div class="loading">
                <div class="bounceball"></div>
                <div class="text">Diversity Legal Solutions is loading</div>
            </div>
        </div>
    <?php endif ?>

  <div class="site-wrapper overflow-hidden">
    <!-- Preloader -->
    <!-- <div id="loading">
    <div class="preloader">
     <img src="./image/preloader-3.gif" alt="preloader">
   </div>
   </div>   -->
    <!-- Header Area -->
    <header class="site-header site-header--menu-left bg-transparent site-header--dark site-header--absolute">
      <div class="container">
        <nav class="navbar site-navbar">
          <!-- Brand Logo-->
          <div class="site-header__brand">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
              <!-- light version logo (logo must be black)-->
              <img src="<?php echo get_theme_mod( 'img-upload' ); ?>" alt="<?php bloginfo( 'name' ); ?>" class="logo-white">
             
              <!-- Dark version logo (logo must be White)-->
              <img src="<?php echo get_theme_mod( 'img-upload-2' ); ?>" alt="<?php bloginfo( 'name' ); ?>" class="logo-black">
            </a>
          </div>
          <div class="menu-block-wrapper ">
            <div class="menu-overlay"></div>
            <nav class="menu-block menu-block-inner" id="append-menu-header">
              <div class="mobile-menu-head">
                <div class="go-back">
                  <i class="fa fa-angle-left"></i>
                </div>
                <div class="current-menu-title"></div>
                <div class="mobile-menu-close">&times;</div>
              </div>
              <?=  menu('primary-menu','site-menu-main') ?>
            </nav>
            <div class="header-button site-header__btns  site-header__btns--03">
              <a class="btn btn-secondary btn-secondary-hvr btn-3 rounded" href="<?php echo esc_url( home_url( '/career' ) ); ?>">
                <?php echo get_theme_mod( 'option_header_1' ); ?>
              </a>
            </div>
          </div>
          <!-- mobile menu trigger -->
          <div class="mobile-menu-trigger">
            <span></span>
          </div>
          <!--/.Mobile Menu Hamburger Ends-->
        </nav>
      </div>
    </header>