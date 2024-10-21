<?php
/**
 * Template Name: Contact
 *
 * @package canec
 */

// ACF

$custom_headline = get_field('custom_headline');
$subtitle = get_field('subtitle');
$subtext = get_field('subtext');

get_header(); ?>

	<section class="section-post">
		<div class="container">
			<?php
				while ( have_posts() )
					the_post();
				the_content();
					?><br><br>
			<div class="grid-list">

				<?php while ( have_rows('locations') ) : the_row(); ?>

					<div class="grid-item">
						<div class="contact-location">
							<h4><?php echo get_sub_field('location_name'); ?></h4>
							<p><?php echo get_sub_field('location_description'); ?></p>

						</div>
						<div class="contact-map"><a href="<?php echo get_sub_field('location_link') ?>" target="_blank"><img src="<?php echo get_sub_field('location_map'); ?>"></a></div>
						
						
						
					</div>

				<? endwhile; ?>

			</div>
			
		</div>
	</section>


	<section class="testimonials-big">
		<div class="container">
		
			
		</div>
	</section>

<?php
get_footer();