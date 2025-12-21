<?php

/**
 * Plugin Name:       Tanspot Toolkit
 * Plugin URI:        https://example.com/tanspot-toolkit
 * Description:       A comprehensive toolkit for managing Tanspot Theme Features.
 * Version:           1.0.0
 * Author:            Dremlayout
 * Author URI:        https://example.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       tanspot-toolkit
 * Domain Path:       /languages
 */


// Define

define('TANSPOT_TOOLKIT_URL', plugins_url('/', __FILE__));
define('TANSPOT_TOOLKIT_DIR',  dirname(__FILE__));

// inc all files



// include_once(TANSPOT_TOOLKIT_DIR . '/inc/elementor');
// include_once(TANSPOT_TOOLKIT_URL . '/inc/plugin-functions.php');
include_once(TANSPOT_TOOLKIT_DIR . '/inc/elementor/widgets-setup.php');
