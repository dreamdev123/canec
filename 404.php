<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package canec
 */

get_header();
?>

<section class="section-404 not-found">				
	<div class="container">
		<h1 class="h1"><?php esc_html_e( 'Page not found!', 'canec' ); ?></h1>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Back To Home</a>
	</div>
</section><!-- .error-404 -->

<?php
get_footer();
