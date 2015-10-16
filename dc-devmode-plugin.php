<?php
/**
 * @package DC Devmode
 */
/*
Plugin Name: Dave Clements Devmode
Plugin URI: https://www.doitwithwp.com/deactivate-certain-plugins-development-servers/
Description: There’s probably a few plugins that you don’t want active on your local or staging environments.
Version: 1
Author: Dave Clements
Author URI: https://www.doitwithwp.com/
License: GPLv2 or later
Text Domain: dcdevmode
*/

/* Disable specified plugins in development environment */
if ( defined( 'WP_ENV' ) && WP_ENV == 'dev' ) {
	$plugins = array(
		'iwp-client/init.php',
		'google-analytics-for-wordpress/googleanalytics.php',
	);
	require_once(ABSPATH . 'wp-admin/includes/plugin.php');
	deactivate_plugins($plugins);

	/* Put Jetpack in development mode */
	define( 'JETPACK_DEV_DEBUG', true);
}
