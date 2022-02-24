<?php get_header(); 
/*
 Template Name: Home
 */
$section_1 = get_field('section_1');
$section_2 = get_field('section_2');
$section_3 = get_field('section_3');
$section_4 = get_field('section_4');
$section_5 = get_field('section_5');
$section_6 = get_field('section_6');
$section_7 = get_field('section_7');
$section_8 = get_field('section_8');
$section_9 = get_field('section_9');
$section_10 = get_field('section_10');

?>
    <section data-scroll-section>
        <div id="header" class="c-section" data-scroll id="top">
            <div class="o-container">
                <div class="o-layout flex">
                    <div class="o-layout_item u-1/2@from-small u-relative">
                        <div class="c-badge--wrapper primary-position"><svg class="c-badge-outline"
                                data-scroll-id="badge-scroll" viewBox="0 0 1000 1000"
                                preserveAspectRatio="xMinYMin">
                                <defs>
                                    <path id="TextPath" d="M 250 500 A 250,250 0 1 1 250 500.0001" />
                                </defs><text class="circle-text" x="90" y="0" text-anchor="middle">
                                    <textPath xlink:href="#TextPath" startOffset="50%"><?= $section_1['text'] ?></textPath>
                                </text>
                            </svg>
                            <div class="img-hello"><img src="<?= $section_1['logo'] ?>" alt="<?= $section_1['text'] ?>"></div>
                        </div>
                        <h5 class="c-banner-title__top u-mt-5__360 u-mt-10__768"><?= $section_1['title'] ?></h5>
                        <h2 class="c-banner_wrapper title-split"><?= $section_1['subtitle'] ?></h2>
                        <p class="o-text u-mr-5__768"><?= $section_1['content'] ?></p>
                        <div class="slider__item-button-wrap btn-group u-mb-3__360 u-mb-0__768">
                        <?php foreach ($section_1['group'] as $section): ?>
                            <a class="button btn-new __<?= $section['color'] ?>" href="<?= $section['url'] ?>">
                                <div class="button__title-mask">
                                    <div class="button__title-wrap"><span class="button__title"><?= $section['title'] ?></span>
                                    <span class="button__title--secondary"><?= $section['title'] ?></span>
                                    </div>
                                </div>
                            </a>
                        <?php endforeach ?>   
                        </div>
                    </div>
                    <div class="o-layout_item u-1/2@from-small u-relative">
                        <div class="left">
                            <div class="crop-content"></div>
                            <div class="crop-wrapper">
                                <div class="block__img-cover crop-parent"
                                    style="transform:matrix(1,0,0,1,0,30)"><img
                                        class="initial loaded lazyload blur-up" alt="<?= $section_1['title'] ?>"
                                        data-src="<?= $section_1['image'] ?>" src="<?= $section_1['image'] ?>"
                                        style="clip-path:polygon(0 5%,100% 5%,100% 95%,0 95%)" /></div>
                                <div class="crop-container" data-scroll><img
                                        class="initial loading crop lazyload blur-up" alt=""
                                        data-src="<?= $section_1['image'] ?>" src="<?= $section_1['image'] ?>"
                                        style="transform:matrix(1,0,0,1,-5,-5)" />
                                    <div class="crop-shadow" style="transform:matrix(1,0,0,1,-5,-5)"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="c-section eco-section" data-scroll id="eco">
            <div class="parallax-container js-text-parallax">
                <div class="fx-wrap" data-x="200">
                    <h3 class="fx-target"><?= $section_2['title'] ?></h3>
                </div>
            </div>
            <div class="o-container">
                <div class="o-layout">
                    <h2 class="c-banner_wrapper u-text-center title-split"><?= $section_2['title'] ?></h2>
                    <div class="box-layout u-mt-5__768">
                    <?php foreach($section_2['group'] as $section): ?>
                        <div class="o-layout_item u-1/2@to-medium u-1/3@from-small" data-scroll>
                            <div class="nsd-service__main u-mb-5__360 js-marquee">
                                <div class="nsd-service__hero-hover">
                                    <div class="nsd-service__heroTitle"><span class="nsd-service__heroWrap"><?= $section['title'] ?></span></div>
                                </div>
                                <div class="nsd-service__inner">
                                    <div>
                                        <h2 class="nsd-service__heading"><a class="nsd-service__link"
                                                href="#"><?= $section['title'] ?></a></h2>
                                        <div class="nsd-service__content"><?= $section['sub_title'] ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>   
                    </div>
                </div>
            </div>
        </div>
        <div class="c-section usecase-section -margin" id="usecases">
            <div class="parallax-container js-text-parallax">
                <div class="fx-wrap" data-x="-200">
                    <h3 class="fx-target"><?= $section_3['title'] ?></h3>
                </div>
            </div>
            <div class="o-container">
                <div class="o-layout -mobile-reverse">
                    <div class="o-layout_item u-1/2@from-small">
                        <div class="c-banner-figure">
                            <div class="c-banner-main thumb-img __1 img-ani" data-scroll data-scroll-speed="1"><img
                                    class="lazyload blur-up" data-src="<?= $section_3['image'] ?>"
                                    src="<?= $section_3['image'] ?>" alt="<?= $section_3['title'] ?>" /></div>
                            <!-- <div class="c-banner-src" data-scroll data-scroll-speed="5"><img
                                    class="lazyload blur-up" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/landing-1.1.463cda5f.jpg"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/landing-1.1.b599b580.jpg" alt="" /></div> -->
                            <div class="c-badge--wrapper primary-position"><svg class="c-badge-outline"
                                data-scroll-id="badge-scroll" viewBox="0 0 1000 1000"
                                preserveAspectRatio="xMinYMin">
                                <defs>
                                    <path id="TextPath" d="M 250 500 A 250,250 0 1 1 250 500.0001" />
                                </defs><text class="circle-text" x="90" y="0" text-anchor="middle">
                                    <textPath xlink:href="#TextPath" startOffset="50%"><?= $section_3['text'] ?></textPath>
                                </text>
                            </svg>
                            <div class="img-hello"><img src="<?= $section_3['logo'] ?>" alt="<?= $section_3['text'] ?>"></div>
                        </div>
                            
                        </div>
                    </div>
                    <div class="o-layout_item u-1/2@from-small" data-scroll>
                        <div class="u-ml-10__1366 u-ml-5__768 u-mt-5__360 u-mt-0__768 u-mt-5__1366">
                            <h2 class="c-banner_wrapper title-split"><?= $section_3['title'] ?></h2>
                            <?= $section_3['sub_title'] ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="c-section staking-section -margin" id="staking">
            <div class="parallax-container js-text-parallax">
                <div class="fx-wrap" data-x="200">
                    <h3 class="fx-target"><?= $section_4['heading'] ?></h3>
                </div>
            </div>
            <div class="o-container">
                <div class="o-layout -mobile-reverse">
                    
                    <div class="o-layout_item u-1/2@from-small" data-scroll>
                        <div class="u-mr-10__1366 u-mr-5__768 u-mb-5__360 u-mb-0__768 u-mt-0__768 u-mt-5__1366">
                            <h2 class="c-banner_wrapper title-split"><?= $section_4['title'] ?></h2>
                            <h3 class="title-wrapper __2"><b><?= $section_4['sub_title'] ?></b></h3>
                            <?= $section_4['content'] ?>
                        </div>
                    </div>
                    <div class="o-layout_item u-1/2@from-small">
                        <div class="c-banner-figure">
                            <div class="c-banner-main thumb-img __2 img-ani" data-scroll data-scroll-speed="1"><img
                                    class="lazyload blur-up" data-src="<?= $section_4['image'] ?>"
                                    src="<?= $section_4['image'] ?>" alt="<?= $section_4['title'] ?>" /></div>
                            <div class="c-badge--wrapper primary-position"><svg class="c-badge-outline"
                                    data-scroll-id="badge-scroll" viewBox="0 0 1000 1000"
                                    preserveAspectRatio="xMinYMin">
                                    <defs>
                                        <path id="TextPath" d="M 250 500 A 250,250 0 1 1 250 500.0001" />
                                    </defs><text class="circle-text" x="90" y="0" text-anchor="middle">
                                        <textPath xlink:href="#TextPath" startOffset="50%"><?= $section_4['text'] ?></textPath>
                                    </text>
                                </svg>
                                <div class="img-hello"><img src="<?= $section_4['logo'] ?>" alt="<?= $section_4['text'] ?>"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="c-section chart-section" id="token">
            <div class="parallax-container js-text-parallax">
                <div class="fx-wrap" data-x="-200">
                    <h3 class="fx-target"><?= $section_5['heading'] ?></h3>
                </div>
            </div>
            <div class="o-container">
                <h2 class="c-banner_wrapper u-text-center title-split" data-scroll
                    data-scroll-call="titleEffect"><?= $section_5['title'] ?></h2>
            </div>
            <div class="o-container u-mt-5__768">
                <div class="o-layout -mobile-reverse">
                    <div class="o-layout_item u-1/2@from-small">
                        <ul class="chart-data-s2 o-layout" data-canvas="token-distribution" data-canvas-type="pie" data-border-color="#f8ceb6">
                        <?php $i=0;foreach ($section_5['group_1'] as $section): ?>
                            <li class="o-layout_item u-1/2@from-small <?= $i == 5 ? 'active' : null ?>" data-color="#20252D" data-color-hover="#a26e39" data-label="<?= $section['label'] ?>" data-title="<?= $section['title'] ?>" data-subtitle="<?= $section['sublabel'] ?>" data-amount="<?= $section['chart_percent'] ?>"><div class="chart-data-item"><span class="chart-label"><?= $section['title'] ?></span><span class="chart-info"><span class="chart-percent"><?= $section['chart-percent'] ?>% </span><span class="chart-sublabel"><?= $section['sublabel'] ?></span></span></div></li>
                        <?php $i++;endforeach ?>   
                        </ul>
                    </div>
                    <div class="o-layout_item u-1/2@from-small">
                        <canvas class="chart-canvas chartjs-render-monitor" id="token-distribution" style="display: block; height: 300px; width: 474px;" width="948" height="600"></canvas>
                    </div>
                    <div class="o-layout_item u-12/12@from-small">
                        <div class="token-info-s2">
                            <div class="o-layout">
                            <?php foreach ($section_5['group_2'] as $section): ?>    
                                <div class="o-layout_item u-3/12@to-small">
                                    <div class="token-info-item <?= $section['class_color'] ?> animated fadeInUp" data-animate="fadeInUp" data-delay="<?= $section['delay'] ?>" style="visibility: visible; animation-delay: <?= $section['delay'] ?>s;">
                                        <div class="token-info-title"><?= $section['title'] ?></div>
                                        <h4 class="token-info-des"><?= $section['sub_title'] ?></h4>
                                    </div>
                                </div>
                            <?php endforeach ?>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>
        <section class="c-section roadmap-section" data-scroll-section="" id="roadmap">
            <div class="parallax-container js-text-parallax">
                <div class="fx-wrap" data-x="200">
                    <h3 class="fx-target"><?= $section_6['title'] ?></h3>
                </div>
            </div>
            <div class="o-layout" data-scroll>
                <div class="o-container">
                    <h2 class="c-banner_wrapper u-text-center title-split" data-scroll
                        data-scroll-call="titleEffect"><?= $section_6['title'] ?></h2>
                </div>
                <div class="timeline timeline-wrapper" data-cursor="timeline-wrapper">
                    <ol>
                    <?php $i=0;foreach ($section_6['group'] as $section): ?>    
                        <li class="<?= $i == 4 ? 'active' : null ?>">
                            <div>
                                <h2 class="title"><?= $section['title'] ?></h2>
                                <p class="desc"><?= $section['description'] ?></p>
                                <p class="time"><?= $section['time'] ?></p>
                            </div>
                        </li>
                    <?php $i++;endforeach ?>     
                    </ol>
                </div>
            </div>
        </section>
        <section class="c-section team-section u-mb-15__768" id="team" data-scroll data-scroll-section
            data-scroll-call="team-effect-2">
            <div class="parallax-container js-text-parallax">
                <div class="fx-wrap" data-x="-200">
                    <h3 class="fx-target"><?= $section_7['heading'] ?></h3>
                </div>
            </div>
            <div class="o-container">
                <h2 class="c-banner_wrapper title-split u-text-center"><?= $section_7['title'] ?></h2>
                <div class="c-team u-mt-5__768">
                    <div class="distort">
                        <div>
                        <?php foreach ($section_7['group'] as $section): ?>   
                            <img class="distort__img lazyload blur-up" alt=""  data-src="<?= $section['image'] ?>" src="<?= $section['image'] ?>" />
                        <?php endforeach ?>    
                       </div>
                    </div>
                    <div class="o-container">
                        <div class="team">
                        <?php foreach ($section_7['group'] as $section): ?>   
                            <div class="team__link">
                                <h2><?= $section['title'] ?></h2>
                                <p class="team__job"><?= $section['sub_title'] ?></p>
                                <div class="team__social-icons"><a class="single-icon" href="<?= $section['facebook'] ?>"><img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.1e46937b.svg" alt=""></a><a class="single-icon"
                                        href="<?= $section['inst'] ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram.a31b2bcd.svg" alt=""></a><a
                                        class="single-icon" href="<?= $section['linkedin'] ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedin.8861cb0e.svg"
                                            alt=""></a></div>
                            </div>
                        <?php endforeach ?>    
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="c-section press-section u-mb-15__768" data-scroll id="press">
            <div class="parallax-container js-text-parallax">
                <div class="fx-wrap" data-x="200">
                    <h3 class="fx-target"><?= $section_8['heading'] ?></h3>
                </div>
            </div>
            <div class="o-container u-mb-5__768">
                <div class="o-layout">
                    <h2 class="c-banner_wrapper u-text-center title-split"><?= $section_8['title'] ?></h2>
                </div>
            </div>
            <div class="news-section o-container">
                <p class="news-section__title flex">
                    <span class="news-section__title-text"><?= $section_8['title_1'] ?></span><span  class="news-section__title-author"><?= $section_8['title_2'] ?></span><span class="news-section__title-date"><?= $section_8['title_3'] ?></span></p>
                    <?php foreach ($section_8['group'] as $section): ?>   
                        <a class="news-section__item" data-img="<?= $section['image'] ?>">
                        <span class="news-section__item-text"><?= $section['title'] ?> </span><span
                            class="news-section__item-author"><?= $section['sub_title'] ?></span><span
                            class="news-section__item-date"><?= $section['date'] ?></span><img
                            class="news-section__item-image" src="<?= $section['image'] ?>" alt="<?= $section['title'] ?>" /></a>
                    <?php endforeach ?>            
            </div>
        </div>
        <div class="c-section partner-section o-container u-mb-15__768" id="partners">
            <div class="parallax-container js-text-parallax">
                <div class="fx-wrap" data-x="-200">
                    <h3 class="fx-target"><?= $section_9['heading'] ?></h3>
                </div>
            </div>
            <div class="o-layout -mobile-reverse">
                <div class="o-layout_item u-1/2@from-small">
                    <div class="nsd-logo-parent" data-scroll data-scroll-call="icon-effect">
                    <?php $i=1;foreach ($section_9['group'] as $section): ?>     
                        <a href="<?= $section['url'] ?>" class="nsd-logo-div<?= $i ?>"><img class="nsd-logo-child nsd-logo-img lazyload"  data-src="<?= $section['logo'] ?>" alt="" /></a>
                    <?php $i++;endforeach  ?>   
                                </div>
                </div>
                <div class="o-layout_item u-1/2@from-small">
                    <h2 class="c-banner_wrapper u-mt-5__360 u-ml-5__768 u-mt-0__768 title-split" data-scroll
                        data-scroll-call="titleEffect"><?= $section_9['title'] ?></h2>
                    <p class="u-ml-5__768 u-mb-5__360 u-mb-0__768"><?= $section_9['sub_title'] ?></p>
                </div>
            </div>
        </div>
        <div class="c-section contact-section" id="contact">
            <div class="parallax-container js-text-parallax">
                <div class="fx-wrap" data-x="200">
                    <h3 class="fx-target"><?= $section_10['heading'] ?></h3>
                </div>
            </div>
            <div class="o-container u-mb-3__768">
                <div class="o-layout">
                    <div class="o-layout_item u-1/2@from-small">
                        <h2 class="c-banner_wrapper -right-align title-split"><?= $section_10['title'] ?>
                        </h2>
                    </div>
                    <div class="o-layout_item u-1/2@from-small">
                        <p class="o-text contact-link"><a href="mailto:<?= $section_10['email'] ?>"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/new/mail.svg" alt=""><?= $section_10['email'] ?></a></p>
                        <p class="o-text contact-link"><a href="tel:<?= $section_10['phone'] ?>"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/new/phone.svg" alt=""><?= $section_10['phone'] ?></a></p>
                    </div>
                </div>
            </div>
            <div class="o-layout" data-scroll>
                <figure class="s-video-1"><a href="<?= $section_10['file'] ?>" download="" class="c-video-badge" data-video="8">
                        <div class="c-video"></div>
                        <p class="c-video_text"><?= $section_10['title_down'] ?></p>
                    </a><video id="c-video_duration" class="s-video-preview" muted preload="metadata" loop
                        autoplay playsinline="">
                        <source src="<?= $section_10['video'] ?>" type="video/mp4" /></video></figure>
            </div>
        </div>
    </section>
<?php get_footer(); ?>