<?php
/*
Template Name: О нас
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

<section class="consultation pt-0">
  <div class="container">
    <div class="consultation-container">
      <div class="consultation-top">
        <div class="row">
          <div class="col-md-10 col-lg-7 p-sm-0 pr-lg-3">
            <div class="title-block consultation-title-block p-sm-0">
              <h3 class="title consultation-title"><?php the_field('title-about'); ?></h3>
              <div class="subtitle consultation-subtitle">
                <p class="subtitle_line consultation-subtitle_line"></p>
                <p class="subtitle_text consultation-subtitle_text"><?php the_field('subtitle-about'); ?></p>
              </div>
            </div>
          </div>

          <div class="col-lg-5 p-sm-0 pl-lg-3">
            <div class="consultation-img"><img src="<?php the_field('img-about'); ?>" alt="Консультант"></div>
          </div>
        </div>
      </div>
      <div class="consultation-bottom about-main-bottom">
        <div class="row">
          <div class="col-lg-7 pl-sm-0">
            <div class="about-main-container">
              <h3 class="about-main-title"><?php the_field('advantages_about'); ?></h3>
              <ul class="about-main-content">
                <li class="about-main-list">
                  <img src="<?php the_field('img_about_1'); ?>" alt="Опыт">
                  <p><?php the_field('text_1_about'); ?></p>
                </li>
                <li class="about-main-list">
                  <img src="<?php the_field('img_about_2'); ?>" alt="Качество">
                  <p><?php the_field('text_2_about'); ?></p>
                </li>
                <li class="about-main-list">
                  <img src="<?php the_field('img_about_3'); ?>" alt="Профессиональный коллектив.">
                  <p><?php the_field('text_3_about'); ?></p>
                </li>
                <li class="about-main-list">
                  <img src="<?php the_field('img_about_4'); ?>" alt="Собственное производство.">
                  <p><?php the_field('text_4_about'); ?></p>
                </li>
                <li class="about-main-list">
                  <img src="<?php the_field('img_about_5'); ?>" alt="Услуга монтаж под «ключ»">
                  <p><?php the_field('text_5_about'); ?></p>
                </li>
                <li class="about-main-list">
                  <img src="<?php the_field('img_about_6'); ?>" alt="Гарантия">
                  <p><?php the_field('text_6_about'); ?></p>
                </li>
                <li class="about-main-list">
                  <img src="<?php the_field('img_about_7'); ?>" alt="Опыт">
                  <p><?php the_field('text_7_about'); ?></p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="about about-main">
  <div class="container p-sm-0">
    <div class="title-block about-title-block col-lg-11 col-xl-3 p-0">
      <h3 class="title"><?php the_field('title-about_2'); ?></h3>
      <div class="subtitle about-main_subtitle">
        <p class="subtitle_line"></p>
        <p class="subtitle_text"><?php the_field('subtitle-about_2'); ?></p>
      </div>
    </div>
    <div class="about-content">
      <?php the_content(); ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>