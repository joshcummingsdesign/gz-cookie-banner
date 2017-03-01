<?php
/**
 * Plugin Name: Grizzly Cookie Banner
 * Plugin URI:  https://github.com/joshcummingsdesign/gz-cookie-banner
 * Description: A simple way to let your users know you are using cookies on your WordPress site.
 * Version:     1.0
 * Author:      Grizzly
 * Author URI:  https://madebygrizzly.com
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
 * Check for updates
 */
require_once('includes/vendor/plugin-update-checker/plugin-update-checker.php');
$myUpdateChecker = \Puc_v4_Factory::buildUpdateChecker(
    'https://update.madebygrizzly.com/wp-update-server/?action=get_metadata&slug=gz-cookie-banner',
    __FILE__,
    'gz-cookie-banner'
);

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
