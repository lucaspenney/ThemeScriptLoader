<?php
/**
 * Plugin Name: Theme Script Loader
 * Plugin URI: 
 * Description: Allows you to add scripts from your active theme's directory
 * Version: 0.1.0
 * Author: Lucas Penney
 * Author URI: http://lucaspenney.com/
 * License: 
 */

function contentFilter($content) {
	return $content;
}
add_filter( 'the_content', 'contentFilter'); 

?>