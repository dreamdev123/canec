<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package canec
 */

get_header();
?>

	<section class="section-content">
		<div class="container">
			<main id="main" class="site-main">

				<?php if ( have_posts() ) : ?>

					<h2>
						<?php
						/* translators: %s: search query. */
						printf( esc_html__( 'Search Results for: %s', 'canec' ), '<span>' . get_search_query() . '</span>' );
						?>
					</h2>

					<div class="blog-grid">
						
					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'search' );

					endwhile;

					the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>

			</div>

			</main><!-- #main -->
		</div>
	</section>

<?php
get_footer();
