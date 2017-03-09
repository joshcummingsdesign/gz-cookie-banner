<?php

namespace CKBR;

/**
 * The code used on the frontend.
 */
class Frontend
{
    private $plugin_slug;
    private $version;
    private $option_name;
    private $settings;

    public function __construct($plugin_slug, $version, $option_name) {
        $this->plugin_slug = $plugin_slug;
        $this->version = $version;
        $this->option_name = $option_name;
        $this->settings = get_option($this->option_name);
    }

    public function assets() {
        wp_enqueue_style($this->plugin_slug, plugin_dir_url(__FILE__).'css/ckbr-frontend.css', [], $this->version);
        wp_register_script($this->plugin_slug, plugin_dir_url(__FILE__).'js/ckbr-frontend.js', ['jquery']);

        $settings = $this->settings;

        wp_localize_script($this->plugin_slug, 'settings', [
            'jsCookie' => 'https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.1.3/js.cookie.min.js',
            'expires'  => $settings['expires'],
            'path'     => $settings['path']
        ]);

        wp_enqueue_script($this->plugin_slug);
    }

    /**
     * Render the view using MVC pattern.
     */
    public function render() {

        // Model
        $settings = $this->settings;

        // Controller
        $banner_text  = $settings['banner-text'] ?? '';
        $confirm_text = $settings['confirm-text'] ?? '';
        $deny_text    = $settings['deny-text'] ?? '';
        $redirect     = $settings['deny-redirect'] ?? '#';

        // View
        if (locate_template('partials/gz-cookie-banner.php')) {
            require_once(locate_template('partials/gz-cookie-banner.php'));
        } else {
            require_once plugin_dir_path(dirname(__FILE__)).'frontend/partials/view.php';
        }
    }
}
