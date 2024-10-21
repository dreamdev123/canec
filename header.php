<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package canec
 */

// ACF

$twitter = get_field('twitter', 5);
$facebook = get_field('facebook', 5);
$linkedin = get_field('linkedin', 5);
$our_team_title = get_field('our_team_title', 288);
$our_team_page_title = get_field('our_team_page_title', 288);
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
	<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
	
	<?php
	$mobile_view_background_image = get_field('mobile_view_background_image');

	if(!empty($mobile_view_background_image) && wp_is_mobile()) {
		$header_hero_background = $mobile_view_background_image;
	} else {
		if ( has_post_thumbnail() && get_post_type() != "team" ) {
			$header_hero_background = get_the_post_thumbnail_url();
		} else {
			$header_hero_background = get_template_directory_uri() . '/img/header.jpg';
		}
	}

	if ( 'post' == get_post_type() ) {
		if (!empty(get_field('mobile_view_background_image', 85)) && wp_is_mobile()) {
			$header_hero_background = get_field('mobile_view_background_image', 85);
		} else {
			$header_hero_background = get_the_post_thumbnail_url(85);
		}
	}	

	?>

	<header class="main-header"  style="background-image: url(<?php echo $header_hero_background; ?>)" >
		<div class="container">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="main-logo">
				<img src="<?= esc_url(get_stylesheet_directory_uri());?>/img/logo.png" alt="Canec International">
			</a>
			<div class="mobile-lang"><a href="/">EN</a> | <a href="/fr/">FR</a></div>
			<nav class="main-nav">
				<div class="lang-menu">
					<?php wp_nav_menu( array( 'menu' => 'language_menu', 'container' => false, 'items_wrap' => '%3$s' ) ); ?>
				</div>
				<ul class="menu">
					<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'container' => false, 'items_wrap' => '%3$s' ) ); ?>
				</ul>
			</nav>
			<div id="burger-container">
				<div id="burger">
					<span>&nbsp;</span>
					<span>&nbsp;</span>
					<span>&nbsp;</span>
				</div>
			</div>
			
		</div>

		<div class="clear-both"></div>
		<?php if(is_front_page()){
			$hero = get_field('hero');
		?>
		<div class="container">
			<div class="hero-content front-hero">
				<div class="img-wrp">
					<img src="<?php echo get_stylesheet_directory_uri() . '/img/30_years.png'; ?>" alt="30 years">
				</div>
				<div class="header-desc">
					<h1><?php echo $hero['headline']; ?></h1>
					<?php if($hero['subheading'] != ""): ?>
					<h2><?php echo $hero['subheading']; ?></h2>
					<?php endif; ?>
					<p><?php echo $hero['text']; ?></p>	
				</div>
			</div>
			
		</div>
		<?php
		} ?>
		<?php if(!is_front_page()){ ?>
		<div class="container single-title">
			<h1>
			<?php 
			if(get_post_type() != "team"){ 
				single_post_title();
			} else{
				echo $our_team_page_title; 
			}  ?>
				
			</h1>
		</div>
			
		<?php 
		} ?>
		
	</header>

	<div id="content" class="site-content">
