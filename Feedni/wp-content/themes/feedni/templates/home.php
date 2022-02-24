<?php
/*
 Template Name: Home
 */

 get_header();
?>
<?php
$apple = get_field('apple');
$android = get_field('android');
$list_image_banner = get_field('list_image_banner');
$services = get_field('services');
$mission = get_field('mission');
$communication = get_field('communication');
$download = get_field('download');
?>

<section class="banner_area ba_2 container-id" id="banner-home">  
    <div class="container">
        <div class="baner_content">  
            <h2 class="wow fadeInUp"><?php the_field('title_banner'); ?></h2> 
            <p class="wow fadeInUp" data-wow-delay="0.3s"><?php the_field('description_banner'); ?></p>
            <a href="<?php echo esc_url( $apple['link'] ); ?>" class="theme_btn btn-download wow fadeInUp" data-wow-delay="0.6s">
                <img src="<?php echo esc_url( $apple['image']['url'] ); ?>" alt="">
            </a> 
            <a href="<?php echo esc_url( $android['link'] ); ?>" class="theme_btn btn-download wow fadeInUp play" data-wow-delay="0.6s">
                   <img src="<?php echo esc_url( $android['image']['url'] ); ?>" alt="">
               </a>
        </div>
    </div>   
    <div class="illustration">  
        <img src="<?php echo esc_url( $list_image_banner['image-1']['url'] ); ?>" alt="" class="img_1">
        <img src="<?php echo esc_url( $list_image_banner['image-2']['url'] ); ?>" alt="" class="lfup img_2"> 
    </div> 
    <img src="<?php echo esc_url( $list_image_banner['image-3']['url'] ); ?>" alt="" class="rs_img">
</section>
<!-- Banner Area -->   
<section class="container-id" id="about">
    <!-- Easy User experience -->   
    <section class="experience_area ea_2">
        <div class="container">
            <div class="tittle">
                <h4><i class="fa fa-compass"></i><?php echo get_field('title_about') ?></h4>
                <h2><?php echo get_field('description_about') ?></h2>
            </div>
            <div class="row">
                <!-- Experience -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="experience" style="animation-delay: 0;">
                        <div class="icons wow zoomIn">
                            <span></span>
                        </div>
                        <a href="<?= $services['url'] ?>" class="heding"><?= $services['title'] ?></a>
                        <p><?= $services['description'] ?></p>
                        <!-- <a href="#" class="read_more"><i class="fas fa-chevron-right"></i><span>Discover</span></a> -->
                    </div>
                </div>
                <!-- Experience -->
                <div class="col-lg-4 col-md-6 d-flex wow fadeInUp" data-wow-delay="0.3s">
                    <div class="experience" style="animation-delay: .25s;">
                        <div class="icons icons_2 wow zoomIn">
                            <span><i class="fas fa-chart-line"></i></span>
                        </div>
                        <a href="<?= $mission['url'] ?>" class="heding"><?= $mission['title'] ?></a>
                        <p><?= $mission['description'] ?></p>
                        <!-- <a href="#" class="read_more"><i class="fas fa-chevron-right"></i><span>Discover</span></a> -->
                    </div>
                </div>
                <!-- Experience -->
                <div class="col-lg-4 col-md-6 d-flex wow fadeInUp" data-wow-delay="0.6s">
                    <div class="experience" style="animation-delay: .5s;">
                        <div class="icons icons_3 wow zoomIn">
                            <span></span>
                        </div>
                        <a href="<?= $communication['url'] ?>" class="heding"><?= $communication['title'] ?></a>
                        <p><?= $communication['description'] ?></p>
                        <!-- <a href="#" class="read_more"><i class="fas fa-chevron-right"></i><span>Discover</span></a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Easy User experience -->  
</section>

<section class="container-id" id="feature">
    <!-- Feedni Powerful Features -->  
    <section class="powerful_features pf_3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tittle">
                        <span></span>
                        <h6><?php echo get_field('feature_t') ?></h6>
                        <h2><?php echo get_field('feature_d') ?></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row"> 
            <div class="col-xl-6 screen_img wow slideInLeft">
                <img src="<?php echo esc_url(get_field('ils-1')['url']); ?>" alt="">
                <img src="<?php echo esc_url(get_field('ils-2')['url']); ?>" alt="" class="img_1">
                <img src="<?php echo esc_url(get_field('ils-3')['url']); ?>" alt="" class="img_2">
            </div>
            <div class="col-xl-6 screen_col">
                <div class="screen_conent">
                    <span><i class="fab fa-audible"></i></span>
                    <h2><?php echo get_field('audible_t') ?></h2>
                    <p><?php echo get_field('audible_d') ?></p>
                    
                    <div id="accordion" class="creating_list">
                        <?php foreach (get_field('creating_list') as $key => $value): ?>
                            <?php if ($key == key(get_field('creating_list'))): ?>
                                <div class="card">
                                  <div class="card-header" id="heading-<?php echo $key ?>">
                                    <h5 class="mb-0">
                                      <button class="btn btn-link" data-toggle="collapse" data-target="#collapse-<?php echo $key ?>" aria-expanded="true" aria-controls="collapse-<?php echo $key ?>">
                                        <?php echo $value['t'] ?>
                                      </button>
                                    </h5>
                                  </div>
                              
                                  <div id="collapse-<?php echo $key ?>" class="collapse show" aria-labelledby="heading-<?php echo $key ?>" data-parent="#accordion">
                                    <div class="card-body">
                                        <?php echo $value['d'] ?>
                                    </div>
                                  </div>
                                </div>
                            <?php else: ?>
                                <div class="card">
                                    <div class="card-header" id="heading-<?php echo $key ?>">
                                      <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-<?php echo $key ?>" aria-expanded="false" aria-controls="collapse-<?php echo $key ?>">
                                            <?php echo $value['t'] ?>
                                        </button>
                                      </h5>
                                    </div>
                                    <div id="collapse-<?php echo $key ?>" class="collapse" aria-labelledby="heading-<?php echo $key ?>" data-parent="#accordion">
                                      <div class="card-body">
                                        <?php echo $value['d'] ?>
                                      </div>
                                    </div>
                                  </div>
                            <?php endif ?>
                        <?php endforeach ?>
                        
                    </div>
                    <!-- <a href="#" class="theme_btn">Explore More</a> -->
                </div>  
            </div>
        </div>
    </section>
    <!-- Feedni Powerful Features --> 
</section>
  
 
<!-- Feedni Powerful Features -->  
<section class="container-id" id="download">
    <section class="powerful_features pf_2 pf_4"> 
        <div class="row">
            <div class="col-xl-6 order-xl-last screen_img wow slideInRight">
                <img src="<?php echo esc_url( $download['image']['url'] ); ?>" alt="">
            </div>
            <div class="col-xl-6 screen_col">
                <div class="screen_conent">
                    <span><i class="fas fa-download"></i></span>
                    <h6><?php echo $download['t1'] ?></h6>
                    <h2><?php echo $download['t2'] ?></h2>
                    <p><?php echo $download['d1'] ?></p>
                    <ul class="creating_list">
                        <?php echo $download['d2'] ?>
                    </ul>
                    <ul class="down-load-icon ">
                        <li>
                            <a href="<?php echo esc_url( $apple['link'] ); ?>" class="theme_btn btn-download wow fadeInUp" data-wow-delay="0.6s">
                                <img src="<?php echo esc_url( $apple['image']['url'] ); ?>" alt="">
                            </a> 
                               
                        </li>
                        <li>
                            <a href="<?php echo esc_url( $android['link'] ); ?>" class="theme_btn btn-download wow fadeInUp play" data-wow-delay="0.6s">
                                <img src="<?php echo esc_url( $android['image']['url'] ); ?>" alt="">
                            </a> 
                        </li> 
                    </ul>
                </div>  
            </div> 
        </div>
    </section>
</section>

<!-- Tidings Blog Area -->  
<section class="container-id" id="blog">
    <section class="tidings_blog">
        <div class="container">
            <div class="row"> 
                <div class="col-lg-4 tittle">
                    <span><i class="fas fa-dollar-sign"></i></span>
                    <?php the_field('title_b'); ?>
                    <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>"><?php the_field('link_b'); ?></a>
                </div>
                <?php
                // example args
                $args = array( 'posts_per_page' => 2, 'category_name' => 'blog-home' );

                // the query
                $the_query = new WP_Query( $args );
                ?>

                <?php if ( $the_query->have_posts() ) : ?>

                    <!-- start of the loop -->
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <div class="col-lg-4 col-md-6 d-flex wow fadeIn" data-wow-delay="0.2s">
                            <div class="tidings_item">
                                <div class="thumb-blog">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <a href="<?php the_permalink(); ?>" class="heding"><?php the_title(); ?></a>
                                <h6><?php the_date(); ?></h6>
                                <p><?php the_excerpt(); ?></p>
                                <a href="<?php the_permalink(); ?>" class="read_more">Read More</a>
                            </div>
                        </div>
                    <?php endwhile; wp_reset_postdata(); ?><!-- end of the loop -->
                <?php endif; ?> 
            </div>
        </div> 
    </section>
</section>

<!-- Tidings Blog Area --> 
   
<section class="container-id" id="contact">
    <section class="pages_banner pb_2">  
        <div class="container">
            <h6 class="wow fadeInUp"><?php the_field('title_c'); ?></h6>
               <h2 class="wow fadeInUp" data-wow-delay="0.3s"><?php the_field('description_c'); ?></h2> 
        </div>  
        <img src="<?php echo esc_url(get_field('image-1')['url']); ?>" alt="" class="banner_img"> 
        <img src="<?php echo esc_url(get_field('image-2c')['url'] ); ?>" alt="" class="banner_img_2"> 
    </section>
    <!-- Banner Area --> 
    
    <!-- Got a Problem --> 
    <section class="got_problem contact_p">
        <div class="container"> 
            <div class="row justify-content-center">
                <div class="col-lg-8 problem_from">
                    <?php the_field('form'); ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Got a Problem -->
</section>
<!-- Banner Area -->  

<?php
get_footer();
