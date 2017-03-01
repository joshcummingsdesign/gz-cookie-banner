<?php

/**
 * Enqueue public assets
 */
function ckbr_display_public_assets()
{
    $settings = get_option('ckbr_settings');

    wp_register_style('ckbr_public_styles', plugins_url('css/ckbr-public-styles.css', __FILE__));
    wp_register_script('ckbr_public_script', plugins_url('js/ckbr-public-script.js', __FILE__), ['jquery'], null, true);

    wp_localize_script('ckbr_public_script', 'settings', [
      'expire' => $settings['expires'],
      'path'   => $settings['path']
    ]);

    wp_enqueue_style('ckbr_public_styles');
    wp_enqueue_script('ckbr_public_script');
}
add_action('wp_enqueue_scripts', 'ckbr_display_public_assets');

/**
 * Display public content
 */
function ckbr_display_public_content()
{
    $settings = get_option('ckbr_settings');
    require_once('partials/ckbr-public-content.php');
}
add_action('wp_footer', 'ckbr_display_public_content');
