<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package UralConstructionCompany
 */

?>

<div class="col-sm-6 col-lg-4 col-xl-3 p-sm-0">
	<div class="slider-item category-item">
		<div class="slider-item-front category-front">
			<div>
				<div class="slider-item-img category-item-img">
					<?php the_post_thumbnail('img-goods'); ?>
				</div>
				<h3 class="slider-item-title"><?the_title(); ?></h3>
				<div class="slider-item-subtitle category-item-subtitle"><?php the_excerpt(); ?></div>
			</div>
			<div class="price">
				<p class="price-old">от <?php the_field('old_price'); ?>р</p>
				<p class="price-new">от <?php the_field('new_price'); ?>р</p>
			</div>
		</div>
		<div class="slider-item-back category-back">
			<div class="goodCat">
				<div>
					<div class="slider-item-img-2 category-item-img-2">
						<?php the_post_thumbnail('img-goods'); ?>
					</div>
					<h3 class="slider-item-title"><?the_title(); ?></h3>
					<div class="slider-item-subtitle"><?php the_excerpt(); ?></div>				
				</div>
				
				<div class="price">
					<p class="price-old">от <?php the_field('old_price'); ?>р</p>
					<p class="price-new">от <?php the_field('new_price'); ?>р</p>
				</div>
			</div>
			<div class="slider-item_btn">
				<a href="<?php echo esc_url( get_permalink() ); ?>" class="button mt-0 slider-item-button">Заказать</a>
			</div>
		</div>
	</div>
</div>

