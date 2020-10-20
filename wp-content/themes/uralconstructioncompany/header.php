<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	
	<?php wp_head(); ?>
</head>

<body>

  <header class="header">
    <div class="container">
      <nav class="row align-items-center navbar-expand-lg">

        <div class="col-6 col-sm-6 col-md-4 col-lg-2 pl-0">
          <a href="<?php bloginfo( 'url' ); ?>" class="header-logo">
          <?php if( has_custom_logo() ): the_custom_logo(); ?>
            <?php else: ?>
              <a  href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
          <?php endif; ?>
          </a>
        </div>

        <div class="col-lg-2 col-xl-2 d-none d-lg-block pr-0">
          <div class="header-button-block">
            <button id="header-button" class="header-button">Каталог <span class="header-button-icon"><svg
                  class="bi bi-chevron-down" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                  xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                    d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                </svg></span>
            </button>
            <div class="header-button-shadow"></div>
          </div>
        </div>

        <div class="d-none d-md-block d-lg-none col-md-4 mt-2">
          <div class="header-phone-two">
            <a href="tel:+7(343)328-81-54">
              <img src="<?php echo get_template_directory_uri()?>/assets/img/header/icon-phone.png" alt="Телефон">
              <?php echo get_option('phone'); ?>
            </a>
          </div>
          <div class="header-address-two">
            <p><?php echo get_option('address'); ?></p>
            <p><?php echo get_option('timework'); ?></p>
            <p><?php echo get_option('email'); ?></p>
          </div>
        </div>

        <div class="col-6 d-flex justify-content-end col-md-1 offset-md-3 d-lg-none pr-sm-0">
          <button id="menu-1" class="menu-button-1" type="button">
            <span class="menu-button-1-icon"></span>
          </button>
        </div>

        <div class="col-sm-7 col-md-6 col-lg-8 pr-md-0 menu-main">
          <button id="menu-2" class="menu-button-2" type="button">
            <span class="menu-button-2-icon"></span>
          </button>

          <div class="col-lg-8">
            <?php wp_nav_menu( [
              'theme_location'  => 'top',
              'menu_class'      => 'menu', 
              'menu_id'         => 'menu',
              'echo'            => true,
              ] );
            ?>
          </div>

          <div class="col-lg-4 p-lg-0 mt-2">
            <div class="header-phone menu-header-phone">
              <a href="tel:+7(343)328-81-54">                
                <img src="<?php echo get_template_directory_uri()?>/assets/img/header/icon-phone.png" alt="Телефон">
                <?php echo get_option('phone'); ?>
              </a>
            </div>
            <div class="header-address menu-header-address">
              <p><?php echo get_option('address'); ?></p>
              <p><?php echo get_option('timework'); ?></p>
              <p><?php echo get_option('email'); ?></p>
            </div>
          </div>

          <div class="menu-soc">
            <?php dynamic_sidebar('social_top'); ?>
          </div>
        </div>
      </nav>
    </div>
  </header>

  <div class="d-none d-lg-block frame">
    <div class="container">
      <div class="row">
        <?php wp_nav_menu( [
          'theme_location'  => 'section',
          'menu'            => '', 
          'container'       => '', 
          'container_class' => '', 
          'container_id'    => '',
          'menu_class'      => 'frame-menu', 
          'menu_id'         => 'frame-menu',
          'echo'            => true,
          'fallback_cb'     => 'wp_page_menu',
          'before'          => '',
          'after'           => '',
          'link_before'     => '',
          'link_after'      => '',
          'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
          'depth'           => 0,
          'walker'          => '',
        ] )
        ;?>
      </div>
    </div>
  </div>