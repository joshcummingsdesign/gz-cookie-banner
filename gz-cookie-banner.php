<?php
/*
Plugin Name: Grizzly Cookie Banner
Plugin URI:  http://www.joshcummingsdesign.com
Description: Add a banner to your site that lets users know you are using cookies.
Version:     1.0
Author:      Josh Cummings
Author URI:  http://www.joshcummingsdesign.com
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: ckbr
*/


/*=======================================
=           Register Settings           =
=======================================*/

function ckbr_register_settings()
{
    register_setting('ckbr_settings_group', 'ckbr_settings');
}
add_action('admin_init', 'ckbr_register_settings');


/*================================
=            Includes            =
================================*/

include('public/ckbr-public.php');
include('admin/ckbr-admin.php');
