<?php
/*
Template Name: Контакты
*/
?>


<?php get_header(); ?>

  <div class="title-breadcrumb">
    <div class="container p-sm-0">
      <nav aria-label="breadcrumb">
        <?php echo wpcourses_breadcrumb( '' ); ?>
      </nav>
    </div>
  </div>

  <section class="contacts">
    <div class="container p-sm-0">
      <div class="row">
        <div class="col-lg-5 mb-5 mb-lg-0">
          <div class="title-block contacts-title-block col-9 col-sm-7 col-md-5 col-lg-10 col-xl-8 p-0">
            <h3 class="title"><?php the_title(); ?></h3>
            <div class="subtitle contacts_subtitle">
              <p class="subtitle_line"></p>
              <p class="subtitle_text">Свяжитесь с нами</p>
            </div>
          </div>
  
          <div class="contacts-text-main">
            <?php the_content(); ?>
          </div>
  
          <div class="contacts-content">
            <img src="<?php the_field('icon_adress'); ?>" alt="Адрес офиса">
            <div class="contacts-text">              
              <p class="contacts-text_title">Адрес офиса и склада:</p>
              <p class="contacts-text_subtitle"><?php the_field('adress'); ?></p>
            </div>
          </div>
          <div class="contacts-content">
            <img src="<?php the_field('icon_phone'); ?>" alt="Телефон">
            <div class="contacts-text">
              <p class="contacts-text_title">Телефон:</p>              
              <p class="contacts-text_subtitle"><?php the_field('phone'); ?></p>
              <p class="contacts-text_subtitle"><?php the_field('phone_2'); ?></p>
            </div>
          </div>
          <div class="contacts-content">
            <img src="<?php the_field('icon_email'); ?>" alt="Email">
            <div class="contacts-text">
              <p class="contacts-text_title">Email: </p>
              <p class="contacts-text_subtitle"><?php the_field('email'); ?></p>
            </div>
          </div>
          <div class="contacts-content">
            <img src="<?php the_field('icon_working'); ?>" alt="График">
            <div class="contacts-text">
              <p class="contacts-text_title">График работы:</p>              
              <p class="contacts-text_subtitle"><?php the_field('working'); ?></p>
            </div>
          </div>
        </div>
        <div class="col-lg-7">
          <?php echo do_shortcode('[gmap-embed id="107"]'); ?>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>