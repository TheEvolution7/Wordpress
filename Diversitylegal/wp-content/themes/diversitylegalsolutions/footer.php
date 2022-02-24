<footer class="footer-area--01 footer-area--01--modifi">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-3 col-xl-3 col-xxl-3 col-sm-6 col-xs-9 col-10 order-sm-1 order-lg-1">
            <div class="footer-content text-center text-sm-start">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer-content--logo d-block">
                <img src="<?php echo get_theme_mod( 'img-footer' ); ?>" alt="<?php bloginfo( 'name' ); ?>">
              </a>
              <p class="footer-content--text text-dark"><?php echo get_theme_mod( 'option_footer_1' ); ?></p>
              <ul class="footer-content--social">
<!--                 <li>
                  <a href="<?php echo get_theme_mod( 'option_social_4' ); ?>">
                    <i class="fab fa-instagram"></i>
                  </a>
                </li> -->
                <li>
                  <a href="<?php echo get_theme_mod( 'option_social_3' ); ?>">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
<!--                 <li>
                  <a href="<?php echo get_theme_mod( 'option_social_2' ); ?>">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li>
                  <a href="<?php echo get_theme_mod( 'option_social_1' ); ?>">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li> -->
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-xl-3 col-xxl-3 col-sm-4 col-xs-11 offset-sm-1 offset-lg-0 order-sm-2 order-lg-2">
            <div class="footer-widget footer-widget--01 text-center text-sm-start">
              <h5 class="footer-widget--title">Services</h5>
              <?=  menu('service-menu','footer-widget--list m-0 p-0 list-unstyled') ?>
            </div>
          </div>
          <div class="col-lg-3 col-xl-3 col-xxl-3 col-sm-4 col-xs-11 offset-sm-1 offset-lg-0 order-sm-4 order-lg-3">
            <div class="footer-widget footer-widget--02 text-center text-sm-start">
              <h5 class="footer-widget--title">Menu</h5>
              <?=  menu('footer-menu','footer-widget--list m-0 p-0 list-unstyled') ?>
            </div>
          </div>
          <div class="col-lg-3 col-xl-3 col-xxl-3 col-sm-6 col-xs-11 order-sm-3 order-lg-4">
            <div class="footer-widget footer-widget--03 text-center text-sm-start">
              <h5 class="footer-widget--title">Contact Info</h5>
              <ul class="footer-widget--info m-0 p-0 list-unstyled">
                    <?php echo get_theme_mod( 'option_footer_4' ); ?>
                <li class="footer-2-datails">
                  <i class="fas fa-phone-alt"></i>
                  <a href="tel:<?php echo get_theme_mod( 'option_footer_2' ); ?>"><?php echo get_theme_mod( 'option_footer_2' ); ?></a>
                </li>
                <li class="footer-2-datails">
                  <i class="fas fa-envelope"></i>
                  <a href="mailto:<?php echo get_theme_mod( 'option_footer_3' ); ?>"><?php echo get_theme_mod( 'option_footer_3' ); ?></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="copyright-area">
          <p><?php echo get_theme_mod( 'option_footer_5' ); ?></p>
        </div>
      </div>
      <?php wp_footer() ?>   
    </footer>
    <!-- Footer Section End -->
  </div>
  <!-- Plugin's Scripts -->
  <!-- Custom stylesheet -->
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor.min.js"></script>
  <script>
    /**
     * Replace all SVG images with inline SVG
     */
    $(document).ready(function () {
      $('img[class*="make-it-inline"]').each(function () {
        var $img = jQuery(this);
        var imgURL = $img.attr('src');
        var attributes = $img.prop("attributes");

        $.get(imgURL, function (data) {
          // Get the SVG tag, ignore the rest
          var $svg = jQuery(data).find('svg');

          // Remove any invalid XML tags
          $svg = $svg.removeAttr('xmlns:a');

          // Loop through IMG attributes and apply on SVG
          $.each(attributes, function () {
            $svg.attr(this.name, this.value);
          });

          // Replace IMG with SVG
          $img.replaceWith($svg);
        }, 'xml');
      });
    });
  </script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/fancybox/jquery.fancybox.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/nice-select/jquery.nice-select.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/aos/aos.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/counter-up/jquery.counterup.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/counter-up/waypoints.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/slick/slick.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/skill-bar/skill.bars.jquery.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/plugins/isotope/isotope.pkgd.min.js"></script>
  <!-- Activation Script -->
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/slider-activations.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/menu.js"></script>
</body>

</html>