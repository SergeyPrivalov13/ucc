<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package UralConstructionCompany
 */

get_header();
?>

<?php if ( have_posts() ) : ?>

<section class="title-breadcrumb">
	<div class="container p-sm-0">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb col-lg-9 col-xl-12">
				<li class="breadcrumb-item"><a href="<?php echo home_url('/'); ?>">Главная</a></li>
				<li class="breadcrumb-item"><a href="<?php echo home_url('/catalog', 'http'); ?>">Каталог</a></li>
				<li class="breadcrumb-item active" aria-current="page"><?php the_archive_title(); ?></li>
			</ol>
		</nav>

		<div class="title-block category-title-block col-sm-10 col-md-8 col-lg-6 col-xl-5 p-0">
			<h3 class="title">Каталог: <?php the_archive_title(); ?></h3>
			<div class="subtitle category_subtitle">
				<p class="subtitle_line"></p>
				<p class="subtitle_text">Производство, монтаж и продажа</p>
			</div>
		</div>

	</div>
</section>

<section class="category">
	<div class="container p-sm-0">
		<div class="row m-sm-0">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				* Include the Post-Type-specific template for the content.
				* If you want to override this in a child theme, then include a file
				* called content-___.php (where ___ is the Post Type name) and that will be used instead.
				*/
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();
			?>	

		</div>
	</div>
</section>

<?php else : ?>

<section class="title-breadcrumb">
	<div class="container p-sm-0">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb col-lg-9 col-xl-12">
				<li class="breadcrumb-item"><a href="<?php echo home_url('/'); ?>">Главная</a></li>
				<li class="breadcrumb-item"><a href="<?php echo home_url('/catalog', 'http'); ?>">Каталог</a></li>
				<li class="breadcrumb-item active" aria-current="page"><?php the_archive_title(); ?></li>
			</ol>
		</nav>

		<div class="title-block category-title-block col-sm-10 col-md-8 col-lg-6 col-xl-5 p-0">
			<h3 class="title">Каталог: <?php the_archive_title(); ?></h3>
			<div class="subtitle category_subtitle">
				<p class="subtitle_line"></p>
				<p class="subtitle_text">Производство, монтаж и продажа</p>
			</div>
		</div>

	</div>
</section>

<section class="category">
	<div class="container p-sm-0">
		<div class="row m-sm-0">

			<?php	get_template_part( 'template-parts/content', 'septic_none' ); ?>

		</div>
	</div>
</section>

<?php endif; ?>

<?php if(get_field('title_tag')):?>

<section class="about category-about">
	<div class="container p-sm-0">
		<div class="title-block about-title-block col-lg-10 col-xl-8 p-0">
			<h3 class="title"><?php the_field('title_tag'); ?></h3>
			<div class="subtitle category-about_subtitle">
				<p class="subtitle_line"></p>
				<p class="subtitle_text"><?php the_field('subtitle_tag'); ?></p>
			</div>
		</div>
		<div class="about-content">
			<?php the_field('content_tag'); ?>
		</div>
	</div>
</section>

<?php endif; ?>

<?php get_footer(); ?>
