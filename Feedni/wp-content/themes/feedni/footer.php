<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Feedni
 */

?>
<!-- Footer Area -->  
<footer class="footer_area">   
   <div class="container"> 
		<div class="footer_inner row"> 
			
			<div class="col-lg-4 col-sm-6 footer_logo wow fadeIn"> 
				<?php dynamic_sidebar( 'footer-logo' ); ?> 
				<!-- <div class="language">
					<h6>Language :</h6> 
					<div class="language_select"> 
						<select class="post_select">
							<option>English(US)</option>
							<option>France</option>
						</select> 
					</div>
				</div> -->
				 <ul class="footer_social" style="padding-top: 20px">
				 	<?php dynamic_sidebar( 'footer-social' ); ?> 
				</ul>
			</div>
			<div class="footer_widget col-lg-2 col-sm-6 wow fadeIn" data-wow-delay="0.2s">
				<?php dynamic_sidebar( 'core-link' ); ?> 
			</div>  
			<div class="footer_widget fw_2 col-lg-3 col-sm-6 wow fadeIn" data-wow-delay="0.4s">
				<?php dynamic_sidebar( 'information' ); ?> 
			</div>    
			<div class="footer_widget fw_3 col-lg-3 col-sm-6 wow fadeIn" data-wow-delay="0.6s">
				<?php dynamic_sidebar( 'stay' ); ?>
				<!-- <div class="input-group">
					<input type="text" class="form-control" placeholder="What’s Your email">
					<div class="input-group-append">
						<span class="input-group-text"><i class="fas fa-caret-right"></i></span>
					</div>
				</div> -->
			</div>      
		</div>  
		<div class="copy_right">
			<div class="row"> 
				<style>
					.footer_area .copy_right .mobile_icon li .btn-download {
						min-width: 155px;
					}
				</style>
				<div class="col-md-6  wow slideInRight">
					<ul class="mobile_icon">
						<li>
							<div class="theme_btn btn-download wow fadeInUp"><?php dynamic_sidebar( 'apple' ); ?></div>
						</li>
						<li>
							<div class="theme_btn btn-download wow fadeInUp"><?php dynamic_sidebar( 'android' ); ?></div>
						</li> 
					</ul>
				</div>   
				
				<div class="col-md-6 order-md-first  wow slideInLeft">
					<?php dynamic_sidebar( 'all-rights' ); ?>
				</div> 
			</div>
		</div> 
   </div> 
</footer>
<!-- End Footer Area --> 

<!-- Scroll Top Button -->
<button class="scroll-top">
    <i class="fa fa-angle-double-up"></i>
</button>

<!-- Preloader -->  
<div class="preloader"></div>

<!-- jQuery v3.3.1 -->
	<script src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/js/jquery-3.3.1.min.js"></script>    
<!-- Bootstrap v4.0.0 -->
<script src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/js/popper.min.js"></script>
<script src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/js/bootstrap.min.js"></script>  
<!-- Extra Plugin -->
<script src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/vendors/animate-css/wow.min.js"></script> 
<script src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/vendors/magnify-popup/jquery.magnific-popup.min.js"></script>   
<script src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/vendors/owl-carousel/owl.carousel.min.js"></script>   

<script src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/vendors/counterup/jquery.waypoints.min.js"></script>   
<script src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/vendors/counterup/jquery.counterup.min.js"></script>   
<script src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/vendors/bootstrap-selector/jquery.nice-select.min.js"></script> 

<!-- Theme js / Custom js -->
<script src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/js/theme.js"></script> 
<?php wp_footer(); ?>

</body>
</html>
