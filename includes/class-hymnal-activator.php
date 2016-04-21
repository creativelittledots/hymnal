<?php

/**
 * Fired during plugin activation
 *
 * @link       https://creativelittledots.co.uk
 * @since      1.0.0
 *
 * @package    Hymnal
 * @subpackage Hymnal/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Hymnal
 * @subpackage Hymnal/includes
 * @author     Darby Manning <darby@creativelittledots.co.uk>
 */
class Hymnal_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
    	
    	flush_rewrite_rules();

	}

}