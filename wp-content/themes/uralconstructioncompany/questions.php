<?php
/*
Template Name: Вопрос/ответ
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

<section class="about">
  <div class="container p-sm-0">
    <div class="title-block about-title-block col-md-9  col-lg-7 col-xl-6 p-0">
      <h3 class="title">Часто задаваемые вопросы</h3>
      <div class="subtitle category-about_subtitle">
        <p class="subtitle_line"></p>
        <p class="subtitle_text">Если остались ещё вопросы, свяжитесь с нами</p>
      </div>
    </div>
    <div class="about-content">
      <?php the_content(); ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>