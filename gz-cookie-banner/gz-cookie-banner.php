<?php
/**
 * Plugin Name:    Grizzly Cookie Banner
 * Plugin URI:     https://github.com/joshcummingsdesign/gz-cookie-banner
 * Description:    A simple way to let your users know you are using cookies on your WordPress site.
 * Version:        1.2
 * Author:         Grizzly
 * Author URI:     https://madebygrizzly.com
 * License:        GPL-2.0+
 * License URI:    http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:    ckbr
 * Domain Path:    /languages
 */

namespace CKBR;

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

// The class that contains the plugin info.
require_once plugin_dir_path(__FILE__) . 'includes/class-info.php';

/**
 * The code that runs during plugin activation.
 */
function activation() {
    require_once plugin_dir_path(__FILE__) . 'includes/class-activator.php';
    Activator::activate();
}
register_activation_hook(__FILE__, __NAMESPACE__ . '\\activation');

/**
 * Check for updates
 */
require_once plugin_dir_path(__FILE__) . 'includes/vendor/plugin-update-checker/plugin-update-checker.php';
$plugin_slug = Info::SLUG;
$update_url  = Info::UPDATE_URL;
$myUpdateChecker = \Puc_v4_Factory::buildUpdateChecker(
    $update_url . '?action=get_metadata&slug=' . $plugin_slug,
    __FILE__,
    $plugin_slug
);

/**
 * Run the plugin.
 */
function run() {
    require_once plugin_dir_path(__FILE__) . 'includes/class-plugin.php';
    $plugin = new Plugin();
    $plugin->run();
}
run();
