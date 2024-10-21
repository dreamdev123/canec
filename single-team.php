<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package canec
 */

get_header();
?>

	<section class="section-content">
		<div class="container">
			<main id="main" class="site-main post-widecontent">
					<h2>
						<?php the_title(); ?>
					</h2>
					<img class="mw200px" src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php the_title(); ?>" align="right" hspace="10">
					<?php
					while ( have_posts() ) : the_post();
					the_content();
					endwhile;
					?>
			</main>
			<!--< ?php get_sidebar(); ?>-->
		</div>
	</section>

<?php
get_footer();
