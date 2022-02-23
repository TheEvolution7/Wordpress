<?php get_header(); ?>

<section class="page-title-area">
    <div class="section__bg" style="background-image: url(<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/page-bg.jpg);"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title-content text-center">
                    <h3 class="title"><?php the_title(); ?></h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="/blog">Blog</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
                        </ol>
                    </nav>
                    <div class="scroll-to-down">
                        <a href="#portfolio-scroll"><i class="fal fa-arrow-down"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== PAGE TITLE  PART ENDS ======-->

<!--====== SINGLE POST PART START ======-->

<section class="single-post-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="single-post-content mt-30">
                    <?php the_content(); ?>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="single-post-sidebar mt-30">
                    <div class="sidebar-categories mt-30">
                        <h4 class="title">Categories</h4>
                        <ul>
                        	<?php wp_list_categories( array(
						        'exclude'  => array( 4,7 ),
						        'title_li' => ''
						    ) ); ?>
                            <!-- <li><a href="#"><img src="assets/images/post-arrow.png" alt=""> Categories1 (2) <span><img src="assets/images/icon/hero-icon-2.png" alt=""></span></a></li>
                            <li><a href="#"><img src="assets/images/post-arrow.png" alt=""> Categories2 (6) <span><img src="assets/images/icon/hero-icon-2.png" alt=""></span></a></li>
                            <li><a href="#"><img src="assets/images/post-arrow.png" alt=""> Categories3 (6) <span><img src="assets/images/icon/hero-icon-2.png" alt=""></span></a></li>
                            <li><a href="#"><img src="assets/images/post-arrow.png" alt=""> Categories4 (7) <span><img src="assets/images/icon/hero-icon-2.png" alt=""></span></a></li>
                            <li><a href="#"><img src="assets/images/post-arrow.png" alt=""> Categories5 (9) <span><img src="assets/images/icon/hero-icon-2.png" alt=""></span></a></li> -->
                        </ul>
                    </div>
                    <div class="sidebar-post mt-30">
                        <h4 class="title">Popular post</h4>
                        <div class="post-items">
                        	<?php 
							  $args = array(
							    'posts_per_page'  => 10,
							    'post_type'       => 'post',
							    'post_status'     => 'publish',
							    'orderby'         => 'rand'
							  );
							  $the_query = new WP_Query( $args );
							?>
							<?php if( $the_query->have_posts() ): ?>
							<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
								 <div class="item mt-30">
	                                <div class="thumb">
	                                    <?php the_post_thumbnail($size = 'post-thumbnail'); ?>
	                                </div>
	                                <div class="content">
	                                    <a href="<?php the_permalink(); ?>"><h5 class="title"><?php the_title(); ?></h5></a>
	                                    <span><?php the_date(); ?></span>
	                                </div>
	                            </div>
							<?php endwhile; ?>
							<?php endif; ?>
							<?php wp_reset_query(); ?>
                        </div>
                    </div>
                    <div class="sidebar-newsletter">
                        <div class="footer-newsletter-item mt-60">
                            <div class="dot">
                                <img src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/icon/footer-newsletter-dot.png" alt="">
                            </div>
                            <h3 class="title">Subscribe to our newsletter to receive exclusive offers. </h3>
                            <form action="#">
                                <div class="input-box">
                                    <input type="text" placeholder="Enter email…">
                                    <button class="main-btn-3" type="button">Join us</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== SINGLE POST PART ENDS ======-->

<!--====== ARTICLE POST PART START ======-->

<section class="article-post-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="article-post-title text-center">
                    <h3 class="title">Related Articles</h3>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
        	<?php 
			  $args = array(
			    'posts_per_page'  => 10,
			    'post_type'       => 'post',
			    'post_status'     => 'publish',
			    'orderby'         => 'rand'
			  );
			  $the_query = new WP_Query( $args );
			?>
			<?php if( $the_query->have_posts() ): ?>
			<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<div class="col-lg-4 col-md-6 col-sm-9">
	                <div class="article-2-item article-post-item mt-30">
	                    <div class="article-thumb">
	                        <?php the_post_thumbnail(); ?>
	                    </div>
	                    <div class="article-content">
	                        <h3 class="title"><a href="#"><?php the_title(); ?></a></h3>
	                        <a href="<?php the_permalink(); ?>">
	                            Learn more 
	                            <span class="icon">
	                                <svg xmlns="http://www.w3.org/2000/svg" width="10.196" height="12.663" viewBox="0 0 10.196 12.663">
	                                  <path data-name="Path 18155" d="M32.324,974.539,28.2,978.448a.731.731,0,0,0-.052.947.678.678,0,0,0,.948,0l3.027-2.864v9.346a.652.652,0,1,0,1.3,0v-9.346l3.027,2.864a.664.664,0,0,0,.948,0,.714.714,0,0,0-.052-.947l-4.126-3.909A.661.661,0,0,0,32.324,974.539Z" transform="translate(-27.676 -974.112)" fill="#fff" stroke="#fff" stroke-width="0.5"></path>
	                                </svg>
	                            </span>
	                        </a>
	                    </div>
	                </div>
	            </div>
			<?php endwhile; ?>
			<?php endif; ?>
			<?php wp_reset_query(); ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>