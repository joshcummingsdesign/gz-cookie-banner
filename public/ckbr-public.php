<?php

/*============================================
=           Display Public Content           =
============================================*/

function ckbr_display_public_content()
{
    wp_enqueue_style('ckbr_public_styles', plugins_url('css/ckbr-public-styles.css', __FILE__));
    wp_enqueue_script('ckbr_public_script', plugins_url('js/ckbr-public-script.js', __FILE__), ['jquery'], null, true);

    $settings = get_option('ckbr_settings');

    wp_localize_script('ckbr_public_script', 'settings', [
      'expire' => $settings['expires'],
      'path'   => $settings['path']
    ]);

    include('partials/ckbr-public-content.php');
}
add_action('wp_footer', 'ckbr_display_public_content');
