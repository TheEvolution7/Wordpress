<?php
/*
 Template Name: Home
 */

get_header();

$section_1 = get_field('section_1');
$section_2 = get_field('section_2');
$list_content = get_field('list_content');
$section_3 = get_field('section_3');
$section_4 = get_field('section_4');
$list_image_why = get_field('list_image_');
$list_title_why = get_field('list_title_why');
$section_5 = get_field('section_5');
$list_client_1 = get_field('list_client_1');
$list_client_2 = get_field('list_client_2');
$list_client_3 = get_field('list_client_3');
$our_client = get_field('our_client');
$list = get_field('list');
$services = get_field('services');
$list_service = get_field('list_service');
$brands = get_field('brands');
$contact = get_field('contact');
?>

<div class="main-page-wrapper">
      <!-- ===================================================
        Loading Transition
      ==================================================== -->
      <section>
        <div id="preloader">
          <div id="ctn-preloader" class="ctn-preloader">
            <div class="animation-preloader">
              <div class="icon"><img src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/logo/vCamp_01.png" alt="" class="m-auto d-block"> <span></span></div>
              <div class="txt-loading mt-4">
                <span data-text-preloader="A" class="letters-loading">
                  A
                </span>
                <span data-text-preloader="D" class="letters-loading">
                  D
                </span>
                <span data-text-preloader="V" class="letters-loading">
                  V
                </span>
                <span data-text-preloader="T" class="letters-loading">
                  T
                </span>
              </div>
            </div>  
          </div>
        </div>
      </section>




      <!-- 
      =============================================
        Main Menu
      ============================================== 
      -->
      <header class="theme-main-menu theme-menu-one">
        <div class="inner-content">
          <div class="d-flex align-items-center justify-content-between">
            <div class="logo"><a href="index.html"><img src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/logo/vCamp_01.png" alt="" width="100"></a></div>
            <!-- <nav class="navbar navbar-expand-lg">
              <button class="navbar-toggler d-block d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span></span>
              </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  
                  <div class="mobile-content d-block d-lg-none">
                    <form action="#" class="search-form">
                      <input type="text" placeholder="Search here..">
                      <button><i class="bi bi-search"></i></button>
                    </form>

                    <div class="address-block">
                      <h4 class="title">Our Address</h4>
                      <p>Chowrastar Mirpur- 1210, Sangu <br>River, Dhaka</p>
                      <p>Urgent issue? call us at <br><a href="tel:310.841.5500">310.841.5500</a></p>
                    </div>
                  </div> 
                </div>
            </nav> -->
            <div class="right-widget d-flex align-items-center">
              <a href="#contact" class="d-flex align-items-center login-btn">
                <img src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/icon/icon_01.svg" alt="">
                <span>Contact Us</span>
              </a>
            </div> <!-- /.right-widget -->
          </div>
        </div> <!-- /.inner-content -->
      </header> <!---main-menu -->


      
      <!-- 
      =============================================
        Hero Banner
      ============================================== 
      -->
      <div class="hero-banner-one">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-8">
              <h1 class="hero-heading font-lato theme-mb-0"><?= $section_1['description'] ?><img src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/icon/icon_03.svg" alt=""></a>
              <ul class="list-social">
                <li>
                  <i class="fab fa-facebook-f"></i>
                  <div class="title">
                    Facebook<br>
                    Partner
                  </div>
                </li>
                <li>
                  <i class="fab fa-google"></i>
                  <div class="title">
                    Google<br>
                    Partner
                  </div>
                </li>
                <li>
                  <i class="fab fa-shopify"></i>
                  <div class="title">
                    Shopify<br>
                    Partner
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="illustration-container">
          <div class="banner-img js-wrap-box-1">
            <div class="el-n">
              <div class="effect-wrap js-effect-wrap">
                <img src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/new/el/banner/pc.png" alt="">
              </div>
            </div>
            <div class="bg">
              <div class="effect-wrap js-effect-wrap">
                <img src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/new/el/banner/bg.png" alt="">
              </div>
            </div>
            <div class="el-1 js-object-wrap" radius="-7">
              <div class="effect-wrap js-effect-wrap">
                <img class="self-move js-self-move" group="1" radius="-2" src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/new/el/banner/1.png" alt="">
              </div>
            </div>
            <div class="el-2 js-object-wrap" radius="7">
              <div class="effect-wrap js-effect-wrap">
                <img class="self-move js-self-move" group="1" radius="2" src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/new/el/banner/2.png" alt="">
              </div>
            </div>
            <div class="el-3 js-object-wrap" radius="-7">
              <div class="effect-wrap js-effect-wrap">
                <img class="self-move js-self-move" group="1" radius="-3" src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/new/el/banner/3.png" alt="">
              </div>
            </div>
            <div class="el-4 js-object-wrap" radius="7">
              <div class="effect-wrap js-effect-wrap">
                <img class="self-move js-self-move" group="2" radius="-3" src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/new/el/banner/4.png" alt="">
              </div>
            </div>
            <div class="el-5 js-object-wrap" radius="-7">
              <div class="effect-wrap js-effect-wrap">
                <img class="self-move js-self-move" group="2" radius="3" src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/new/el/banner/5.png" alt="">
              </div>
            </div>
            <div class="el-6 js-object-wrap" radius="7">
              <div class="effect-wrap js-effect-wrap">
                <img class="self-move js-self-move" group="2" radius="-3" src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/new/el/banner/6.png" alt="">
              </div>
            </div>
            <div class="el-7 js-object-wrap" radius="-7">
              <div class="effect-wrap js-effect-wrap">
                <img class="self-move js-self-move" group="2" radius="3" src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/new/el/banner/7.png" alt="">
              </div>
            </div>
            <div class="el-8 js-object-wrap" radius="7">
              <div class="effect-wrap js-effect-wrap">
                <img class="self-move js-self-move" group="1" radius="-3" src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/new/el/banner/8.png" alt="">
              </div>
            </div>

          </div>
          <!-- <img src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/assets/ils_01.svg" alt="" class="m-auto ani-banner"> -->
        </div> <!-- /.illustration-container -->        
      </div> <!-- /.hero-banner-one -->

      
      <div class="vcamp-feature-section-one box-layout mt-75">
        <div class="wave-section">
          <!--Waves Container-->
          <div>
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
              <defs>
                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
              </defs>
              <g class="parallax">
                <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255, 241, 234,0.7)" />
                <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255, 241, 234,0.5)" />
                <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255, 241, 234,0.3)" />
                <use xlink:href="#gentle-wave" x="48" y="7" fill="rgba(255, 241, 234,1)" />
              </g>
            </svg>
          </div>
          <!--Waves end-->
        </div>
        <div class="bg-wrapper bg__1">
          <img src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/new/el/1.png" alt="" class="shapes shape-2">
          <img src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/new/el/3.png" alt="" class="shapes shape-3">
          <img src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/new/el/4.png" alt="" class="shapes shape-4">
          <div class="container">
            <div class="text-center pb-60 lg-pb-20">
              <div class="section-descript __noline" data-aos="fade-up">
                <div class="upper-title"><?= $section_2['title'] ?></div>
                <h2 class="title"><?= $section_2['description'] ?></h2>
              </div>
            </div> <!-- /.title-style-seven -->
            <div class="row counter-section">
              <div class="col-6 col-md-3" data-aos="fade-up">
                <div class="card-style-one">
                  <div class="icon d-flex align-items-center justify-content-center">
                    <div class="icon-img">
                      <img src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/icon/1.svg" alt="" class="tran3s">
                    </div>
                  </div>
                  <?= $list_content[1] ?>
                </div> <!-- /.card-style-one -->
              </div>
              <div class="col-6 col-md-3" data-aos="fade-up">
                <div class="card-style-one">
                  <div class="icon d-flex align-items-center justify-content-center">
                    <div class="icon-img">
                      <img src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/icon/2.svg" alt="" class="tran3s">
                    </div>
                  </div>
                  <?= $list_content[2] ?>
                </div> <!-- /.card-style-one -->
              </div>
              <div class="col-6 col-md-3" data-aos="fade-up">
                <div class="card-style-one">
                  <div class="icon d-flex align-items-center justify-content-center">
                    <div class="icon-img">
                      <img src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/icon/3.svg" alt="" class="tran3s">
                    </div>
                  </div>
                  <?= $list_content[3] ?>
                </div> <!-- /.card-style-one -->
              </div>
              <div class="col-6 col-md-3" data-aos="fade-up">
                <div class="card-style-one">
                  <div class="icon d-flex align-items-center justify-content-center">
                    <div class="icon-img">
                      <img src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/icon/4.svg" alt="" class="tran3s">
                    </div>
                  </div>
                  <?= $list_content[4] ?>
                </div> <!-- /.card-style-one -->
              </div>
            </div>
            <div class="row justify-content-center" data-aos="fade-up">
              <a href="#contact" class="theme-btn-one ripple-btn"><?= $section_2['title_1'] ?></a>
            </div>
          </div>
        </div> <!-- /.bg-wrapper -->
        <div class="wave-section __2">
          <!--Waves Container-->
          <div>
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
              <defs>
                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
              </defs>
              <g class="parallax">
                <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255, 241, 234,1)" />
                
              </g>
            </svg>
          </div>
          <!--Waves end-->
        </div>
        
      </div> <!-- /-feature-section-one -->
      
                
             
      <div class="vcamp-feature-section-nine">
        <div class="bg-wrapper">
          <div class="container">
            <div class="row">
              <div class="col-lg-6" data-aos="fade-right">
                <div class="banner-img-2 js-wrap-box-2">
                  <div class="el-n">
                    <div class="effect-wrap js-effect-wrap">
                      <img src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/new/el/mission/pc.png" alt="">
                    </div>
                  </div>
                  <div class="bg">
                    <div class="effect-wrap js-effect-wrap">
                      <img src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/new/el/mission/bg.png" alt="">
                    </div>
                  </div>
                  <div class="el-1 js-object-wrap" radius="-7">
                    <div class="effect-wrap js-effect-wrap">
                      <img class="self-move js-self-move" group="1" radius="-2" src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/new/el/mission/1.png" alt="">
                    </div>
                  </div>
                  <div class="el-2 js-object-wrap" radius="7">
                    <div class="effect-wrap js-effect-wrap">
                      <img class="self-move js-self-move" group="1" radius="2" src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/new/el/mission/2.png" alt="">
                    </div>
                  </div>
                  <div class="el-3 js-object-wrap" radius="-7">
                    <div class="effect-wrap js-effect-wrap">
                      <img class="self-move js-self-move" group="1" radius="-3" src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/new/el/mission/3.png" alt="">
                    </div>
                  </div>
                  <div class="el-4 js-object-wrap" radius="7">
                    <div class="effect-wrap js-effect-wrap">
                      <img class="self-move js-self-move" group="2" radius="-3" src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/new/el/mission/4.png" alt="">
                    </div>
                  </div>
                  <div class="el-5 js-object-wrap" radius="-7">
                    <div class="effect-wrap js-effect-wrap">
                      <img class="self-move js-self-move" group="2" radius="3" src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/new/el/mission/5.png" alt="">
                    </div>
                  </div>
                  <div class="el-6 js-object-wrap" radius="7">
                    <div class="effect-wrap js-effect-wrap">
                      <img class="self-move js-self-move" group="2" radius="-3" src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/new/el/mission/6.png" alt="">
                    </div>
                  </div>
      
                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center" data-aos="fade-left">
                <div class="section-descript pb-60 lg-pb-20">
                  <h2 class="title"><?= $section_3['title'] ?></h2>
                  <?= $section_3['descripton'] ?>
                </div>
              </div>
            </div>
            
          </div>
        </div> 
        
      </div> <!-- -feature-section-nine -->
                

      <div class="vcamp-feature-section-one box-layout mt-75">
        
        <div class="wave-section">
          <!--Waves Container-->
          <div>
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
              <defs>
                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
              </defs>
              <g class="parallax">
                <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255, 241, 234,0.7)" />
                <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255, 241, 234,0.5)" />
                <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255, 241, 234,0.3)" />
                <use xlink:href="#gentle-wave" x="48" y="7" fill="rgba(255, 241, 234,1)" />
              </g>
            </svg>
          </div>
          <!--Waves end-->
        </div>
        <div class="bg-wrapper">
          <img src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/new/el/2.png" alt="" class="shapes shape-2">
          <div class="container">
            <div class="row">
              <div class="col-lg-5 d-flex align-items-center">
                <div class="section-descript pb-60 lg-pb-20" data-aos="fade-right">
                  <h2 class="title"><?= $section_4['title'] ?></h2>
                  <ul class="with-icon">
                    <li>
                      <div class="icon">
                        <img src="<?= $list_image_why[1]['url'] ?>" alt="">
                      </div>
                      <div class="content">
                        <?= $list_title_why[1] ?>
                      </div>
                      
                    </li>
                    <li>
                      <div class="icon">
                        <img src="<?= $list_image_why[2]['url'] ?>" alt="">
                      </div>
                      <div class="content">
                        <?= $list_title_why[2] ?>
                      </div>
                    </li>
                    <li>
                      <div class="icon">
                        <img src="<?= $list_image_why[3]['url'] ?>" alt="">
                      </div>
                      <div class="content">
                        <?= $list_title_why[3] ?>
                      </div>
                    </li>
                  </ul>
                  <a href="#contact" class="theme-btn-one ripple-btn"><?= $section_4['title_2'] ?></a>
                </div>
              </div>
              <div class="col-lg-7" data-aos="fade-left">
                <div class="banner-img-3 js-wrap-box-3">
                  <div class="el-n">
                    <div class="effect-wrap js-effect-wrap">
                      <img src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/new/el/ipad/pc.png" alt="">
                    </div>
                  </div>
                  <div class="bg">
                    <div class="effect-wrap js-effect-wrap">
                      <img src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/new/el/ipad/bg.png" alt="">
                    </div>
                  </div>
                  <div class="el-1 js-object-wrap" radius="-7">
                    <div class="effect-wrap js-effect-wrap">
                      <img class="self-move js-self-move" group="1" radius="-2" src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/new/el/ipad/1.png" alt="">
                    </div>
                  </div>
                  <div class="el-2 js-object-wrap" radius="7">
                    <div class="effect-wrap js-effect-wrap">
                      <img class="self-move js-self-move" group="1" radius="2" src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/new/el/ipad/2.png" alt="">
                    </div>
                  </div>
                  <div class="el-3 js-object-wrap" radius="-7">
                    <div class="effect-wrap js-effect-wrap">
                      <img class="self-move js-self-move" group="1" radius="-3" src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/new/el/ipad/3.png" alt="">
                    </div>
                  </div>
                  <div class="el-4 js-object-wrap" radius="7">
                    <div class="effect-wrap js-effect-wrap">
                      <img class="self-move js-self-move" group="2" radius="-3" src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/new/el/ipad/4.png" alt="">
                    </div>
                  </div>
                  <div class="el-5 js-object-wrap" radius="-7">
                    <div class="effect-wrap js-effect-wrap">
                      <img class="self-move js-self-move" group="2" radius="3" src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/new/el/ipad/5.png" alt="">
                    </div>
                  </div>
                  <div class="el-6 js-object-wrap" radius="7">
                    <div class="effect-wrap js-effect-wrap">
                      <img class="self-move js-self-move" group="2" radius="-3" src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/new/el/ipad/6.png" alt="">
                    </div>
                  </div>
                  <div class="el-7 js-object-wrap" radius="-7">
                    <div class="effect-wrap js-effect-wrap">
                      <img class="self-move js-self-move" group="2" radius="3" src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/new/el/ipad/7.png" alt="">
                    </div>
                  </div>
      
                </div>
              </div>
              
            </div>
            
          </div>
        </div> <!-- /.bg-wrapper -->
        <div class="bg-wrapper">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="section-descript __noline">
                  <h2 class="title text-center" data-aos="fade-up"><span>Our</span>  Client results</h2>
                </div>
              </div>
              <div class="col-12">
                <div class="tab-client">
                  <nav data-aos="fade-up">
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                      <a class="nav-item nav-link active" id="nav-1-tab" data-bs-toggle="tab" href="#nav-1" role="tab" aria-controls="nav-1" aria-selected="true">Result 1</a>
                      <a class="nav-item nav-link" id="nav-2-tab" data-bs-toggle="tab" href="#nav-2" role="tab" aria-controls="nav-2" aria-selected="false">Result 2</a>
                      <a class="nav-item nav-link" id="nav-3-tab" data-bs-toggle="tab" href="#nav-3" role="tab" aria-controls="nav-3" aria-selected="false">Result 3</a>
                      <a class="nav-item nav-link" id="nav-4-tab" data-bs-toggle="tab" href="#nav-4" role="tab" aria-controls="nav-4" aria-selected="false">Result 4</a></a>
                    </div>
                  </nav>
                  <div class="tab-content" id="nav-tabContent" data-aos="fade-up">
                    <div class="tab-pane fade show active" id="nav-1" role="tabpanel" aria-labelledby="nav-1-tab">
                      <div class="container">
                        <div class="row">
                          <div class="col-lg-6">
                            <img src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/new/chart.png" alt="">
                          </div>
                          <div class="col-lg-6">
                            <div class="row align-items-center flex-nowrap">
                              <div class="col-auto chart-container">
                                <div class="box">
                                  <div class="chart" data-percent="50">50</div>
                                  
                                  </div>
                                  <div class="box">
                                  <div class="chart" data-percent="60">60</div>
                                  
                                  </div>
                                  <div class="box">
                                  <div class="chart" data-percent="70">70</div>
                                
                                  </div>
                              </div>
                              <div class="col">
                                <div class="content-chart">
                                  <ul>
                                    <li>
                                      Spend: $103k
                                    </li>
                                    <li>
                                      Return: 320k
                                    </li>
                                    <li>
                                      ROI: 309%
                                    </li>
                                  </ul>
                                  <hr>
                                  <div class="title">
                                    <h3>Interdum malesuada</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut necessitatibus, numquam tenetur dolorem aliquam voluptatibus eaque sequi optio quae omnis iste quis impedit aliquid excepturi, accusamus molestias deleniti praesentium. Optio.</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="nav-2" role="tabpanel" aria-labelledby="nav-2-tab">
                      <div class="container">
                        <div class="row">
                          <div class="col-lg-6">
                            <img src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/new/chart.png" alt="">
                          </div>
                          <div class="col-lg-6">
                            <div class="row align-items-center">
                              <div class="col-auto chart-container">
                                <div class="box">
                                  <div class="chart" data-percent="30">30</div>
                                  
                                  </div>
                                  <div class="box">
                                  <div class="chart" data-percent="50">50</div>
                                  
                                  </div>
                                  <div class="box">
                                  <div class="chart" data-percent="80">80</div>
                                
                                  </div>
                              </div>
                              <div class="col">
                                <div class="content-chart">
                                  <ul>
                                    <li>
                                      Spend: $103k
                                    </li>
                                    <li>
                                      Return: 320k
                                    </li>
                                    <li>
                                      ROI: 309%
                                    </li>
                                  </ul>
                                  <hr>
                                  <div class="title">
                                    <h3>Interdum malesuada</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut necessitatibus, numquam tenetur dolorem aliquam voluptatibus eaque sequi optio quae omnis iste quis impedit aliquid excepturi, accusamus molestias deleniti praesentium. Optio.</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="nav-3" role="tabpanel" aria-labelledby="nav-3-tab">
                      <div class="container">
                        <div class="row">
                          <div class="col-lg-6">
                            <img src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/new/chart.png" alt="">
                          </div>
                          <div class="col-lg-6">
                            <div class="row align-items-center">
                              <div class="col-auto chart-container">
                                <div class="box">
                                  <div class="chart" data-percent="50">50</div>
                                  
                                  </div>
                                  <div class="box">
                                  <div class="chart" data-percent="60">60</div>
                                  
                                  </div>
                                  <div class="box">
                                  <div class="chart" data-percent="70">70</div>
                                
                                  </div>
                              </div>
                              <div class="col">
                                <div class="content-chart">
                                  <ul>
                                    <li>
                                      Spend: $103k
                                    </li>
                                    <li>
                                      Return: 320k
                                    </li>
                                    <li>
                                      ROI: 309%
                                    </li>
                                  </ul>
                                  <hr>
                                  <div class="title">
                                    <h3>Interdum malesuada</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut necessitatibus, numquam tenetur dolorem aliquam voluptatibus eaque sequi optio quae omnis iste quis impedit aliquid excepturi, accusamus molestias deleniti praesentium. Optio.</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="nav-4" role="tabpanel" aria-labelledby="nav-4-tab">
                      <div class="container">
                        <div class="row">
                          <div class="col-lg-6">
                            <img src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/new/chart.png" alt="">
                          </div>
                          <div class="col-lg-6">
                            <div class="row align-items-center">
                              <div class="col-auto chart-container">
                                <div class="box">
                                  <div class="chart" data-percent="50">50</div>
                                  
                                  </div>
                                  <div class="box">
                                  <div class="chart" data-percent="60">60</div>
                                  
                                  </div>
                                  <div class="box">
                                  <div class="chart" data-percent="70">70</div>
                                
                                  </div>
                              </div>
                              <div class="col">
                                <div class="content-chart">
                                  <ul>
                                    <li>
                                      Spend: $103k
                                    </li>
                                    <li>
                                      Return: 320k
                                    </li>
                                    <li>
                                      ROI: 309%
                                    </li>
                                  </ul>
                                  <hr>
                                  <div class="title">
                                    <h3>Interdum malesuada</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut necessitatibus, numquam tenetur dolorem aliquam voluptatibus eaque sequi optio quae omnis iste quis impedit aliquid excepturi, accusamus molestias deleniti praesentium. Optio.</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    </div>
                </div>
              </div>
              <div class="col-12" data-aos="fade-up">
               <div class="swiper-container swiper-client __2">
                  <div class="swiper-wrapper">
                    <?php foreach ($list_client_3 as  $value): ?>
                      <div class="swiper-slide">
                        <div class="thumb-client">
                          <img src="<?= $value['url'] ?>" alt="">
                        </div>
                      </div>
                    <?php endforeach ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="wave-section __2">
          <!--Waves Container-->
          <div>
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
              <defs>
                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
              </defs>
              <g class="parallax">
                <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255, 241, 234,1)" />
                
              </g>
            </svg>
          </div>
          <!--Waves end-->
        </div>
        
      </div>



      <div class="vcamp-feature-section-nine">
        <div class="container">
          <div class="text-center pb-60 lg-pb-20">
            <div class="section-descript __noline">
              <h2 class="title" data-aos="fade-up"><?= $our_client['title'] ?></h2>
            </div>
          </div> <!-- /.title-style-seven -->
          <div class="row client-section">
            <div class="col-md-6">
              <div class="box-client" data-aos="fade-up">
                <div class="title">
                  <div class="avatar">
                    <img src="<?= $list[1]['image'] ?>" alt="">
                  </div>
                  <div class="content">
                    <?= $list[1]['title'] ?>
                  </div>
                </div>
                <div class="desc">
                  <p>
                    <?= $list[1]['description'] ?>
                  </p>
                </div>
              </div>
              <div class="box-client __2" data-aos="fade-up">
                <div class="title">
                  <div class="avatar">
                    <img src="<?= $list[2]['image'] ?>" alt="">
                  </div>
                  <div class="content">
                    <?= $list[2]['title'] ?>
                  </div>

                  
                </div>
                <div class="desc">
                  <p>
                    <?= $list[2]['description'] ?>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6 d-flex flex-column justify-content-center">
              <div class="box-client __3" data-aos="fade-up">
                <div class="title">
                  <div class="avatar">
                    <img src="<?= $list[3]['image'] ?>" alt="">
                  </div>
                  <div class="content">
                    <?= $list[3]['title'] ?>
                  </div>
                </div>
                <div class="desc">
                  <p>

                  <?= $list[3]['description'] ?>
                
                  </p>
                </div>
              </div>
              <div class="box-start" data-aos="fade-up">
                <div class="big-number">
                  4,7
                </div>
                <div class="start-el">
                  <ul>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="far fa-star"></i></li>
                  </ul>
                  <p>Best Services</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="vcamp-feature-section-four">
        <div class="wave-section">
          <!--Waves Container-->
          <div>
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
              <defs>
                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
              </defs>
              <g class="parallax">
                <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255, 241, 234,0.7)" />
                <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255, 241, 234,0.5)" />
                <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255, 241, 234,0.3)" />
                <use xlink:href="#gentle-wave" x="48" y="7" fill="rgba(255, 241, 234,1)" />
              </g>
            </svg>
          </div>
          <!--Waves end-->
        </div>
        
        <div class="container">
          <div class="row align-items-center">
            <div class="col-xl-5 col-lg-6 text-container" data-aos="fade-right">
              <div class="section-descript pb-60 lg-pb-20">
                <h2 class="title"><?= $services['title'] ?></h2>
                <p>
                  <?= $services['description'] ?>
                </p>
                <a href="#contact" class="theme-btn-one ripple-btn"><?= $services['link'] ?></a>
              </div><!-- /.text-wrapper -->
            </div>
            <div class="col-lg-6 ms-auto bg-pattern">
              <div class="el">
                <img class="bg" src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/new/el/service/1.png" alt="">
                <img class="__1" src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/new/el/service/2.png" alt="">
                <img class="__2" src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/new/el/service/3.png" alt="">
              </div>
              <div class="row gx-5">
                <div class="col-sm-6 d-flex" data-aos="fade-up">
                  <div class="card-style-four">
                    <div class="icon d-flex align-items-end"><img src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/icon/icon_29.svg" alt="" class="tran3s"></div>
                    <h4 class="title"><?= $list_service[1]['title'] ?></h4>
                    <p><?= $list_service[1]['description'] ?></p>
                  </div> <!-- /.card-style-four -->
                </div>
                <div class="col-sm-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                  <div class="card-style-four">
                    <div class="icon d-flex align-items-end"><img src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/icon/icon_30.svg" alt="" class="tran3s"></div>
                    <h4 class="title"><?= $list_service[2]['title'] ?></h4>
                    <p><?= $list_service[2]['description'] ?></p>
                  </div> <!-- /.card-style-four -->
                </div>
                <div class="col-sm-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                  <div class="card-style-four">
                    <div class="icon d-flex align-items-end"><img src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/icon/icon_31.svg" alt="" class="tran3s"></div>
                    <h4 class="title"><?= $list_service[3]['title'] ?></h4>
                    <p><?= $list_service[3]['description'] ?></p>
                  </div> <!-- /.card-style-four -->
                </div>
                <div class="col-sm-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                  <div class="card-style-four">
                    <div class="icon d-flex align-items-end"><img src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/icon/icon_32.svg" alt="" class="tran3s"></div>
                    <h4 class="title">Ask for the sale</h4>
                    <p>Invite buyers to come to your store, send for more information, or call for information and orders in the ad</p>
                  </div> <!-- /.card-style-four -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="partner-section-two pt-50 mb-50 lg-pt-50 lg-mb-50">
          <div class="container">
            <div class="row">
              <div class="col-xxl-7 col-xl-8 col-lg-6 col-md-8 col-sm-10 m-auto">
                <div class="section-descript __noline text-center">
                  <h2 class="title" data-aos="fade-up"><?= $brands['title'] ?></h2>
                </div>
              </div>
            </div>
  
            <div class="row">
              <div class="col-xl-11 m-auto">
                <div class="partent-logos">
                  <div class="row g-0 justify-content-center">
                    <div class="col-md-3 col-6" data-aos="fade-up">
                      <div class="logo"><a href="#"><img src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/brand/1.png" alt="" class="tran3s"></a></div>
                    </div>
                    <div class="col-md-3 col-6" data-aos="fade-up">
                      <div class="logo"><a href="#"><img src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/brand/2.png" alt="" class="tran3s"></a></div>
                    </div>
                    <div class="col-md-3 col-6" data-aos="fade-up">
                      <div class="logo"><a href="#"><img src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/brand/3.png" alt="" class="tran3s"></a></div>
                    </div>
                    <div class="col-md-3 col-6" data-aos="fade-up">
                      <div class="logo"><a href="#"><img src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/brand/4.png" alt="" class="tran3s"></a></div>
                    </div>
                    <div class="col-md-3 col-6" data-aos="fade-up">
                      <div class="logo"><a href="#"><img src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/brand/5.png" alt="" class="tran3s"></a></div>
                    </div>
                    <div class="col-md-3 col-6" data-aos="fade-up">
                      <div class="logo"><a href="#"><img src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/brand/6.png" alt="" class="tran3s"></a></div>
                    </div>
                    <div class="col-md-3 col-6" data-aos="fade-up">
                      <div class="logo"><a href="#"><img src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/brand/7.png" alt="" class="tran3s"></a></div>
                    </div>
                  </div>
                </div> <!-- /.partent-logos -->
              </div>
            </div>
          </div>
        </div>
        <div class="bg-wrapper contact-section" id="contact">
          <div class="container">
            <div class="row align-items-center bg-contact">
              <div class="col-xl-5 col-lg-6 ms-auto" data-aos="fade-right">
                <div class="">
                  <div class="section-descript __noline">
                    <h2 class="title"> <?= $brands['title_1'] ?></h2>
                    <p class="">
                      <?= $brands['description_1'] ?>
                    </p>
                    <ul class="with-icon __2">
                      <?= $brands['content_1'] ?>
                    </ul>
                  </div>
                </div> <!-- /.contact-meta-one -->
              </div>
              <div class="col-lg-6" data-aos="fade-left">
                <div class="form-style-one">
                  <!-- <form id="contact-form" action="inc/contact.php.html" data-toggle="validator">

                  </form> -->
                  <!-- <?= $contact ?> -->
					
					<!-- Calendly inline widget begin -->
									<div id="gc-calendly" class="calendly-inline-widget" data-url="https://calendly.com/advt-media/discovery" style="height:700px;"></div>
									<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
									<!-- Calendly inline widget end -->
                  
                </div> <!-- /.form-style-one -->
              </div>
              
            </div>
          </div>
        </div>

        <div class="wave-section __2">
          <!--Waves Container-->
          <div>
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
              <defs>
                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
              </defs>
              <g class="parallax">
                <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(250, 212, 234,1)" />
                
              </g>
            </svg>
          </div>
          <!--Waves end-->
        </div>
      </div>
    



                
            
                
             
      
      <div class="vcamp-footer-one box-layout">
        
        <div class="container">
          <div class="row">
            <div class="col-xxl-11 m-auto">
              <div class="bottom-footer">
                <div class="row">
                  <div class="col-lg-4 order-lg-0 mb-15">
                    <ul class="d-flex justify-content-center justify-content-lg-start footer-nav style-none">
                      <li><a href="#">Privacy &amp; Terms.</a></li>
                      <li><a href="#contact">Contact Us</a></li>
                    </ul>
                  </div>
                  <div class="col-lg-4 order-lg-2 mb-15">
                    <ul class="d-flex justify-content-center justify-content-lg-end social-icon style-none">
                      <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                      <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                  </div>
                  <div class="col-lg-4 order-lg-1 mb-15">
                    <p class="copyright text-center">Copyright @2021 ADVT Media.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- -footer-one -->


      <button class="scroll-top">
        <i class="bi bi-arrow-up-short"></i>
      </button>

<?php
get_footer();