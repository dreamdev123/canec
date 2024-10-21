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
				<?php
				while ( have_posts() )
					the_post();
				the_content();
					?>
			</main>
			<!--< ?php get_sidebar(); ?>-->
		</div>
	</section>

<?php
get_footer();
