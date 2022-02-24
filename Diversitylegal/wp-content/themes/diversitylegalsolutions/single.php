<?php 
get_header();
$section_2 = get_field('section_2',11);;
?>
 <?php if ( !in_category(3)) : ?>
  <?php get_template_part( 'templates/career', 'detail' ); ?>
<?php else: ?>
    <!-- navbar- -->
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
        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/breadcrumb/breadcrumb-shape.png" alt="breadcrumb-shape">
      </div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 col-md-10 col-sm-11 col-xs-11">
            <div class="breadcrumb-section__content block-title text-center">
              <h1 class="heading-light title mb-20"><?php the_title(); ?></h1>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                  <li class="breadcrumb-item">Home</li>
                  <li class="breadcrumb-item">Blog</li>
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
    <div class="blogcontent-section-02">
      <div class="container">
        <div class="row">
          <div class="col-xl-7 offset-xl-1 col-lg-7">
            <!-- Blog Detail Card Start -->
            <div class="blogcontent-card">
              <div class="blogcontent-card--img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/image/new/blog-1.jpg" alt="blog-img" class="mw-100">
              </div>
              <div class="blogcontent-card__body">
                <!-- <div class="blogcontent-card__body--meta">
                  <div class="admmin">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/blog/admin.svg" class="make-it-inline" alt="icon">
                    <span>Admin</span>
                  </div>
                  <div class="date">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/blog/clender.svg" class="make-it-inline" alt="icon">
                    <span>17 July, 2021</span>
                  </div>
                  <div class="comment">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/blog/comment.svg" class="make-it-inline" alt="icon">
                    <span>5 Comments</span>
                  </div>
                </div> -->
                <?php the_content(); ?>
                <div class="blogcontent-card__body--social">
                  <h6>Share:</h6>
                  <ul>
                    <li>
                      <a href="https://www.instagram.com/?url=<?php echo get_permalink(); ?>">
                        <i class="fab fa-instagram"></i>
                      </a>
                    </li>
                    <li>
                      <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink(); ?>">
                        <i class="fab fa-linkedin-in"></i>
                      </a>
                    </li>
                    <li>
                      <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink(); ?>">
                        <i class="fab fa-facebook-f"></i>
                      </a>
                    </li>
                    <li>
                      <a href="https://twitter.com/share?url=<?php echo get_permalink(); ?>">
                        <i class="fab fa-twitter"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-5">
            <!-- Blog Sidebar Start -->
            <div class="blog-sidebar-01 mb-3">
              <!-- <div class="blog-sidebar-01--searchbox">
                <input class="form-control" type="text" placeholder="Type to search...">
                <div class="icon">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/image/blog/search.svg" alt="search">
                </div>
              </div> -->
              <div class="blog-sidebar-01--tab">
                <h4 class="title">Tags</h4>
                <ul class="nav flex-column nav-pills">
                <?php 
                      $tags = get_the_tags($blog->id);
                      foreach ($tags as $tag) { ?>
                          <a href="<?php echo get_term_link($tag); ?>"><li class="nav-link"><?= $tag->name ?></li></a>
                <?php } ?>
                </ul>
              </div>
            </div>


            <div class="blog-sidebar-01">
              <div class="blog-sidebar-01--posts">
                <h4 class="title">Recent Posts</h4>
                <?php
                  $related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 3, 'post__not_in' => array($post->ID) ) );
                  if( $related ) foreach( $related as $post ) {
                  setup_postdata($post); 
                ?>
                  <a href="<?php the_permalink() ?>" class="d-block">
                    <div class="post-blogs">
                      <div class="post-blogs--img">
                        <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id() );?>" alt="<?php  the_title(); ?>">
                      </div>
                      <div class="post-blogs--texts">
                        <h6 class="text-dark"><?php  the_title(); ?></h6>
                        <span class="text-dark"><?php echo get_the_date('M d, Y'); ?></span>
                      </div>
                    </div>
                  </a>
                <?php } wp_reset_postdata(); ?>   
              </div>
             
            </div>
            <!-- Blog Sidebar End -->
          </div>
          
        </div>
      </div>
    </div>
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
<?php endif ?>
    <?php get_footer(); ?>