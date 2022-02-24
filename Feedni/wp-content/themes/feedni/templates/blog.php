<?php
/*
 Template Name: Blog
 */

get_header();

?>
<section class="pages_banner">  
	<div class="container">
		<h6 class="wow fadeInUp">Read blog</h6>
			<h2 class="wow fadeInUp" data-wow-delay="0.3s">Check out latest Blog List</h2> 
	</div>   
	<img src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/pages-banner-1.png" alt="" class="banner_img">
	<img src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/banner-effect.png" alt="" class="banner_img2">
</section>
<!-- Banner Area -->  

<!-- Blog Area -->  
<section class="blog_area">
	<div class="container">
		<div class="row">
			<?php
            // example args
            $args = array( 'posts_per_page' => 4, 'category_name' => 'blog-home' );

            // the query
            $the_query = new WP_Query( $args );
            ?> 
			<!-- Blog Left Sidebar -->
			<div class="col-lg-8 blog_left_sidebar">
				<?php if ( $the_query->have_posts() ) : ?>

	                <!-- start of the loop -->
	                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	                	<div class="blog_item">
							<a href="<?php the_permalink(); ?>" class="blog_img"><?php the_post_thumbnail(); ?></a>
							<ul>
								<li><?php the_category() ?></li>
								<li><i class="far fa-calendar-alt"></i><?php the_date(); ?></li>
							</ul>
							<a href="<?php the_permalink(); ?>" class="heding"><?php the_title(); ?></a>
							<p><?php the_excerpt(); ?></p>
							<a href="<?php the_permalink(); ?>" class="theme_btn">Explore More</a>
						</div>
	                <?php endwhile; ?><!-- end of the loop -->
	            <?php endif; ?>
				 <!-- <ul class="pagination">
				 	
                    <li><a class="active" href="blog.html">1</a></li>
                    <li><a href="blog.html#">2</a></li>
                    <li><a href="blog.html#">3</a></li> 
                    <li><a href="blog.html#">4</a></li> 
                    <li><a href="blog.html#" class="p-0">....</a></li> 
                    <li><a href="blog.html#"><i class="fas fa-chevron-left"></i></a></li> 
                    <li><a href="blog.html#"><i class="fas fa-chevron-right"></i></a></li> 
                </ul>  -->
			</div>
			<!-- Blog Left Sidebar -->
			
			<!-- Blog Right Sidebar -->
			<div class="col-lg-4 blog_right_sidebar">
                <div class="widget">
                	<h4>Categories</h4>
                	<ul class="categories">
                		<?php $categories = get_categories();
						foreach($categories as $category) {
						   echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '<span>' . $category->category_count . '</span></a></li>';
						} ?>
                	</ul>
                </div>
                <!-- Widget -->
                <div class="widget">
                	<h4>Recent Post</h4>
                	<ul class="rcent_p"> 
                		<?php 
						// Define our WP Query Parameters
						$the_query = new WP_Query( 'posts_per_page=5' ); ?>
						  
						 
						<?php 
						// Start our WP Query
						while ($the_query -> have_posts()) : $the_query -> the_post(); 
						// Display the Post Title with Hyperlink
						?>
						  
						 
						<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
						  
						 
						<?php 
						// Repeat the process and reset once it hits the limit
						endwhile;
						wp_reset_postdata();
						?>
                	</ul>
                </div> 
                <!-- Widget -->
                <!-- <div class="widget">
                	<h4>Keywords</h4>
                	<ul class="tag">
                		<li><a href="blog.html#">business</a></li>
                		<li><a href="blog.html#">Degign</a></li>
                		<li><a href="blog.html#">Agency</a></li>
                		<li><a href="blog.html#">Infography</a></li>
                		<li><a href="blog.html#">Degign</a></li>
                	</ul>
                </div> -->
			</div>
		</div>
	</div>
</section>
<?php
get_footer();