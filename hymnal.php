<?php

/**
 * @link              https://creativelittledots.co.uk
 * @since             1.0.0
 * @package           Hymnal
 *
 * @wordpress-plugin
 * Plugin Name:       Hymnal
 * Plugin URI:        https://creativelittledots.co.uk/hymnal
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Darby Manning
 * Author URI:        https://creativelittledots.co.uk
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       hymnal
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-hymnal-activator.php
 */
function activate_hymnal() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-hymnal-activator.php';
	Hymnal_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-hymnal-deactivator.php
 */
function deactivate_hymnal() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-hymnal-deactivator.php';
	Hymnal_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_hymnal' );
register_deactivation_hook( __FILE__, 'deactivate_hymnal' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-hymnal.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_hymnal() {

	$plugin = new Hymnal();
	$plugin->run();

}
run_hymnal();
