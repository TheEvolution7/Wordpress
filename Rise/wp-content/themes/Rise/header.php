<?php global $post; ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<?php wp_head(); ?>
	<link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"/>
<link rel="stylesheet" href="<?php echo get_bloginfo('stylesheet_directory');?>/assets/css/plugins.css" />
<link rel="stylesheet" href="<?php echo get_bloginfo('stylesheet_directory');?>/assets/css/style.css" />
<link rel="stylesheet" href="<?php echo get_bloginfo('stylesheet_directory');?>/assets/css/custom.min.css">
	<script type="text/javascript" src="https://www.dropbox.com/static/api/2/dropins.js" id="dropboxjs" data-app-key="w9gwp8zdyo5q7d0"></script>
</head>
<body>
    
    
    <!-- Progress scroll totop -->
    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <!-- Logo -->
        <div class="logo-wrapper valign">
            <div class="logo">
                <a href="<?php echo home_url( '/' ) ?>"> 
                    <img src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/img/logo.png" class="logo-img" alt="">
                    <img src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/img/logo-1.png" class="logo-img-scroll" alt="">
                </a>
            </div>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="icon-bar"><i class="ti-line-double"></i></span> </button>
        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link <?= $post->post_type == 'jobpost' ? 'nav-color' : null ?> <?= $post->post_name == '/' ? 'active' : null ?>" href="<?php echo home_url( '/' ) ?>">Home</a></li>
                <li class="nav-item dropdown"> <span class="nav-link <?= $post->post_type == 'jobpost' ? 'nav-color' : null ?>"> Services <i class="ti-angle-down"></i></span>
                    <ul class="dropdown-menu last">

                        <li class="dropdown-item"><a href="<?php echo home_url( '/custom-fabrication' ) ?>">Custom Fabrication</a></li>
                        <li class="dropdown-item"><a href="<?php echo home_url( '/exhibit-solutions' ) ?>">Exhibit Solutions</a></li>
                        <li class="dropdown-item"><a href="<?php echo home_url( '/experiential-environments' ) ?>">Experiential Environments</a></li>
                        <li class="dropdown-item"><a href="<?php echo home_url( '/logistics' ) ?>">Logistics</a></li>
                        <li class="dropdown-item"><a href="<?php echo home_url( '/custom-residential-fabrication' ) ?>">Custom Residential Fabrication</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link <?= $post->post_type == 'jobpost' ? 'nav-color' : null ?> <?= $post->post_name == 'about' ? 'active' : null ?>" href="<?php echo home_url( '/about' ) ?>">About</a></li>
                <li class="nav-item"><a class="nav-link <?= $post->post_type == 'jobpost' ? 'nav-color' : null ?> <?= $post->post_name == 'work' ? 'active' : null ?>" href="<?php echo home_url( '/work' ) ?>">Our Work</a></li>
                <li class="nav-item"><a class="nav-link <?= $post->post_type == 'jobpost' ? 'nav-color' : null ?> <?= $post->post_type == 'jobpost' ? 'active' : null ?>" href="<?php echo home_url( '/jobs' ) ?>">Careers</a></li>
                
                <li class="nav-item"><a class="nav-link <?= $post->post_type == 'jobpost' ? 'nav-color' : null ?> <?= $post->post_name == 'contact' ? 'active' : null ?>" href="<?php echo home_url( '/contact' ) ?>">Contact</a></li>
            </ul>
        </div>
    </nav>
    <!-- Slider -->
    