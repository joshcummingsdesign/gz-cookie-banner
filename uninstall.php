<?php

/*=================================
=            Uninstall            =
=================================*/

// If uninstall is not called from WordPress, exit
if (!defined('WP_UNINSTALL_PLUGIN')) {
    exit();
}

// Delete options
delete_option('ckbr_settings');

// Delete options in Multisite
delete_site_option('ckbr_settings');
