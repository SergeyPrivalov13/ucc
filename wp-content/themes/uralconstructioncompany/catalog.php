<?php
/*
Template Name: Страница Каталога
*/
?>

<?php get_header(); ?>

<section class="title-breadcrumb">
  <div class="container p-sm-0">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb col-lg-9 col-xl-12">
				<li class="breadcrumb-item"><a href="<?php echo home_url('/'); ?>">Главная</a></li>
				<li class="breadcrumb-item active" aria-current="page">Каталог</li>
			</ol>
    </nav>

    <div class="title-block catalog-title-block col-md-9 col-lg-7 col-xl-6 p-0">
      <h3 class="title">Каталог продукции УСК</h3>
      <div class="subtitle catalog_subtitle">
        <p class="subtitle_line catalog-subtitle_line"></p>
        <p class="subtitle_text">Лучший выбор в Екатеринбурге</p>
      </div>
    </div>

  </div>
</section>


<section class="catalog">
  <div class="container">
    <div class="catalog-container">
      <div class="row">
        <?php 
          // вытаскиваем все рубрики в массив $categories, описание параметров функции смотрите чуть ниже
          $categories = get_terms('septic_cat', 'orderby=name&hide_empty=0');

          // если рубрики, соответствующие заданным параметрам, существуют,
          if($categories){

          // обращаемся к каждому объекту массива (в данном случае рубрика)
            foreach ($categories as $cat){
              $nameCat = $cat->name;
              $descCat = $cat->description;
              $taxCat = $cat->taxonomy;       // septic_cat
              $slugCat = $cat->slug;
              ?>
                <div class="col-md-6 col-xl-4 p-0">
                  <a href="<?php echo home_url('/'); ?><?php echo $taxCat?>/<?php echo $slugCat; ?>" class="catalog-item">
                    <div class="catalog-img">
                      <img src="<?php the_field('img_category', $cat); ?>" alt="Товар">
                    </div>
                    <div class="catalog-content">
                      <h3 class="catalog-title"><?php echo $nameCat; ?></h3>
                      <p class="catalog-subtitle"><?php echo $descCat; ?></p>
                    </div>
                  </a>
                </div>


              <?php
            }
          }
        ?>

      </div>
    </div>
  </div>
</section>

<section class="about catalog-about">
  <div class="container p-sm-0">
    <div class="title-block about-title-block col-lg-11 col-xl-9 p-0">
      <h3 class="title">ООО Уральская Строительная Компания</h3>
      <div class="subtitle catalog-about_subtitle">
        <p class="subtitle_line"></p>
        <p class="subtitle_text">Комплексная поставка и монтаж канализационного оборудования.</p>
      </div>
    </div>
    <div class="about-content">
      <?php the_content(); ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>