<?php
/**
 * Template Name: Testimonials
 *
 * @package canec
 */

// ACF

$custom_headline = get_field('custom_headline');
$subtitle = get_field('subtitle');
$subtext = get_field('subtext');
$section_1_headline = get_field('section_1_headline');
$section_1_text = get_field('section_1_text');
$section_2_headline = get_field('section_2_headline');
$section_2_text = get_field('section_2_text');
$section_2_image = get_field('section_2_image');
$section_4_text = get_field('section_4_text');
$section_4_testimonial = get_field('section_4_testimonial');
$section_4_image = get_field('section_4_image');
$section_5_content = get_field('section_5_content');
$section_6_image = get_field('section_6_image');
$section_6_headline = get_field('section_6_headline');
$section_6_testimonial = get_field('section_6_testimonial');
$section_7_image = get_field('section_7_image');


get_header(); ?>

	<section class="section-post">
		<div class="container">
			<?php
				while ( have_posts() )
					the_post();
				the_content();
					?><br><br>
			<div class="grid-list">

				<?php while ( have_rows('testimonial') ) : the_row(); ?>

					<div class="grid-item">
						<div class="testimonial">
							<?php echo get_sub_field('testimonial'); ?>
							<h5><?php echo get_sub_field('author') ?></h5>
						</div>
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