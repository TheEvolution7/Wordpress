<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Feedni
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">   
	<?php wp_head(); ?>

	<link rel="stylesheet" href="<?php echo get_bloginfo('stylesheet_directory');?>/assets/font/stylesheet.css">
	<link href="<?php echo get_bloginfo('stylesheet_directory');?>/assets/css/style.css" rel="stylesheet"> 
	<link rel="stylesheet" href="<?php echo get_bloginfo('stylesheet_directory');?>/assets/css/edit.min.css">
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!-- Header Area -->
<header class="main_header_area">  
    <nav class="navbar navbar-expand-lg"> 
        <div class="navbar-brand">
       		<a class="logo link-move" href="#banner-home"><img src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/logo.svg" alt=""></a>   
        </div>
        <!-- Small Divice Menu-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar_supported"  aria-label="Toggle navigation"> 
            <i class="fa fa-bars" aria-hidden="true"></i>
        </button>
        <!-- Left Nav bar -->
        <div class="collapse navbar-collapse navbar_supported"> 
            <ul class="navbar-nav"> 
				<li><a class="nav-link link-move hidden" href="#banner-home">Home</a></li>  
                <li><a class="nav-link link-move" href="#about">About</a></li>           
                <li><a class="nav-link link-move" href="#feature">Feature</a></li>   
				<li><a class="nav-link link-move" href="#download">Download</a></li> 
				<!-- <li><a class="nav-link link-move" href="#pricing">Pricing</a></li> -->
				<li><a class="nav-link link-move" href="#blog">Blog</a></li> 
				 
                <li><a class="nav-link link-move" href="#contact">Contact</a></li>  
            </ul>   
        </div> 
        <!-- Right Nav bar --> 
        <ul class="right_nav">   
			
      		 <!-- <li class="language_select"> 
				<select class="post_select">
					<option>Eng</option> 
					<option>Fra</option>  
				</select> 
			</li> -->
       		 <li><a id="menu-opener"><i class="flaticon-menu"></i></a></li>    
        </ul>  
    </nav>   
</header>
<!-- Header Area -->  
 
<!-- Toggle Menu Area --> 
<ul class="toggle_menu">  
	<li><a class="close"><i class="fas fa-times"></i></a></li> 
	<li><a href="#banner-home" class="logo link-move"><img src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/images/logo-b.svg" alt=""></a></li>
	<li><a class="link-move hidden" href="#banner-home"><i class="fab fa-autoprefixer"></i>Home</a></li>
	<li><a class="link-move" href="#about"><i class="fab fa-autoprefixer"></i>About</a></li>
	<li><a class="link-move" href="#feature"><i class="fab fa-drupal"></i>Feature </a></li>   
	<li><a class="link-move" href="#download" class="active"><i class="fab fa-autoprefixer"></i>Downloads</a></li> 
	<!-- <li><a class="link-move" href="#pricing"><i class="fas fa-comment-dots"></i>Pricing</a></li>  -->
	<li><a class="link-move" href="#blog"><i class="fas fa-comment-dots"></i>Blog</a></li> 
		<li><a class="link-move" href="#contact"><i class="fas fa-comment-dots"></i>Contact</a></li> 
</ul>
<!-- Toggle Menu Area --> 
