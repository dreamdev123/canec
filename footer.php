<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package canec
 */

// ACF

$twitter = get_field('twitter', 5);
$linkedin = get_field('linkedin', 5);
$copyright = get_field('copyright', 5);

?>

	</div><!-- #content -->


	<footer class="main-footer">
		<div class="top-line container">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="main-logo">
				<img src="<?= esc_url(get_stylesheet_directory_uri());?>/img/logo.png" alt="Canec International">
			</a>
		</div>
		
		<nav class="footer-nav">
			<ul class="menu">
				<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'container' => false, 'items_wrap' => '%3$s' ) ); ?>
			</ul>
		</nav>
		<!--<div class="socials">
			<ul>
				
				<li><a target="_blank" href="< ?php echo $twitter; ?>" class="social"><img src="< ?= esc_url(get_stylesheet_directory_uri());?>/img/twitter.svg" alt="Twitter"></a></li>
				<li><a target="_blank" href="< ?php echo $linkedin; ?>" class="social"><img src="< ?= esc_url(get_stylesheet_directory_uri());?>/img/linkedin.svg" alt="Linkedin"></a></li>
			</ul>
		</div>-->
		<div class="copyright">
			<?php echo $copyright ?>
		</div>
	</footer>

<?php wp_footer(); ?>

</body>
</html>
