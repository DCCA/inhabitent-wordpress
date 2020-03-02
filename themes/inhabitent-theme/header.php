<?php

/**
 * The header for our theme.
 *
 * @package Inhabitent_Theme
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html('Skip to content'); ?></a>
		<header id="masthead" class="site-header header-with-hero" role="banner">
		<div class='inhabitent-header-block header-container'>
			<div class="site-branding">
				<a href="<?php echo esc_url(home_url('/')); ?>" class="inhabitent-site-logo"></a>
				<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
				<p class="site-description screen-reader-text"><?php bloginfo('description'); ?></p>
			</div><!-- .site-branding -->
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php echo esc_html('Primary Menu'); ?></button>
				<?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
				<?php get_search_form(); ?>
			</nav><!-- #site-navigation -->
		</div>		
		<?php if (is_front_page()) : ?>
			<div class='inhabitent-hero-banner'>
				<img src="<?php echo get_template_directory_uri() . '/assets/logos/inhabitent-logo-full.svg' ?>" alt="full-white-tent-logo" class="inhabitent-logo-front-page">
			</div>
			</header><!-- #masthead -->
			<div id="content" class='site-content container'>
		<?php elseif ('adventures' == get_post_type() && !is_archive()) :?>
			<div class='inhabitent-hero-banner'>
			</div>
			</header><!-- #masthead -->
			<div id="content" class='site-content container'>
		<?php elseif (is_page('about')) : ?>
			<div class='inhabitent-hero-banner'>
				<h1 class='about-page-title'><?php echo get_the_title() ?></h1>
			</div>
			</header><!-- #masthead -->
			<div id="content" class='site-content container'>
		<?php else : ?>
			</header><!-- #masthead -->
			<div id="content" class='site-content container'>
		<?php endif; ?>