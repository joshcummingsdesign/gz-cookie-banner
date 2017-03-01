<?php

namespace CKBR\Frontend;

/**
 * Enqueue frontend assets
 */
function frontend_assets()
{
    wp_enqueue_style('ckbr/frontend-styles', plugins_url('css/ckbr-frontend.css', __FILE__));
    wp_register_script('ckbr/frontend-script', plugins_url('js/ckbr-frontend.js', __FILE__), ['jquery'], false, true);

    $settings = get_option('ckbr_settings');

    wp_localize_script('ckbr/frontend-script', 'settings', [
        'jsCookie' => 'https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.1.3/js.cookie.min.js',
        'expires'  => $settings['expires'],
        'path'     => $settings['path']
    ]);

    wp_enqueue_script('ckbr/frontend-script');
}
add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\frontend_assets');

/**
 * Display frontend content
 */
function frontend_content()
{
    require_once('includes/functions.php');
    require_once('partials/controller.php');
    require_once('partials/view.php');
}
add_action('wp_footer', __NAMESPACE__ . '\\frontend_content');
