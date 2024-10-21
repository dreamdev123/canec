<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package canec
 */

?>

	<div class="blog-item">
		<div class="blog-img">
			<a href="<?php the_permalink(); ?>">
				<?php if (has_post_thumbnail()) : ?>
					<img class="mw100" src="<?php the_post_thumbnail_url();?>" alt="<?php the_title(); ?>">
				<?php endif; ?>
			</a>
		</div>
		<div class="blog-content">
			<a href="<?php the_permalink(); ?>">
				<h3><?php the_title(); ?></h3>
				<p><?php the_excerpt(); ?></p>
			</a>
			<a href="<?php the_permalink(); ?>" class="button">Read more</a>
		</div>
	</div>
