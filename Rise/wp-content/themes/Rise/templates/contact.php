<?php
/*
 Template Name: Contact
 */

get_header();
$section_1 = get_field('section_1');
$testimonials = get_field('testiominals');
$testiominals_list = get_field('testiominals_list');
$clients = get_field('clients');
?>

<div class="content-wrapper">
    <!-- Lines -->
    <section class="content-lines-wrapper">
        <div class="content-lines-inner">
            <div class="content-lines"></div>
        </div>
    </section>
    <!-- Header Banner -->
    <section class="banner-header banner-img valign bg-img" style="background-position: top;" data-overlay-dark="3" data-background="<?= esc_url($section_1['image']['url']) ?>">
        <!-- Left Panel -->
        <div class="bg-light-under"></div>
        <div class="left-panel"></div>
    </section>
    <!-- Contact -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 animate-box" data-animate-effect="fadeInUp">
                    <h2 class="section-title"><?= $section_1['title'] ?></h2>
                </div>
            </div>
            <div class="row mb-90">
                <div class="col-md-4 mb-30 animate-box" data-animate-effect="fadeInUp">
                    <?= $section_1['description_1'] ?>
					<div class="main-footer pt-0">
						<div class="abot">
							<div class="social-icon text-left"> 
								<a href="https://www.instagram.com/riseprojectsco/"><i class="ti-facebook"></i></a>
                                <a href="https://www.facebook.com/riseprojects960/"><i class="ti-instagram"></i></a> 
								<a href="https://www.linkedin.com/company/rise-contracting/about/"><i class="ti-linkedin"></i></a> 
							</div>
						</div>
					</div>	
					
                </div>
                <div class="col-md-4 mb-30 animate-box" data-animate-effect="fadeInUp">
                    <p><b>Contact Details</b></p>
                    <div class="list-address">
                        <?= $section_1['description_2'] ?>
                    </div>
                    
                </div>
                <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                    <p><b>Contact Form</b></p>
                    <div class="row">
                        <?= $section_1['form'] ?>
                    </div>
                    
                    <!-- <form method="post" class="row">
                        <div class="col-md-12">
                            <input type="text" name="name" id="name" placeholder="Full Name">
                        </div>
                        <div class="col-md-12">
                            <input type="email" name="email" id="email" placeholder="Your Email" required="">
                        </div>
                        <div class="col-md-12">
                            <textarea name="message" id="message" cols="40" rows="4" placeholder="Your Message"></textarea>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="butn-dark mt-15"><span>Send</span></button>
                        </div>
                    </form> -->
                </div>
            </div>
            <!-- Map Section-->
            <!-- <div class="row">
                <div class="col-md-12 mb-30 animate-box" data-animate-effect="fadeInUp">
                    <div class="map-box">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2867.039155942641!2d-71.10600832504586!3d42.1529392887571!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e481672bd79799%3A0x56187c1c3e3334bb!2s960%20Turnpike%20St%20%2330%2C%20Canton%2C%20MA%2002021%2C%20Hoa%20K%E1%BB%B3!5e0!3m2!1svi!2s!4v1637728312802!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    
                </div>
            </div> -->
        </div>
    </section>
    <!-- Promo video - Testiominals -->
    <section class="testimonials">
        <div class="background bg-img bg-fixed section-padding pb-0" data-background="<?= esc_url($testimonials['image']['url']) ?>" data-overlay-dark="5">
            <video loop autoplay playsinline muted class="bg-video" src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/video/3.mp4"></video>
            <div class="bg-light-under __hover"></div>
            <div class="container">
                <div class="row">
                    <!-- Promo video -->
                    <div class="col-md-6">
                        
                    </div>
                    <!-- Testiominals -->
                    <div class="col-md-5 offset-md-1">
                        <div class="testimonials-box animate-box" data-animate-effect="fadeInUp">
                            <div class="head-box">
                                <h4><?= $testimonials['title'] ?></h4>
                            </div>
                            <div class="owl-carousel owl-theme">
                                <?php foreach ($testiominals_list as $key => $value): ?>
                                    <div class="item"> <span class="quote"><img src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/img/quot.png" alt=""></span>
                                        <p><?= $value['description'] ?></p>
                                        <div class="info">
                                            <div class="author-img"> <img src="<?= esc_url($value['image']) ?>" alt=""> </div>
                                            <div class="cont">
                                                <?= $value['title'] ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Clients -->
    <section class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-7 owl-carousel owl-theme">
                    <?php foreach ($clients as $value): ?>
                        <?php if (!empty($value['image'])): ?>
                        <div class="clients-logo">
                            <a href="<?= $value['link']['url'] ?>"><img src="<?= esc_url($value['image']) ?>" alt=""></a>
                        </div>
                        <?php endif ?>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();