<?php

/**
 * @package   Contact_Widget
 * @author    Daniel Andrade <dcca12@gmail.com>
 * @license   GPL-2.0+
 * @link      http://example.com
 * @copyright 2015 Your Name or Company Name
 *
 * @wordpress-plugin
 * Plugin Name:       Inhabitent Theme - Contact Widget
 * Description:       Add the contact widget to your theme.
 * Version:           1.0.0
 * Author:            DCCA
 * Author URI:        @TODO
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Prevent direct file access
if (!defined('ABSPATH')) {
	exit;
}

// TODO: change 'Contact_Widget' to the name of your plugin
class Contact_Widget extends WP_Widget
{

	/**
	 * @TODO - Rename "widget-name" to the name your your widget
	 *
	 * Unique identifier for your widget.
	 *
	 * @since    1.0.0
	 *
	 * @var      string
	 */
	protected $widget_slug = 'Contact-widget';

	/*--------------------------------------------------*/
	/* Constructor
	/*--------------------------------------------------*/

	/**
	 * Specifies the classname and description, and instantiates the widget.
	 */
	public function __construct()
	{

		// TODO: update description
		parent::__construct(
			$this->get_widget_slug(),
			'Contact Form Widget',
			array(
				'classname'  => $this->get_widget_slug() . '-class',
				'description' => 'Short description of the widget goes here.'
			)
		);
	} // end constructor

	/**
	 * Return the widget slug.
	 *
	 * @since    1.0.0
	 *
	 * @return    Plugin slug variable.
	 */
	public function get_widget_slug()
	{
		return $this->widget_slug;
	}

	/*--------------------------------------------------*/
	/* Widget API Functions
	/*--------------------------------------------------*/

	/**
	 * Outputs the content of the widget.
	 *
	 * @param array $args     The array of form elements
	 * @param array $instance The current instance of the widget
	 */
	public function widget($args, $instance)
	{

		if (!isset($args['widget_id'])) {
			$args['widget_id'] = $this->id;
		}

		// go on with your widget logic, put everything into a string and …

		extract($args, EXTR_SKIP);

		$widget_string = $before_widget;

		// Manipulate the widget's values based on their input fields
		$title = empty($instance['title']) ? '' : apply_filters('widget_title', $instance['title']);
		$email = empty($instance['email']) ? '' : apply_filters('email', $instance['email']);
		$telephone = empty($instance['telephone']) ? '' : apply_filters('telephone', $instance['telephone']);
		$address = empty($instance['address']) ? '' : apply_filters('address', $instance['address']);
		$facebook_link = empty($instance['facebook_link']) ? '' : apply_filters('facebook_link', $instance['facebook_link']);
		$twitter_link = empty($instance['twitter_link']) ? '' : apply_filters('twitter_link', $instance['twitter_link']);
		$googleplus_link = empty($instance['googleplus_link']) ? '' : apply_filters('googleplus_link', $instance['googleplus_link']);
		// TODO: other fields go here...

		ob_start();

		if ($title) {
			$widget_string .= $before_title;
			$widget_string .= $title;
			$widget_string .= $after_title;
		}

		include(plugin_dir_path(__FILE__) . 'views/widget.php');
		$widget_string .= ob_get_clean();
		$widget_string .= $after_widget;

		print $widget_string;
	} // end widget

	/**
	 * Processes the widget's options to be saved.
	 *
	 * @param array $new_instance The new instance of values to be generated via the update.
	 * @param array $old_instance The previous instance of values before the update.
	 */
	public function update($new_instance, $old_instance)
	{

		$instance = $old_instance;

		$instance['title'] = strip_tags($new_instance['title']);
		$instance['email'] = strip_tags($new_instance['email']);
		$instance['telephone'] = strip_tags($new_instance['telephone']);
		$instance['address'] = strip_tags($new_instance['address']);
		$instance['facebook_link'] = strip_tags($new_instance['facebook_link']);
		$instance['twitter_link'] = strip_tags($new_instance['twitter_link']);
		$instance['googleplus_link'] = strip_tags($new_instance['googleplus_link']);

		return $instance;
	} // end widget

	/**
	 * Generates the administration form for the widget.
	 *
	 * @param array $instance The array of keys and values for the widget.
	 */
	public function form($instance)
	{

		// TODO: Define default values for your variables, create empty value if no default
		$instance = wp_parse_args(
			(array) $instance,
			array(
				'title' => 'Contact Info',
				'email' => '',
				'telephone' => '',
				'address' => '',
				'facebook_link' => '',
				'twitter_link' => '',
				'googleplus_link' => '',
			)
		);

		$title = strip_tags($instance['title']);
		$email = strip_tags($instance['email']);
		$telephone = strip_tags($instance['telephone']);
		$address = strip_tags($instance['address']);
		$facebook_link = strip_tags($instance['facebook_link']);
		$twitter_link = strip_tags($instance['twitter_link']);
		$googleplus_link = strip_tags($instance['googleplus_link']);
		// TODO: Store the rest of values of the widget in their own variables

		// Display the admin form
		include(plugin_dir_path(__FILE__) . 'views/admin.php');
	} // end form

} // end class

// TODO: Remember to change 'Widget_Name' to match the class name definition
add_action('widgets_init', function () {
	register_widget('Contact_Widget');
});
