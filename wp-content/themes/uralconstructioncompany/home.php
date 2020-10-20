<?php
/*
Template Name: Главная страница
*/
?>

<?php get_header(); ?>

<section class="main-slider">
  <div class="main-slider-container container pl-sm-0 pr-sm-0">
    <div class="main-slider-block">
      <h2 class="p-0 title main-slider-title col-lg-9 col-xl-12">Автономная канализация «Урал»</h2>

      <div class="main-slider-link pl-0 col-lg-7 col-xl-12">
        <?php 
          $args = array(
            'number' => 4,
            'orderby' => 'count',
            'order' => 'DESC'
          );
          $catTag = get_terms('septic_cat', $args);
          if($catTag){
            foreach($catTag as $tag){
              $nameTag = $tag->name;
              $taxTag = $tag->taxonomy;
              $slugTag = $tag->slug;
              ?>
              <a href="<?php echo home_url('/'); ?><?php echo $taxTag?>/<?php echo $slugTag; ?>" class="line-bot-b"><?php echo $nameTag; ?></a> <span>/</span>
              <?php
            }
          }
        ?>        
      </div>
    </div>

    <div class="row flex-column-reverse flex-lg-row">
      <div class="main-slider-left col-lg-5 col-xl-6">

        <div class="slider-nav-block slider-button-block col-10 col-sm-7 col-md-6 col-lg-8 col-xl-6">
          <!-- Add Pagination -->
          <div id="slider-main-pagination" class="slider-pagination"></div>
          <!-- Add Scrollbar -->
          <div id="slider-main-scrollbar" class="slider-scrollbar swiper-scrollbar"></div>
          <!-- Add Arrows -->
          <div class="slider-button">
            <div id="slider-main-next" class="slider-button-next main-item-next"><svg class="bi bi-chevron-right"
                width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
              </svg></div>
            <div id="slider-main-prev" class="slider-button-prev main-item-prev"><svg class="bi bi-chevron-left"
                width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
              </svg></div>
          </div>
        </div>

        <div class="main-slider-content col-xl-10 p-0">
          <p class="main-slider-text">Оставьте заявку и инженер после уточнения особенностей участка и условий
            использования, бесплатно расчитает стоимость монтажа с учётом оборудования</p>
          <button class="button main-slider-button col-sm-7 col-md-6 col-lg-10 col-xl-8" data-toggle="modal" data-target="#modalHome">Узнать стоимость</button>
        </div>
      </div>
      <div class="main-slider-right pr-md-0 col-lg-7 col-xl-6">

        <div id="main-slider" class="swiper-container">
          <div class="swiper-wrapper">
            <?php
              $mainSlider = new WP_Query(array(
                'post_type' => 'septic',
                'orderby' => 'rand',
                'order' => 'DESC',
                'posts_per_page' => 5
              ));

              while ( $mainSlider->have_posts() ) {
                $mainSlider->the_post();
                ?>
                  <div class="row m-0 justify-content-end swiper-slide">
                    <div class="row col-md-9 col-lg-8 main-item">
                      <h3 class="main-item-title col-10 m-auto">Профессиональный монтаж под ключ
                        за 1 день от</h3>
                      <p class="main-item-price d-none d-sm-block"><?php the_field('new_price'); ?>р</p>
                      <div class="main-item-img"><?php the_post_thumbnail(); ?></div>

                      <p class="main-item-price d-block d-sm-none"><?php the_field('new_price'); ?>р</p>

                      <p class="main-item-name"><?php the_title(); ?></p>

                      <div class="main-item-text">
                        <h3 class="main-item-text_title">Продажа и монтаж</h3>
                        <p class="main-item-text_subtitle">автономной канализации в <br>Екатеринбурге и Свердловской облости
                        </p>
                      </div>

                    </div>
                  </div>
                <?php
              }
            ?>
          
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="catalog-main">
  <div class="catalog-main_block">
    <div class="container p-lg-0">
      <div class="row">
        <div class="col-xl-4 p-0">
          <div class="col-md-8 col-lg-7 m-auto col-xl-12 catalog-main-block catalog-main-g">
            <h3 class="catalog-main_title">Большой ассортимент автономных канализаций</h3>
            <div class="catalog-main_img"><?php the_post_thumbnail('main-goods'); ?></div>
            <p class="catalog-main_subtitle"><?php the_title(); ?></p>

            <a href="<?php echo home_url('/catalog', 'http'); ?>" class="col-md-10 col-xl-8 button catalog-main-button">Перейти в каталог</a>
          </div>
        </div>
        <div class="col-xl-8 pl-xl-0">
          <div id="septBlock" class="row m-lg-0">
              <?php
                $catTag = get_terms('septic_cat', $args);
                if($catTag){
                  foreach($catTag as $tag){
                    $nameTag = $tag->name;
                    $taxTag = $tag->taxonomy;
                    $descTag = $tag->description;
                    $slugTag = $tag->slug;
                    ?>
                    <div class="col-md-6 p-0">
                      <a href="<?php echo home_url('/'); ?><?php echo $taxTag?>/<?php echo $slugTag; ?>" class="catalog-main-item shad">
                        <div class="row align-items-end">
                          <h3 class="catalog-main-item_title col-6 pl-md-0"><?php echo $nameTag; ?></h3>
                          <div class="col-6 catalog-main-item_img">
                            <img src="<?php the_field('img_category', $tag); ?>" alt="Товар">                            
                          </div>
                        </div>
                        <div class="row">
                          <p class="catalog-main-item_subtitle col-11 col-lg-10 pl-md-0"><?php echo $descTag; ?></p>
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
    </div>
  </div>
</section>

<section class="slider">
  <div class="container position-relative p-sm-0">
    <div class="title-block col-lg-11 col-xl-9 p-0">
      <h3 class="title">Подбор септика “Урал” по выгодной цене</h3>
      <div class="subtitle slider_subtitle">
        <p class="subtitle_line slider-subtitle_line"></p>
        <p class="subtitle_text">Огромный выбор, лучшие цены</p>
      </div>
    </div>

    <div id="slider" class="swiper-container">
      <div class="swiper-wrapper">
          <?php 
            $goods = new WP_Query(array(
              'post_type' => 'septic',
            ));

            while ( $goods->have_posts() ) {
              $goods->the_post();
              ?>
              <div class="swiper-slide">
                <div class="slider-item">
                  <div class="slider-item-front">
                    <div class="slider-item-img">
                      <?php the_post_thumbnail(); ?>
                    </div>
                    <h3 class="slider-item-title"><?php the_title(); ?></h3>
                    <p class="slider-item-subtitle"><?php the_field('main_excerpt'); ?></p>
                    <div class="price">
                      <p class="price-old">от <?php the_field('old_price'); ?>р</p>
                      <p class="price-new">от <?php the_field('new_price'); ?>р</p>
                    </div>
                  </div>
                  <div class="slider-item-back">
                    <div>
                      <div class="slider-item-img-2">
                      <?php the_post_thumbnail(); ?>
                      </div>
                      <h3 class="slider-item-title"><?php the_title(); ?></h3>
                      <p class="slider-item-subtitle"><?php the_field('main_excerpt'); ?></p>
                      <div class="price">
                        <p class="price-old">от <?php the_field('old_price'); ?>р</p>
                        <p class="price-new">от <?php the_field('new_price'); ?>р</p>
                      </div>
                    </div>
                    <div class="slider-item_btn">
                      <a href="<?php the_permalink(); ?>" class="button slider-item-button">Заказать</a>
                    </div>
                  </div>
                </div>
              </div>
              <?php
            } 
          ?>
      </div>
    </div>

    <div class="slider-nav-block slider-navigation p-sm-0 col-10 col-sm-7 col-md-6 col-lg-5 col-xl-4">
      <!-- Add Pagination -->
      <div id="slider-pagination" class="slider-pagination"></div>
      <!-- Add Scrollbar -->
      <div id="slider-scrollbar" class="slider-scrollbar swiper-scrollbar"></div>
      <!-- Add Arrows -->
      <div class="slider-button">
        <div id="slider-button-next" class="slider-button-next"><svg class="bi bi-chevron-right" width="1em"
            height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
          </svg></div>
        <div id="slider-button-prev" class="slider-button-prev"><svg class="bi bi-chevron-left" width="1em"
            height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
          </svg></div>
      </div>
    </div>
  </div>
</section>

<section class="discount">
  <div class="container">
    <?php 
      $discount = new WP_Query([
        'post_type' => 'guarantee',

      ]);

      if ( $discount->have_posts() ) : while ( $discount->have_posts() ) : $discount->the_post();
        ?>
        <div class="row">
          <div class="col-lg-6 pl-sm-0 mb-4 mb-lg-0">
            <div class="title-block discount-title-block col-xl-10 p-0">
              <h3 class="title discount-title"><?php the_title(); ?></h3>
              <div class="subtitle discount-subtitle">
                <p class="subtitle_line discount-subtitle_line"></p>
                <p class="subtitle_text discount-subtitle_text"><?php the_field('discount_subtitle'); ?></p>
              </div>
            </div>

            <div class="discount-content">
              <?php the_content(); ?>
              <a class="discount-content_link" href="#"><?php the_field('discount_link'); ?></a>
            </div>

            <a href="#" class="button discount-button col-sm-7 col-md-6 col-lg-6 col-xl-6">Скачать прайс-лист</a>
          </div>
          <div class="col-lg-6 pl-0 pr-0 pl-lg-3">
            <div class="discount-guarantee">
              <div class="discount-guarantee_img"><?php the_post_thumbnail('img-discount'); ?></div>
              <div class="discount-guarantee-content">
                <h3 class="discount-guarantee_title"><?php the_field('title_left'); ?></h3>
                <p class="discount-guarantee_text"><?php the_field('text_left'); ?></p>
              </div>
            </div>
          </div>
        </div>

        <?php
      endwhile;
      endif;
    ?>
  </div>
</section>

<section class="scheme">
  <div class="container">
  <?php 
    $schemeCat = get_terms([
      'taxonomy' => 'work_progress_tax',
      'orderby=name&hide_empty=0'
    ]);

    if ($schemeCat) {
      foreach( $schemeCat as $schemeOne ) {
        $scheme = new WP_Query([
          'post_type' => 'work_progress',   // От кудого берём записи
          'posts_per_page' => -1,           // Кол-во выводимых записей
          'tax_query' => [[
            'taxonomy' => 'work_progress_tax',
            'field'    => 'slug',
            'terms'    => $schemeOne->slug,
          ]],
          'order'   => 'ASC',
          'orderby' => 'ID'
        ]);
        $schemeName = $schemeOne->name;
        $schemeDesc = $schemeOne->description;
        ?>

        <div class="row">
          <div class="title-block scheme-title-block col-sm-11 col-xl-9 p-sm-0">
            <h3 class="title scheme-title"><?php echo $schemeName;?></h3>
            <div class="subtitle scheme-subtitle">
              <p class="subtitle_line scheme-subtitle_line"></p>
              <p class="subtitle_text scheme-subtitle_text"><?php echo $schemeDesc;?></p>
            </div>
          </div>
        </div>

        <?php if ( $scheme->have_posts() ) : ?>
          <div class="row">

            <?php
              while ( $scheme->have_posts() ) {
                $scheme->the_post();
                ?>
                  <div class="col-md-6 col-xl-4">
                    <div class="scheme-item">
                      <div class="scheme-img">
                        <?php the_post_thumbnail('scheme-icon'); ?>
                      </div>
                      <?php the_content(); ?>

                    </div>
                  </div>
                <?php                
              };
            ?>

          </div>
        <?php endif;     
      }
    }
    ?>

    <div class="scheme-button">
      <button class="button col-sm-8 col-md-6 col-lg-4 col-xl-3 m-auto d-block" data-toggle="modal" data-target="#modalHome">Узнать стоимость</button>
    </div>
  </div>
</section>

<section class="consultation">
  <div class="container"> 
      <?php 
        /*
          * Получаем все 
          * post_type - название нашего произвольного типа записей (идентификатор)
          * posts_per_page - количество получаемых записей 
          * (в нашем случае стоит -1, это значит, что нужно получить все посты)
          */
        $consultation = new WP_Query(['post_type' => 'consultation', 'posts_per_page' => -1]);  
          
        //Не забудьте в цикл добавить полученный объект постов $workProgress
        if ( $consultation->have_posts() ) : while ( $consultation->have_posts() ) : $consultation->the_post(); ?> 
        <div class="consultation-container">
          <div class="consultation-top">
            <div class="row">
              <div class="col-md-10 col-lg-7 p-sm-0 pr-lg-3">
                <div class="title-block consultation-title-block p-sm-0">
                  <h3 class="title consultation-title"><?php the_title(); ?></h3>
                  <div class="subtitle consultation-subtitle">
                    <p class="subtitle_line consultation-subtitle_line"></p>
                    <p class="subtitle_text consultation-subtitle_text"><?php the_field('subtitle-consultation'); ?></p>
                  </div>
                </div>
              </div>

              <div class="col-lg-5 p-sm-0 pl-lg-3">
                <div class="consultation-img"><?php the_post_thumbnail(); ?></div>
              </div>
            </div>
          </div>
          <div class="consultation-bottom">
            <div class="row">
              <div class="col-lg-7 pl-sm-0">
                <div class="consultation-block">
                  <div class="consultation-content">
                    <?php the_content(); ?>
                  </div>
                  <div class="consultation-button">
                    <button class="button col-sm-8 col-md-6 col-lg-8 col-xl-7" data-toggle="modal" data-target="#modalHome">Получить консультацию в 1 клик</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php 
      endwhile; 
      endif; 
      ?>
  </div>
</section>

<!-- Modal -->
<div class="modal fade" id="modalHome" tabindex="-1" role="dialog" aria-labelledby="modalHomeLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class="modal-header_title">
          <h5 class="modal-title" id="modalHomeLabel">Заполните форму</h5>        
        </div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <?php echo do_shortcode('[contact-form-7 id="702" title="Контактная форма в модальном окне"]'); ?>

      </div>
    </div>
  </div>
</div>


<?php get_footer(); ?>