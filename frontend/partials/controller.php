<?php

$settings     = get_option('ckbr_settings');
$banner_text  = $settings['banner-text'] ?? '';
$confirm_text = $settings['confirm-text'] ?? '';
$deny_text    = $settings['deny-text'] ?? '';
$redirect     = $settings['deny-redirect'] ?? '#';
