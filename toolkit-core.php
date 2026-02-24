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

if (! defined('ABSPATH')) exit; // Exit if accessed directly




// Define

//define('TANSPOT_TOOLKIT_URL', plugins_url('/', __FILE__));
define('TANSPOT_TOOLKIT_DIR',  dirname(__FILE__));
define('TANSPOT_TOOLKIT_ELEMENTS_PATH', TANSPOT_TOOLKIT_DIR . '/inc/elementor/widgets');

// inc all files
include_once(TANSPOT_TOOLKIT_DIR . '/inc/plugin-helpers.php');
include_once(TANSPOT_TOOLKIT_DIR . '/inc/custom-post-service.php');
include_once(TANSPOT_TOOLKIT_DIR . '/inc/custom-post-project.php');
include_once(TANSPOT_TOOLKIT_DIR . '/inc/custom-post-team.php');
include_once(TANSPOT_TOOLKIT_DIR . '/libs/codestar-framework/codestar-framework.php');
include_once(TANSPOT_TOOLKIT_DIR . '/inc/common/csf-meta/csf-team-meta.php');



final class Dl_Core
{
    /**
     * Plugin Version
     *
     * @since 1.0.0
     * @var string The plugin version.
     */
    const VERSION = '1.0.0';

    /**
     * Minimum Elementor Version
     *
     * @since 1.2.0
     * @var string Minimum Elementor version required to run the plugin.
     */
    const MINIMUM_ELEMENTOR_VERSION = '3.0.0';

    /**
     * Minimum PHP Version
     *
     * @since 1.2.0
     * @var string Minimum PHP version required to run the plugin.
     */
    const MINIMUM_PHP_VERSION = '7.4';

    /**
     * Constructor
     *
     * @since 1.0.0
     * @access public
     */
    public function __construct()
    {

        // Init Plugin
        add_action('plugins_loaded', array($this, 'init'));
        add_action('init', array($this, 'load_textdomain'));
    }

    /**
     * Load tutor text domain for translation
     */
    public function load_textdomain()
    {
        load_plugin_textdomain('tanspot-toolkit', false, dirname(plugin_basename(__FILE__)) . '/languages');
    }

    /**
     * Initialize the plugin
     *
     * Validates that Elementor is already loaded.
     * Checks for basic plugin requirements, if one check fail don't continue,
     * if all check have passed include the plugin class.
     *
     * Fired by `plugins_loaded` action hook.
     *
     * @since 1.0.0
     * @access public
     */
    public function init()
    {

        // Check if Elementor installed and activated
        if (! did_action('elementor/loaded')) {
            add_action('admin_notices', array($this, 'admin_notice_missing_main_plugin'));
            return;
        }

        // Check for required Elementor version
        if (! version_compare(ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=')) {
            add_action('admin_notices', array($this, 'admin_notice_minimum_elementor_version'));
            return;
        }

        // Check for required PHP version
        if (version_compare(PHP_VERSION, self::MINIMUM_PHP_VERSION, '<')) {
            add_action('admin_notices', array($this, 'admin_notice_minimum_php_version'));
            return;
        }


        // Once we get here, We have passed all validation checks so we can safely include our plugin
        include_once(TANSPOT_TOOLKIT_DIR . '/inc/plugins-core.php');
    }

    /**
     * Admin notice
     *
     * Warning when the site doesn't have Elementor installed or activated.
     */
    public function admin_notice_missing_main_plugin()
    {
        if (isset($_GET['activate'])) {
            unset($_GET['activate']);
        }

        $message = sprintf(
            /* translators: 1: Plugin name 2: Elementor */
            esc_html__('"%1$s" requires "%2$s" to be installed and activated.', 'tanspot-toolkit'),
            '<strong>' . esc_html__('Tanspot Toolkit', 'tanspot-toolkit') . '</strong>',
            '<strong>' . esc_html__('Elementor', 'tanspot-toolkit') . '</strong>'
        );

        printf('<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message);
    }

    /**
     * Admin notice
     *
     * Warning when the site doesn't have a minimum required Elementor version.
     */
    public function admin_notice_minimum_elementor_version()
    {
        if (isset($_GET['activate'])) {
            unset($_GET['activate']);
        }

        $message = sprintf(
            /* translators: 1: Plugin name 2: Elementor 3: Required Elementor version */
            esc_html__('"%1$s" requires "%2$s" version %3$s or greater.', 'tanspot-toolkit'),
            '<strong>' . esc_html__('tanspot Toolkit', 'tanspot-toolkit') . '</strong>',
            '<strong>' . esc_html__('Elementor', 'tanspot-toolkit') . '</strong>',
            self::MINIMUM_ELEMENTOR_VERSION
        );

        printf('<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message);
    }

    /**
     * Admin notice
     *
     * Warning when the site doesn't have a minimum required PHP version.
     */
    public function admin_notice_minimum_php_version()
    {
        if (isset($_GET['activate'])) {
            unset($_GET['activate']);
        }

        $message = sprintf(
            /* translators: 1: Plugin name 2: PHP 3: Required PHP version */
            esc_html__('"%1$s" requires "%2$s" version %3$s or greater.', 'tanspot-toolkit'),
            '<strong>' . esc_html__('tanspot Toolkit', 'tanspot-toolkit') . '</strong>',
            '<strong>' . esc_html__('PHP', 'tanspot-toolkit') . '</strong>',
            self::MINIMUM_PHP_VERSION
        );

        printf('<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message);
    }
}

new Dl_Core();
