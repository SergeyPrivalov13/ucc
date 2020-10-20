<?php
/*
Template Name: 
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

<div id="portfolio"></div>

  <?php
    $sliderCat = get_terms([
      'taxonomy' => 'our_work_tax',
      'orderby=name&hide_empty=0'
    ]);

    if ($sliderCat) {
      foreach( $sliderCat as $slider ) {
        $sliderCont = new WP_Query([
          'post_type'       => 'our_work',
          'posts_per_page'  => -1,
          'order'           => 'ASC',
          'orderby'         => 'ID',
          'tax_query'       => [[
            'taxonomy'  => 'our_work_tax',
            'field'     => 'slug',
            'terms'     => $slider->slug,
          ]]
        ]);
        
        $sliderName = $slider->name;
        $sliderDesc = $slider->description;
        $sliderId = $slider->term_id;

        if ( $sliderCont->have_posts() ) {
          while ( $sliderCont->have_posts() ) {
            $sliderCont->the_post();            
            ?>
              <section class="portfolio" id="<?php echo $sliderId; ?>">
                <div class="container p-sm-0">
                  <div class="row">
                    <div class="col-lg-5">

                      <div class="col-lg-9 title-block portfolio-title-block p-sm-0">
                        <h3 class="title"><?php echo $sliderName; ?></h3>
                        <div class="subtitle portfolio-subtitle">
                          <p class="subtitle_line"></p>
                          <p class="subtitle_text"><?php echo $sliderDesc?></p>
                        </div>
                      </div>
                      <div class="port_text">
                        <?php the_content(); ?>                      
                      </div>

                    </div>

                    <div class="col-lg-7 p-0 pl-sm-3 pr-sm-3">

                      <div id="<?php the_field('id_slider'); ?>" class="swiper-container">
                        <div class="swiper-wrapper">                        
                          <?php if (get_field('img_work_1')) :?>
                          <div class="swiper-slide portfolio-slide">
                            <img src="<?php the_field('img_work_1'); ?>" alt="Работа">
                          </div>
                          <?php endif;?>
                          <?php if (get_field('img_work_2')) :?>
                          <div class="swiper-slide portfolio-slide">
                            <img src="<?php the_field('img_work_2'); ?>" alt="Работа">
                          </div>
                          <?php endif;?>
                          <?php if (get_field('img_work_3')) :?>
                          <div class="swiper-slide portfolio-slide">
                            <img src="<?php the_field('img_work_3'); ?>" alt="Работа">
                          </div>
                          <?php endif;?>
                          <?php if (get_field('img_work_4')) :?>
                          <div class="swiper-slide portfolio-slide">
                            <img src="<?php the_field('img_work_4'); ?>" alt="Работа">
                          </div>
                          <?php endif;?>
                        </div>
                      </div>

                    </div>

                    <div class="col-lg-5">
                      <div class="portfolio-block">
                        <p class="portfolio_text"><?php the_title();?></p>
              
                          <button class="button col-sm-8 col-md-6 col-lg-10 ">Узнать стоимость</button>
              
                        <div class="slider-nav-block portfolio-button-block col-sm-7 col-md-10 col-lg-12 p-0">
                          <!-- Add Pagination -->
                          <div id="<?php the_field('id_pagination'); ?>" class="slider-pagination portfolio-pagination"></div>
                          <!-- Add Scrollbar -->
                          <div id="<?php the_field('id_scrollbar'); ?>" class="slider-scrollbar swiper-scrollbar"></div>
                          <!-- Add Arrows -->
                          <div class="slider-button">
                            <div id="<?php the_field('id_next'); ?>" class="slider-button-next portfolio-next"><svg class="bi bi-chevron-right"
                                width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                  d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                              </svg></div>
                            <div id="<?php the_field('id_prev'); ?>" class="slider-button-prev portfolio-prev"><svg class="bi bi-chevron-left"
                                width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                  d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                              </svg></div>
                          </div>
                        </div>

                      </div>
                      
                    </div>
                  </div>
                </div>
              </section>
            <?php
          };
        };        
      }
    }

  ?>


<?php get_footer(); ?>