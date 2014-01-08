<?php
/**
 * Plugin Name: Theme Script Loader
 * Plugin URI: https://github.com/lucaspenney/ThemeScriptLoader
 * Description: Allows you to add scripts from your current theme's 'scripts' directory
 * Version: 0.1.0
 * Author: Lucas Penney
 * Author URI: http://lucaspenney.com/
 * License: 
 */

function loadThemeScript($atts) {
	if (strpos($atts['name'], '.js') !== false) {
		$script = "<script src='";
		$script .= get_template_directory_uri() . "/scripts/";
		$script .= $atts['name'];
		$script .= "'></script>";
		return $script;
	}
	return "";
}

add_shortcode( 'themescript', 'loadThemeScript' );

?>