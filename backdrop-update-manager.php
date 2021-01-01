<?php
/**
 * Plugin Name: Backdrop Update Manager
 * Author:      Benjamin Lu
 * Author URI:  https://benjlu.com
 * Description: Backdrop Post Types registers post types of your choice.
 * License: GNU General Public License v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Domain Path: /languages
 * Text Domain: backdrop-update-manager
 * Version:     1.0.0
 *
 * @package     Backdrop Post Types
 * @copyright   Copyright (C) 2020. Benjamin Lu
 * @license     GNU General PUblic License v2 or later ( https://www.gnu.org/licenses/gpl-2.0.html )
 * @author      Benjamin Lu ( https://benjlu.com )
 */

/**
 * Table of Content
 *
 * 1.0 - Forbidden Access
 * 2.0 - Required Files
 */

/**
 * 1.0 - Forbidden Access
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * 2.0 - Required Files
 */
if ( file_exists( plugin_dir_path( __FILE__ ) . '/vendor/autoload.php' ) ) {
	require_once plugin_dir_path( __FILE__ ) . '/vendor/autoload.php';
}