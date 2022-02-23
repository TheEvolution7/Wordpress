<?php
/*
 Template Name: Service-detail
 */

get_header();
$section = get_field('section');
global $post;
?>

<div class="content-wrapper">
    <!-- Lines -->
    <section class="content-lines-wrapper">
        <div class="content-lines-inner">
            <div class="content-lines"></div>
        </div>
    </section>
    <!-- Header Banner -->
    <section class="banner-header banner-img valign bg-img bg-fixed" data-overlay-dark="3">
        <!-- Left Panel -->
        <video loop autoplay playsinline muted class="bg-video" src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/output.mp4"></video>
        <!-- Left Panel -->
        <div class="bg-light-under"></div>
        <div class="left-panel"></div>
    </section>
    <!-- Services Page -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-title2"><?= $section['title'] ?></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <?= $section['content'] ?>
                    <div class="row mb-30">
                        <div class="col-md-12 gallery-item">
                            <a href="<?= esc_url($section['image_1']['url']) ?>" title="Custom Fabrication" class="img-zoom">
                                <div class="gallery-box">
                                    <div class="gallery-img"> <img src="<?= esc_url($section['image_1']['url']) ?>"
                                            class="img-fluid mx-auto d-block" alt="Custom Fabrication"> </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 sidebar-side">
                    <aside class="sidebar blog-sidebar">
                        <div class="sidebar-widget services">
                            <div class="widget-inner">
                                <div class="sidebar-title">
                                    <h4>All Services</h4>
                                </div>
                                <ul>
                                    <li <?= $post->post_name == 'custom-fabrication' ? 'class="active"' : null ?>><a href="<?php echo home_url( '/custom-fabrication' ) ?>">Custom Fabrication</a></li>
                                    <li <?= $post->post_name == 'exhibit-solutions' ? 'class="active"' : null ?>><a href="<?php echo home_url( '/exhibit-solutions' ) ?>">Exhibit Solutions</a></li>
                                    <li <?= $post->post_name == 'experiential-environments' ? 'class="active"' : null ?>><a href="<?php echo home_url( '/experiential-environments' ) ?>">Experiential Environments</a></li>
                                    <li <?= $post->post_name == 'logistics' ? 'class="active"' : null ?>><a href="<?php echo home_url( '/logistics' ) ?>">Logistics</a></li>
                                    <li <?= $post->post_name == 'custom-residential-fabrication' ? 'class="active"' : null ?>><a href="<?php echo home_url( '/custom-residential-fabrication' ) ?>">Custom Residential Fabrication</a></li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>

        </div>
    </section>
<?php
get_footer();