<?php

/*======================================
=            Add Admin Menu            =
======================================*/

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


/*=============================================
=            Display Admin Content            =
=============================================*/

function ckbr_display_admin_content()
{
    $settings = get_option('ckbr_settings');
    include('partials/ckbr-admin-content.php');
}
