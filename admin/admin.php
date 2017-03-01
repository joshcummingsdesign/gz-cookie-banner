<?php

namespace CKBR\Admin;

/**
 * Add admin menu
 */
function admin_menu()
{
    add_submenu_page(
    'options-general.php',
    'Cookie Banner',
    'Cookie Banner',
    'manage_options',
    'cookie-banner',
    __NAMESPACE__ . '\\admin_content'
  );
}
add_action('admin_menu', __NAMESPACE__ . '\\admin_menu');

/**
 * Display admin content
 */
function admin_content()
{
    require_once('includes/functions.php');
    require_once('partials/controller.php');
    require_once('partials/view.php');
}
