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

		<?php if (is_page('find-us') || is_home()) : ?>
			<header id="masthead" class="site-header header-border-bottom" role="banner">
			<?php else : ?>
				<header id="masthead" class="site-header" role="banner">
				<?php endif; ?>
				<div class='inhabitent-header-block header-container'>
					<div class="site-branding">
						<a href="<?php echo esc_url(home_url('/')); ?>" class="inhabitent-site-logo"></a>
						<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
						<p class="site-description screen-reader-text"><?php bloginfo('description'); ?></p>
					</div><!-- .site-branding -->
					<nav id="site-navigation" class="main-navigation" role="navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php echo esc_html('Primary Menu'); ?></button>
						<?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
					</nav><!-- #site-navigation -->
				</div>

				<?php if (is_front_page()) : ?>
					<div class='inhabitent-hero-banner'>
						<img src="<?php echo get_template_directory_uri() . '/assets/logos/inhabitent-logo-full.svg' ?>" alt="full-white-tent-logo" class="inhabitent-logo-front-page">
					</div>
				</header><!-- #masthead -->
				<div id="content" class='site-content container one-column'>
				<?php elseif (is_page('about')) : ?>
					<div class='inhabitent-hero-banner'>
						<h1 class='about-page-title' style='color: white'><?php echo get_the_title() ?></h1>
					</div>
			</header><!-- #masthead -->
			<div id="content" class='site-content container one-column'>
			<?php elseif (is_page('find-us') || is_home()) : ?>
				</header><!-- #masthead -->
				<div id="content" class='site-content container-without-top-margin two-column'>
				<?php else : ?>
					</header><!-- #masthead -->
					<div id="content" class='site-content container two-column'>
					<?php endif; ?>