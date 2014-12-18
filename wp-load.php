<?php
/**
 * Bootstrap file for setting the ABSPATH constant
 * and loading the wp-config-test.php file. The wp-config-test.php
 * file will then load the wp-settings.php file, which
 * will then set up the WordPress environment.
 *
 * If the wp-config-test.php file is not found then an error
 * will be displayed asking the visitor to set up the
 * wp-config-test.php file.
 *
 * Will also search for wp-config-test.php in WordPress' parent
 * directory to allow the WordPress directory to remain
 * untouched.
 *
 * @internal This file must be parsable by PHP4.
 *
 * @package WordPress
 */

/** Define ABSPATH as this file's directory */
define( 'ABSPATH', dirname(__FILE__) . '/' );

error_reporting( E_CORE_ERROR | E_CORE_WARNING | E_COMPILE_ERROR | E_ERROR | E_WARNING | E_PARSE | E_USER_ERROR | E_USER_WARNING | E_RECOVERABLE_ERROR );

if ( file_exists( ABSPATH . 'wp-config-test.php') ) {

	/** The config file resides in ABSPATH */
	require_once( ABSPATH . 'wp-config-test.php' );

} elseif ( file_exists( dirname(ABSPATH) . '/wp-config-test.php' ) && ! file_exists( dirname(ABSPATH) . '/wp-settings.php' ) ) {

	/** The config file resides one level above ABSPATH but is not part of another install */
	require_once( dirname(ABSPATH) . '/wp-config-test.php' );

} else {

	// A config file doesn't exist

	define( 'WPINC', 'wp-includes' );
	define( 'WP_CONTENT_DIR', ABSPATH . 'wp-content' );
	require_once( ABSPATH . WPINC . '/load.php' );
	require_once( ABSPATH . WPINC . '/version.php' );

	wp_check_php_mysql_versions();
	wp_load_translations_early();

	// Standardize $_SERVER variables across setups.
	wp_fix_server_vars();

	require_once( ABSPATH . WPINC . '/functions.php' );

	$path = wp_guess_url() . '/wp-admin/setup-config.php';

	// Die with an error message
	$die  = __( "There doesn't seem to be a <code>wp-config-test.php</code> file. I need this before we can get started." ) . '</p>';
	$die .= '<p>' . __( "Need more help? <a href='http://codex.wordpress.org/Editing_wp-config-test.php'>We got it</a>." ) . '</p>';
	$die .= '<p>' . __( "You can create a <code>wp-config-test.php</code> file through a web interface, but this doesn't work for all server setups. The safest way is to manually create the file." ) . '</p>';
	$die .= '<p><a href="' . $path . '" class="button button-large">' . __( "Create a Configuration File" ) . '</a>';

	wp_die( $die, __( 'WordPress &rsaquo; Error' ) );
}
