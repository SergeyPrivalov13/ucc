<?php

add_action('wp_enqueue_scripts', 'style_theme');								// Подключение стилей в Шапке
add_action('wp_footer', 'scripts_theme');												// Подключение скриптов в Футере
add_action( 'after_setup_theme', 'theme_register_nav_menu' );		// Меню
add_action('admin_menu', 'add_gcf_interface');  								// Глобальные произвольные поля
add_action('widgets_init', 'registr_my_widgets');								//Виджеты

// Фильтр шорткода
add_filter( 'wpcf7_form_elements', 'do_shortcode' );

// Шорткод заголовка
add_shortcode('title_post', 'show_title');
function show_title(){
	$title = get_the_title();
	return $title;
}

// Шорткод цены
add_shortcode('price_post', 'show_price');
function show_price(){
	global $post;
	$price = $post->new_price;
	return $price;
}

// Вывод текста из шорткода в письмо на почте
add_filter('wpcf7_mail_components', 'do_shortcode_mail', 10, 3);
function do_shortcode_mail( $components, $contactForm, $mailComponent ){
	if( isset($components['body']) ){
		$components['body'] = do_shortcode($components['body']);
	}

	return $components;
}

// Удаляет "Рубрика: ", "Метка: " и т.д. из заголовка архива
add_filter( 'get_the_archive_title', function( $title ){
	return preg_replace('~^[^:]+: ~', '', $title );
});

// Виджеты
function registr_my_widgets(){
	register_sidebar(array(
		'name'        => 'Социальные иконки в меню',
		'id'          => 'social_top',
		'description' => 'Описание',
		'class'         => '',
		'before_widget' => '<div id="%1$s" class="menu-soc-link">',
		'after_widget'  => "</div>\n",
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => "</h2>\n",
		)	
	);
	register_sidebar(array(
		'name'        => 'Социальные иконки в подвале',
		'id'          => 'social_footer',
		'description' => 'Описание',
		'class'         => '',
		'before_widget' => '<div id="%1$s" class="footer-soc">',
		'after_widget'  => "</div>\n",
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => "</h2>\n",
		)	
	);
}

// Регистрация глобальных полей
function add_gcf_interface() {
	add_options_page('Global Custom Fields', 'Global Custom Fields', '8', 'functions', 'editglobalcustomfields');
}
function editglobalcustomfields() {
	?>
	<div class='wrap'>
	<h2>Глобальные настраиваемые поля</h2>
	<form method="post" action="options.php">
	<?php wp_nonce_field('update-options') ?>

	<p><strong>Номер телефона:</strong><br />
	<input type="text" name="phone" size="45" value="<?php echo get_option('phone'); ?>" /></p>
	
	<p><strong>Адрес:</strong><br />
	<input type="text" name="address" size="45" value="<?php echo get_option('address'); ?>" /></p>

	<p><strong>Время работы:</strong><br />
	<input type="text" name="timework" size="45" value="<?php echo get_option('timework'); ?>" /></p>

	<p><strong>Email:</strong><br />
	<input type="text" name="email" size="45" value="<?php echo get_option('email'); ?>" /></p>

	<p><strong>Текст в подвале:</strong><br />
	<input type="text" name="text_footer" size="45" value="<?php echo get_option('text_footer'); ?>" /></p>

	<p><input type="submit" name="Submit" value="Сохранить" /></p>

	<input type="hidden" name="action" value="update" />
	<input type="hidden" name="page_options" value="phone,address,timework,email,text_footer" />

	</form>
	</div>

	<?php
}

function theme_register_nav_menu() {
	// Регистрация меню wp_nav_menu
	register_nav_menu( 'top', 'Меню в шапке' );
	register_nav_menu( 'footer', 'Меню в подвале' );
	register_nav_menu( 'section', 'Меню каталога' );
	// Заголовок в шапке
	add_theme_support( 'title-tag');
	// Регистрация изображений
	add_theme_support( 'post-thumbnails');
	// Свой размер изображения
	add_image_size( 'logo', 173, 100, true );								// Логотип в шапке
	add_image_size( 'header-icon', 20, 20, true );
	add_image_size( 'about-icon', 64, 64, true );
	add_image_size( 'img-consultation', 470, 633, true );
	add_image_size( 'scheme-icon', 95, 74, true );					// Ход работы
	add_image_size( 'img-discount', 407, 292, true );				// Изображение гарантия и скидка
	add_image_size( 'img-about', 472, 543, true );
	add_image_size( 'img-about-icon', 30, 30, true );
	add_image_size( 'img-catalog', 193, 226, true );				// Изображение в каталоге
	add_image_size( 'img-category', 261, 230, true );
	add_image_size( 'img-goods', 424, 515, true );					// Изображение одного товара
	add_image_size( 'icon-goods', 30, 30, true );						// Иконка в характеристиках товара
	add_image_size( 'scheme-goods', 780, 552, true );				// Схема товара
	add_image_size( 'main-goods', 153, 170, true );			 		// Изображения на главной "Каталог"
	add_image_size( 'img-work', 668, 655, true );			 		// Изображения "Наши работы"
	// Логотип
	add_theme_support( 'custom-logo', [
		'height'      => auto,
		'width'       => auto,
		'flex-width'  => false,
		'flex-height' => false,
		'header-text' => '',
		'unlink-homepage-logo' => false, // WP 5.5
	] );
}

function style_theme() {
	// Подключение стилей в шапке перед </head> wp_head();
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/main-style.css');
};

function scripts_theme() {
	// Подключение скриптов в подвале перед </body> wp_footer();
	wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/js/swiper.min.js');
	wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js');
	wp_enqueue_script('sweetalert', 'https://unpkg.com/sweetalert/dist/sweetalert.min.js');
};

function wpcourses_breadcrumb( $sep = '' ) {
	global $post;
	$out = '';
	$out .= '<ol class="breadcrumb col-lg-9 col-xl-12">';
	$out .= '<li class="breadcrumb-item"><a href="' . home_url( '/' ) . '">Главная</a></li>';
	if ( is_single() ) {
		$terms = get_the_terms( $post, 'category' );
		if ( is_array( $terms ) && $terms !== array() ) {
			$out .= '<li class="breadcrumb-item"><a href="' . get_term_link( $terms[0] ) . '">' . $terms[0]->name . '</a></li>';
			$out .= '<span class="breadcrumb-sep">' . $sep . '</span>';
		}
	}
	if ( is_singular() ) {
		$out .= '<li class="breadcrumb-item active" aria-current="page">' . get_the_title() . '</li>';
	}
	if ( is_search() ) {
		$out .= get_search_query();
	}
	$out .= '</ol><!--breadcrumb-->';
	return $out;
};

