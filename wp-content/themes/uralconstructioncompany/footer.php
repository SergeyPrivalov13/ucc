<section class="measurement">
    <div class="container">
      <div class="measurement-container">
        <div class="measurement-left">
          <div class="row">
            <div class="col-lg-8 p-sm-0">
              <div class="col-md-10 col-lg-11 col-xl-9 title-block measurement-title-block p-sm-0">
                <h3 class="title consultation-title">Бесплатный расчёт монтажа</h3>
                <div class="subtitle measurement-subtitle">
                  <p class="subtitle_line measurement-subtitle_line"></p>
                  <p class="subtitle_text measurement-subtitle_text">С учётом оборудования</p>
                </div>
              </div>

              <?php echo do_shortcode('[contact-form-7 id="108" title="Контактная форма в подвале"]'); ?>

            </div>
          </div>
        </div>
        <div class="measurement-right">
          <div class="measurement-img">
            <img src="<?php echo get_template_directory_uri()?>/assets/img/measurement/roulette.png" alt="Рулетка">
          </div>
        </div>
      </div>
    </div>
  </section>

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
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>          
</body>

</html>