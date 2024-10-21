<?php
/**
 * Template Name: Home Page
 *
 * @package canec
 */

// ACF

$hero = get_field('hero');	
$logos = get_field('logos');
$transatlantic_solution_provider = get_field('transatlantic_solution_provider');
$industry_specialization = get_field('industry_specialization');
$contact = get_field('contact');
$read_more = get_field('read_more');
$testimonials_read_more = get_field('testimonials_read_more');
$testimonials_title = get_field('testimonials_title');
$in_the_news = get_field('in_the_news');

get_header(); ?>




	<section class="section-feature" style="background-image: url(<?php echo $transatlantic_solution_provider['image']['url']; ?>);">
		<div class="container">
			<h2><?php echo $transatlantic_solution_provider['headline']; ?></h2>
			<p><?php echo $transatlantic_solution_provider['text']; ?></p>
			<a href="<?php echo $transatlantic_solution_provider['link']; ?>" class="button"><?php echo $transatlantic_solution_provider['button_text']; ?></a>
		
		</div>
	</section>

	<section class="section-feature industry" style="background-image: url(<?php echo $industry_specialization['image']['url']; ?>);">
		<div class="container">
			<h2><?php echo $industry_specialization['headline']; ?></h2>
			<p><?php echo $industry_specialization['text']; ?></p>
			<a href="<?php echo $industry_specialization['link']; ?>" class="button"><?php echo $industry_specialization['button_text']; ?></a>
		</div>
	</section>

	<section  class="testimonials">
		<div class="container">
			<h2><?php echo get_field("testimonials_title"); ?></h2>
			<div class="slider-testimonial">

				<?php while ( have_rows('testimonials') ) : the_row(); ?>

					<div class="slide testimonial">
						<h4><?php echo get_sub_field('quote'); ?></h4>
						<h5><?php echo get_sub_field('author') ?></h5>
					</div>

				<? endwhile; ?>

			</div>
			<a href="<?php echo get_field("testimonial_link"); ?>" class="button"><?php echo get_field("testimonials_read_more"); ?></a>
		</div>
	</section>

	<section class="contact-home" style="background-image: url(<?php echo $contact['image']['url']; ?>);">
		<div class="container">
			<h2><?php echo $contact['headline']; ?></h2>
			<p><?php echo $contact['text']; ?></p>
			<a href="<?php echo $contact['link']; ?>" class="button">
				
				<?php 
							if(WPGlobus::Config()->language == "fr"): ?>
								
Lire la suite
							<? else: ?>
								Read More
							
							<? endif ?>		
				
			
			
			</a>
		</div>
	</section>

	<section class="canec-news">
		<div class="container">
			<h2><?php echo get_field("in_the_news"); ?></h2>

			<div class="blog-grid">

				<?php
				global $post;
				$args = array('posts_per_page' => 3, 'orderby' => 'post_id', 'order' => 'DESC' );
				$myposts = get_posts( $args );
				foreach( $myposts as $post ){ setup_postdata($post);
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
								<h3><?php echo strlen(get_the_title())>50 ? 	substr(get_the_title(),0, 50) . '...' : get_the_title(); ?></h3>
							</a>
							<p class="pub-date"><?php 
							if(WPGlobus::Config()->language == "fr")  {
								setlocale(LC_TIME, "fr_CA.UTF-8");
								echo ucwords(strftime("%e %B %G", get_the_time('U'))); 
							}else {
								the_date(); 
							}
							?></p>
							<p class="excerpt"><?php echo strlen(get_the_excerpt())>250 ? 	substr(get_the_excerpt(),0, 250) . '...' : get_the_excerpt();  ?></p>
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

			</div>
		</div>
	</section>

	

<?php
get_footer();