<?php
 /**
 *
 * @package   Inhabitent Theme -  Adventures Custom Posts
 * @author    Daniel Andrade <dcca12@gmail.com>
 * @license   GPL-2.0+
 * @copyright 2020 Inhabitent Shop
 *
 * @wordpress-plugin
 * Plugin Name: Inhabitent Theme - Adventures Custom Posts
 * Description: This add the adventures area to your theme.
 * Version:     1.0.0
 * Author:      DCCA
 * Author URI:  https://github.com/DCCA
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Define plugin directory
 *
 * @since 1.0.0
 */
define( 'AD_DIR', dirname( __FILE__ ) );

/**
 * General housekeeping and plugin activation tasks
 *
 * @since 1.0.0
 */
include_once( AD_DIR . '/lib/functions/general.php' );
register_activation_hook( __FILE__, array( 'AD_General', 'plugin_activation' ) );

/**
 * Post types
 *
 * @since 1.0.0
 */
include_once( AD_DIR . '/lib/functions/post-types.php' );
