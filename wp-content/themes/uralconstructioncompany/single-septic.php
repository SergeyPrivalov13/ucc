<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package UralConstructionCompany
 */

get_header();
?>

<?php
	$category = get_the_terms($post->ID, 'septic_cat');
	$current_cat_id = $category[0]->term_id;
	$current_cat_name = $category[0]->name;
	foreach ($category as $cat) {
		$tax =$cat->taxonomy;
		$slug =$cat->slug;	
	}
	while ( have_posts() ) :
		the_post();

		?>
			<section class="title-breadcrumb">
				<div class="container p-sm-0">
					<nav aria-label="breadcrumb">
					<ol class="breadcrumb col-lg-9 col-xl-12">
						<li class="breadcrumb-item"><a href="<?php echo home_url('/'); ?>">Главная</a></li>
						<li class="breadcrumb-item"><a href="<?php echo home_url('/catalog', 'http'); ?>">Каталог</a></li>
						<li class="breadcrumb-item"><a href="<?php echo home_url(); ?>/<?php echo $tax; ?>/<?php echo $slug; ?>"><?php echo $current_cat_name; ?></a></li>
						<li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
					</ol>
					</nav>

					<div class="title-block goods-title-block col-md-9 col-lg-8 col-xl-6 p-0">
						<h3 class="title" id="titlePage"><?php the_title(); ?></h3>
						<div class="subtitle goods_subtitle">
							<p class="subtitle_line"></p>
							<p class="subtitle_text">Производство, монтаж и продажа</p>
						</div>
					</div>

				</div>
			</section>

			<div class="goods">
				<div class="container">
					<div class="row justify-content-center justify-content-lg-end">
						<div class="col-8 col-md-6 col-lg-5 p-0">
							<div class="goods-img">
								<?php the_post_thumbnail('img-goods'); ?>
							</div>
						</div>
					</div>
				</div>

				<div class="goods-price">
					<div class="goods-price-line">
						<div class="container p-sm-0">
							<div class="goods-price-block">
								<p class="goods-price-old"><?php the_field('old_price'); ?>р.</p>
								<div class="goods-price-new"><span id="newPrice"><?php the_field('new_price'); ?></span>р.</div>
							</div>
						</div>

					</div>
				</div>

				<div class="container pl-md-0">
					<div class="goods-order">
						<ul class="about-main-content goods-content">
							<li class="about-main-list goods-list">
								<img src="<?php the_field('icon_1'); ?>" alt="Наименование">
								<p><?php the_field('charac_1'); ?></p>
							</li>

							<?php if(get_field('icon_2') && get_field('charac_2')): ?>
							<li class="about-main-list goods-list">
								<img src="<?php the_field('icon_2'); ?>" alt="Объём">
								<p><?php the_field('charac_2'); ?></p>
							</li>
							<?php endif; ?>

							<?php if(get_field('icon_3') && get_field('charac_3')): ?>
							<li class="about-main-list goods-list">
								<img src="<?php the_field('icon_3'); ?>" alt="Марка">
								<p><?php the_field('charac_3'); ?></p>
							</li>
							<?php endif; ?>

						</ul>
						<div class="goods-order-button">
							<a href="#good-item" class="button scroll-to" data-toggle="modal"
								data-target="#exampleModal">Заказать</a>
						</div>
					</div>
				</div>

			</div>

			<section class="harakterinstik">
				<div class="container p-sm-0">
					<div class="title-block harakterinstik-title-block col-sm-8 col-md-6 col-lg-5 col-xl-4 p-0">
						<h3 class="title">Характеристики</h3>
						<div class="subtitle harakterinstik_subtitle">
							<p class="subtitle_line"></p>
							<p class="subtitle_text">Ознакомтесь ближе</p>
						</div>
					</div>

					<div class="col p-0">
					<div class="charact" id="charact">
						<?php the_content(); ?>
					</div>
					<?php if( get_field('note') ): ?>	
						<p class="note"><span>Примечание:</span> <?php the_field('note'); ?></p>
					<?php endif; ?>

					
					</div>
				</div>
			</section>

			<?php if( get_field('item_diagram')): ?>
				<section class="scheme-goods">
					<div class="container p-sm-0">
						<div class="title-block harakterinstik-title-block col-lg-9 col-xl-8 p-0">
							<h3 class="title">Схема: <?php the_title(); ?></h3>
							<div class="subtitle scheme-goods_subtitle">
								<p class="subtitle_line"></p>
								<p class="subtitle_text">Ознакомтесь ближе</p>
							</div>
						</div>

						<div class="col-lg-10 col-xl-8 p-0">
						<img src="<?php the_field('item_diagram'); ?>" alt="">
						</div>

					</div>
				</section>
			<?php endif; ?>

			<div id="good-item"></div>

			<section class="goods-form">
				<div class="container p-sm-0">
					<div class="title-block goods-form-title-block col-sm-6 col-md-5 col-lg-4 col-xl-3 p-0">
						<h3 class="title">Форма заказа</h3>
						<div class="subtitle goods-form_subtitle">
							<p class="subtitle_line"></p>
							<p class="subtitle_text measurement-subtitle_text">Заполните форму!</p>
						</div>
					</div>
					<div class="goods-form-container">
						<div class="row">
							<div class="col-lg-8">
							<?php echo do_shortcode('[contact-form-7 id="735" title="Заказ"]'); ?>
<!-- <form method="POST" class="goods-form-block" id="formGoods">
<p class="goods-form-order"><span class="goods__order">Ваш заказ:</span> <input type="text" id="titleForm" name="titleGoods"></p>

<div class="row">
	<div class="col-md-6">
		<input autocomplete="off" class="measurement-input" type="text" name="nameGoods" placeholder="Имя">
	</div>
	<div class="col-md-6">
		<input autocomplete="off" class="measurement-input" type="text" name="phoneGoods"
			placeholder="Телефон">
	</div>
</div>

<div class="additional">
	<h3 class="additional-title">Дополнительные услуги:</h3>
	<div class="row">
		<div class="col-md-6">
			<label class="check">
				<input class="check__input" type="checkbox" value="15000" name="check-1">
				<span class="check__box"></span>
				<span class="check__border"></span>
				Монтажные работы (15 000 рублей)
			</label>
			<label class="check">
				<input class="check__input" type="checkbox" value="7 000" name="check-2">
				<span class="check__box"></span>
				<span class="check__border"></span>
				Услуги экскаватора (7 000 рублей)
			</label>
		</div>
		<div class="col-md-6">
			<label class="check">
				<input class="check__input" type="checkbox" value="15000" name="check-3">
				<span class="check__box"></span>
				<span class="check__border"></span>
				Монтажные работы (15 000 рублей)
			</label>
			<label class="check">
				<input class="check__input" type="checkbox" value="7000" name="check-4">
				<span class="check__box"></span>
				<span class="check__border"></span>
				Услуги экскаватора (7 000 рублей)
			</label>
		</div>
	</div>
</div>

<div class="total">
	<div class="row align-items-center">
		<div class="col-sm-6">
			<p class="total-text">Итого:<input type="text" id="total" name="total"></p>
		</div>
		<div class="col-sm-6 pl-lg-0">
			<button class="button col">Отправить</button>
		</div>
	</div>
</div>

</form> -->
							</div>
						</div>

						<div class="goods-form-img d-flex justify-content-center justify-content-lg-end">
							<div class="col-sm-9 col-md-8 col-lg-10 col-xl-12 p-lg-0 d-flex justify-content-center justify-content-lg-end">
								<img src="<?php echo get_template_directory_uri()?>/assets/img/goods/goods-form-bg.png" alt="Карзина">
							</div>
						</div>
					</div>
				</div>
			</section>
		<?php	

	endwhile; // End of the loop.
?>

<?php get_footer('goods'); ?>
