<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package canec
 */

get_header();
?>

		<div class="container clearfix">

			<section class="section-post">
				
	<?php
	while ( have_posts() ) :
		the_post();
		?>

			

			


			<main id="main" class="site-main post-content">
				<h4 class="date"><?php 
				if(WPGlobus::Config()->language == "fr")  {
					setlocale(LC_TIME, "fr_CA.UTF-8");
					echo ucwords(strftime("%e %B %G", get_the_time('U'))); 
				}else {
					the_date(); 
				}

				//the_date();	 ?></h4>
				<?php if (has_post_thumbnail()) : ?>
					<img class="post-img" src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php echo the_title(); ?>">
				<?php endif; ?>
				<?php the_content(); ?>
			</main>

			<aside id="secondary" class="widget-area sidebar">
				
				<h2>
				
				
					<?php 
							if(WPGlobus::Config()->language == "fr"): ?>
								
D’autres transactions
							<? else: ?>
								Recent Posts
							
							<? endif ?>		
				
				
				
				</h2>
				
				<?php
				global $post;
				$args = array('posts_per_page' => 9, 'orderby' => 'post_id', 'order' => 'DESC' );
				$myposts = get_posts( $args );
				foreach( $myposts as $post ){ setup_postdata($post);
					?>

					<div class="post-item">
						<a href="<?php the_permalink(); ?>">
							<div class="post-img">
								<?php if (has_post_thumbnail()) : ?>
									<img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title(); ?>">
								<?php endif; ?>
							</div>
							<div class="post-text">
								<h6><?php the_title(); ?></h6>
								<p><?php echo wp_trim_words( get_the_excerpt(), 12, '...' ); ?></p>
							</div>
						</a>
					</div>

					<?
				}
				wp_reset_postdata();
				?>

			</aside>

		</div>

			<? endwhile; // End of the loop.
			?>
</section>

<?php
get_footer();
