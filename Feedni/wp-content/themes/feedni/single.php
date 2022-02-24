<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Feedni
 */

get_header();
?>
	<!-- Banner Area -->  
    <section class="pages_banner">  
    	<div class="container">
			<h6 class="wow fadeInUp">Read blog</h6>
   			<h2 class="wow fadeInUp" data-wow-delay="0.3s">Detail Blog</h2> 
    	</div>   
    	<img src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/pages-banner-1.png" alt="" class="banner_img">
    	<img src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/banner-effect.png" alt="" class="banner_img2">
    </section>
    <!-- Banner Area -->  
    
    <!-- Blog Area -->  
    <section class="blog_area blog_single"> 
    	<img src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/banner-effect-2.png" alt="" class="banner_img">
    	<div class="container"> 
			<div class="tittle_b">
				<h6 class="wow fadeInUp"><?php the_category() ?></h6>
				<h2 class="wow fadeInUp" data-wow-delay="0.3s"><?php the_title(); ?></h2> 
				<h5><i class="far fa-calendar-alt"></i><?php echo get_the_date('F j, Y'); ?></h5>
			</div> 
    		<div class="row">
    			<!-- Blog Left Sidebar -->
    			<div class="col-lg-8 blog_left_sidebar">  
    				<!-- Blog Item -->
    				<div class="blog_details">
						<?php the_content() ?>
    				</div> 
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
                    		<ul>
							 
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
    <!-- Blog Area -->   
    
    <!-- Share The Post -->  
    <!-- <section class="share_post">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-lg-12">  
    				<ul class="socail">
    					<li><i class="fas fa-share-alt"></i>Share The Post</li>
    					<li><a href="blog-single.html#"></a></li>
    					<li><a href="blog-single.html#"></a></li>
    					<li><a href="blog-single.html#"></a></li>
    					<li><a href="blog-single.html#"></a></li>
    					<li><a href="blog-single.html#"></a></li>
    				</ul> 
    			</div>
    		</div>
    	</div>
    </section>  --> 
    <!-- Share The Post --> 
      
    <!-- Comments -->   
    <!-- <section class="comments_area">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-4 col-md-6">
    				<div class="related_blog"> 
    					<div class="blog_cont"> 
							<a href="blog-single.html#">Drag and drop screenshots from your menu </a>
							<a href="blog-single.html#" class="read_more">Read More</a>
    					</div>
    				</div>
    			</div>
    			<div class="col-lg-4 col-md-6">
    				<div class="related_blog"> 
    					<div class="blog_cont"> 
							<a href="blog-single.html#">UX designers, when creating a product</a>
							<a href="blog-single.html#" class="read_more">Read More</a>
    					</div>
    				</div>
    			</div>
    			<div class="col-lg-4 col-md-6">
    				<div class="related_blog"> 
    					<div class="blog_cont"> 
							<a href="blog-single.html#">UX designers, when creating a product</a>
							<a href="blog-single.html#" class="read_more">Read More</a>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>  -->
    <!-- Comments -->  

<?php
get_footer();
