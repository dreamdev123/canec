<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package canec
 */

// ACF

$subtitle = get_field('subtitle', 85);
$subtext = get_field('subtext', 85);
$image = get_field('image', 85);

get_header();

?>
<!-- 
	<section class="hero-sub" style="background-image: url(<?php echo $image['url'];?>);">
		<div class="container">
			<div class="hero-content">
				<h1>Blog</h1>
				<?php if ($subtitle) : ?>
				<h2>
					<?php echo $subtitle ?>
				</h2>
			<?php endif; ?>
			<?php if ($subtext) : ?>
				<p><?php echo $subtext ?></p>
			<?php endif; ?>
			</div>
		</div>
	</section> -->

	<section class="section-blog">
		<div class="container">

			<div class="blog-grid">

				<?php
				global $post;
				$args = array('posts_per_page' => -1, 'orderby' => 'post_id', 'order' => 'DESC' );
				$myposts = get_posts( $args );
				$count = count($myposts);
				foreach( $myposts as $post ){ setup_postdata($post);
					$counter++;
					?>

					<div class="blog-item<? if( $counter > 9 ) : ?> hidden<? endif ?>">
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
							</a>
							<a href="<?php the_permalink(); ?>" class="button">
								
									<?php 
							if(WPGlobus::Config()->language == "fr"): ?>
								
Lire la suite
							<? else: ?>
								Read More
							
							<? endif ?>		
								
								
								</a>
						</div>
					</div>
					<?
				}
				wp_reset_postdata();
				?>
				<? if( $counter > 9 ) : ?> <a href="#" class="button view-more">
				
					<?php 
							if(WPGlobus::Config()->language == "fr"): ?>
								
Lire d’autres transactions
							<? else: ?>
								View more posts
							
							<? endif ?>		
				
				</a><? endif ?>
			</div>
		</div>
	</section>

<?php
get_footer();
