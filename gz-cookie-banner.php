<?php
/**
 * Plugin Name: Grizzly Cookie Banner
 * Description: Add a banner to your site that lets users know you are using cookies.
 * Version:     1.0
 * Author:      Josh Cummings
 * Author URI:  https://www.joshcummingsdesign.com
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: ckbr
 * Domain Path: /languages
 */

namespace CKBR;

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

/**
 * Set default settings
 */
function activation()
{
    if (empty(get_option('ckbr_settings'))) {
        $default_settings = [
            'banner-text'   => 'This site uses cookies to enhance your experience.',
            'confirm-text'  => 'Ok',
            'deny-text'     => 'Learn More',
            'deny-redirect' => '/',
            'expires'       => '30',
            'path'          => '/'
        ];
    	update_option('ckbr_settings', $default_settings);
    }
}
register_activation_hook(__FILE__, __NAMESPACE__ . '\\activation');


/**
 * Register plugin settings
 */
function register_settings()
{
    register_setting('ckbr_settings_group', 'ckbr_settings');
}
add_action('admin_init', __NAMESPACE__ . '\\register_settings');

/**
 * Initialize admin and frontend content
 */
require_once('frontend/frontend.php');
require_once('admin/admin.php');
