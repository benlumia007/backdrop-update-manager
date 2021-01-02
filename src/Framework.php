<?php
/**
 * @package     Backdrop Post Types
 * @copyright   Copyright (C) 2020. Benjamin Lu
 * @license     GNU General PUblic License v2 or later ( https://www.gnu.org/licenses/gpl-2.0.html )
 * @author      Benjamin Lu ( https://benjlu.com )
 */

namespace Benlumia007\Backdrop\Update\Manager;

class Framework {
    /**
     * Private static instance
     * 
     * @var string
     */
    private static $instance = null;

    /**
     * Private Constructor
     */
    private function __construct() {
        self::$instance = $this;
    }

	/**
	 * Get new get_instance();
	 */
	public static function get_instance() {
		if ( null === self::$instance ) {
			new self();
		}
		return self::$instance;
	}
}