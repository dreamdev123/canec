<?php
/**
 * Template Name: About
 *
 * @package canec
 */

// ACF

$custom_headline = get_field('custom_headline');
$subtitle = get_field('subtitle');
$subtext = get_field('subtext');
$our_team_title = get_field('our_team_title');
$our_team_page_title = get_field('our_team_page_title');


get_header();
?>

	<section class="section-content">
		<div class="container">
			<main id="main" class="site-main post-widecontent"><br>
				<?php
				while ( have_posts() )
					the_post();
				the_content();
					?>
				
				<h2><strong><?php echo $our_team_title; ?></strong></h2>
				<?php
			$args = array('post_type' => 'team', 'posts_per_page' => -1);
			$query = new WP_Query($args);
			$job_title = get_field('job_title');
		?>
		<?php if ( $query->have_posts() ) : ?>
		<?php while ( $query->have_posts() ) : $query->the_post(); ?>
			<?php
				$profile_picture = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full');
				$job_title = get_field('job_title');
				if (isset($profile_picture[0])) {
					$featured_img = $profile_picture[0];
					
				} else {
					$featured_img = '';
				}
			?>
					
					<div class="ourteam">
					
					<div class="image-wrapper">
					<a href="<?php the_permalink(); ?>">
						<img src="<?php echo get_the_post_thumbnail_url();?>" alt="feature" class="img-circle">
					</a>
						</div><div class="team-text" align="center"><h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<?php echo $job_title; ?><br><br>
</div>
					
			
					</div>
		<?php
				endwhile;
				wp_reset_postdata();
			endif;
		?>
				
				
				
				
			</main>
			<!--< ?php get_sidebar(); ?>-->
		</div>
	</section>

<?php
get_footer();
