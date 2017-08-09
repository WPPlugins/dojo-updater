<?php
/*
Plugin Name: Dojo Toolkit Updater
Plugin URI: http://www.ramoonus.nl/wordpress/dojo-updater/
Description: This plugin adds an updated Dojo Javascript library to your set-up.
Version: 1.11.2
Author: Ramoonus
Author URI: http://www.ramoonus.nl/
License: GPL2
*/

function rw_dojo() {
		wp_deregister_script('dojo'); // deregister
		wp_enqueue_script('dojo', plugins_url('/js/dojo.js', __FILE__), false, '1.11.2');
}
add_action('wp_enqueue_scripts', 'rw_dojo');
?>