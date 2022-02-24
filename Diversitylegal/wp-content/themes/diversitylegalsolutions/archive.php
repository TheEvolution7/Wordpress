<?php 
get_header();
/*
 Template Name: Blog
 */
$section_1 = get_field('section_1',11);
$section_2 = get_field('section_2',11);
$current_page = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
$blog = new WP_Query(array('post_type'=>'post','post_status'=>'publish','cat' => 3,'posts_per_page' => 6,'paged' => $current_page,'order' => 'DESC'));
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
        <img src="<?= $section_1['banner'] ?>" alt="Blog Tag">
      </div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-8 col-lg-8 col-md-10 col-sm-11 col-xs-11">
            <div class="breadcrumb-section__content hero-content text-center">
              <h1 class="heading-light title mb-20">Blog Tag</h1>
              <p class="text-light"><?= $section_1['text'] ?></p>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                  <li class="breadcrumb-item">Home</li>
                  <li class="breadcrumb-item" aria-current="page">Blog Tag</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Breadcrumb Section End -->
    <!-- Blog Content Section Start -->
    <div class="blogcontent-section-01">
      <div class="container">
        <div class="row widgets-row">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>  
            <div class="col-lg-4 col-md-6">
              <a href="<?php echo the_permalink() ?>">
                <div class="blog-card-01">
                  <div class="blog-card-01--img">
                    <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id() );?>" alt="<?php the_title() ;?>" class="w-100">
                  </div>
                  <div class="blog-card-01__body">
                    <!-- <div class="blog-card-01__body--meta">
                    <div class="admmin">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/image/blog/admin.svg" class="make-it-inline" alt="blog-image" />
                      <span>Admin</span>
                    </div>
                    <div class="date">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/image/blog/clender.svg" class="make-it-inline" alt="blog-image" />
                      <span>17 July, 2021</span>
                    </div>
                  </div> -->
                    <div class="blog-card-01__body--content">
                      <h6 class="title"><?php the_title() ;?></h6>
                      <?php  the_excerpt(); ?>
                      <a class="more-btn" href="<?php echo the_permalink() ?>">Read More <img src="<?php echo get_template_directory_uri(); ?>/assets/image/blog/arrow.svg" class="make-it-inline"
                          alt="icon"></a>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          <?php endwhile ?>    
          <div class="col-12">
            <div class="blogcontent-section-01__pagination">
              <?php 
                  $pages  =  paginate_links( array(
                          'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                          'total'        => $blog->max_num_pages,
                          'current'      => max( 1, get_query_var( 'paged' ) ),
                          'format'       => '?paged=%#%',
                          'show_all'     => false,
                          'type'         => 'array',
                          'end_size'     => 2,
                          'mid_size'     => 1,
                          'prev_next'    => true,
                          'prev_text' => '<i class="fas fa-chevron-left"></i>',
                          'next_text' => '<i class="fas fa-chevron-right"></i>',
                          'add_args'     => false,
                          'add_fragment' => '',
                  ) );
                  if (is_array($pages)) {
                      $current_page = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
                      echo '<ul class="pagination m-0 p-0 justify-content-center">';
                      foreach ($pages as $i => $page) {
                          if ($current_page == 1 && $i == 0) {
                              echo "<li class='page-item active'>$page</li>";
                          } else {
                              if ($current_page != 1 && $current_page == $i) {
                                  echo "<li class='page-item active'>$page</li>";
                              } else {
                                  echo "<li class='page-item'>$page</li>";
                              }
                          }
                      }
                      echo '</ul>';
                  }
              ?>
            </div>
          </div>
          <?php endif ?>   
        </div>

      </div>
    </div>
  </div>
  </div>
  <!-- Blog Content Section End -->
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
              <h2 class="title heading-light"><?= $section_2['title'] ?>
              </h2>
              <p class="heading-light"><?= $section_2['subtitle'] ?>
              </p>
            </div>

            <?= $section_2['form'] ?>

          </div>
        </div>
      </div>
    </div>
<?php get_footer(); ?>