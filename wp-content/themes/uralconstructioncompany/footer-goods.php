<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-9 col-xl-7 pl-sm-0">
        <div class="row align-items-center">
          <div class="col-sm-7">
            <div class="row align-items-center">
              <div class="col-6">
                <a href="<?php bloginfo( 'url' ); ?>">
                <?php if( has_custom_logo() ): the_custom_logo(); ?>
                    <?php else: ?>
                    <a  href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
                <?php endif; ?>
                </a>
              </div>
              <div class="footer-text p-sm-0 col-6"><?php echo get_option('text_footer'); ?></div>
            </div>
          </div>
          <div class="col-sm-5 p-sm-0">
            <p class="footer-phone"><?php echo get_option('phone'); ?></p>
          </div>
        </div>

        <?php wp_nav_menu( [
            'theme_location'  => 'footer',
            'menu_class'      => '', 
            'menu_id'         => 'footer-menu',
            'echo'            => true,
            ] );
          ?>

      </div>
      <div
        class="col-md-12 col-lg-3 col-xl-5 p-sm-0 d-flex flex-column justify-content-between align-items-start align-items-sm-center align-items-lg-end">
        <div class="footer-address">
          <p><?php echo get_option('address'); ?></p>
          <p><?php echo get_option('timework'); ?></p>
          <p><?php echo get_option('email'); ?></p>
        </div>

        <?php dynamic_sidebar('social_footer'); ?>

      </div>
    </div>

  </div>
</footer>

  <?php wp_footer(); ?>

</body>

</html>