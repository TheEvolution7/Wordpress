<?php get_header(); ?>
<div class="content-wrapper">
    <!-- Lines -->
    <section class="content-lines-wrapper">
        <div class="content-lines-inner">
            <div class="content-lines"></div>
        </div>
    </section>
    <!-- Header Banner -->
    <section class="banner-header banner-img valign bg-img bg-fixed" data-overlay-dark="3" data-background="<?php echo get_bloginfo('stylesheet_directory');?>/assets/img/projects/12.jpg">
        <!-- Left Panel -->
        <div class="bg-light-under"></div>
        <div class="left-panel"></div>
    </section>
    <!-- Not found 404 -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <img src="img/404-image.png" class="mb-30" alt="">
                    <h2 class="section-title2 mb-10">Sorry We Can't Find That Page!</h2>
                    <p>The page you are looking for was moved, removed, renamed or never existed.</p>
                    <div class="error-form">
                        <form method="post" action="blog.html">
                            <div class="form-group clearfix">
                                <input type="search" name="text" value="" placeholder="Search here" required="">
                                <button type="submit" class="theme-btn"><span class="ti-search"></span></button>
                            </div>
                        </form>
                    </div>
                    <div class="butn-dark mt-30 text-center"><a href="<?php echo home_url( '/' ) ?>"><span>Back to home</span></a></div>
               </div>
           </div>
        </div>
    </section>
<?php get_footer(); ?>