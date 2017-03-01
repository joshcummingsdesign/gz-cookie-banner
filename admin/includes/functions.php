<?php

namespace CKBR\Functions;

/**
 * Create the settings field html to be echoed out
 * @param  string $label The field label
 * @param  string $name  The wp option name (if null, defaults to slug)
 * @param  string $type  The field type (text[default], textarea)
 * @return string        The field html string
 */
function ckbr_field($label, $name = null, $type = 'text')
{
    $slug         = $name ?? sanitize_title($label);
    $setting      = 'ckbr_settings[' . $slug . ']';
    $settings     = get_option('ckbr_settings');
    $label        = esc_attr($label, 'ckbr');
    $output       = '<h3><label for="' . $setting . '">' . $label . '</label></h3>';

    if ($type === 'text') {
        $output .= '<p><input type="text" id="' . $setting . '" name="' . $setting . '" value="' . $settings[$slug] . '"></p>';
    } elseif ($type === 'textarea') {
        $output .= '<p><textarea id="' . $setting . '" name="' . $setting . '" rows="8" cols="40">' . $settings[$slug] . '</textarea></p>';
    }

    return $output;
}