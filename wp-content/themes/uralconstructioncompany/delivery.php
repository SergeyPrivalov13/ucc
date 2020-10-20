<?php
/*
Template Name: Доставка и оплат
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
    <div class="price-container">
      <div class="row">
        <div class="col-lg-5 mb-3 mb-mb-0">
          <div class="title-block contacts-title-block col-9 col-sm-8 col-md-6 col-lg-12 col-xl-9 p-0">
            <h3 class="title"><?php the_title(); ?></h3>
            <div class="subtitle price_subtitle">
              <p class="subtitle_line"></p>
              <p class="subtitle_text"><?php the_field('subtitle-payment'); ?>По всей России</p>
            </div>
          </div>

        </div>
        <div class="col-lg-7">
          <img src="<?php the_field('img-payment'); ?>" alt="Прайс">
        </div>
      </div>
      <div class="price-content">
        <div class="col-md-10 col-lg-6 col-xl-8 p-0">
          <div class="contacts-text-main">
            <?php the_field('text-payment'); ?>
          </div>

          <div class="price-buttons p-0 col-sm-8 col-md-7 col-lg-11 col-xl-9">
            <a href="<?php the_field('price_link_1'); ?>" class="button"><?php the_field('price-1'); ?></a>

            <a href="<?php the_field('price_link_2'); ?>" class="button price-button"><?php the_field('price-2'); ?></a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<?php get_footer(); ?>