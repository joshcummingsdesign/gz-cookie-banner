<?php

/**
 * Add admin menu
 */
function ckbr_add_admin_menu()
{
    add_submenu_page(
    'tools.php',
    'Cookie Banner',
    'Cookie Banner',
    'manage_options',
    'cookie-banner',
    'ckbr_display_admin_content'
  );
}
add_action('admin_menu', 'ckbr_add_admin_menu');

/**
 * Display admin content
 * @return void
 */
function ckbr_display_admin_content()
{
    $settings = get_option('ckbr_settings');
    require_once('partials/ckbr-admin-content.php');
}
