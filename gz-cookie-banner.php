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

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

/**
 * Register plugin settings
 */
function ckbr_register_settings()
{
    register_setting('ckbr_settings_group', 'ckbr_settings');
}
add_action('admin_init', 'ckbr_register_settings');

/**
 * Initialize admin and public content
 */
require_once('public/ckbr-public.php');
require_once('admin/ckbr-admin.php');
