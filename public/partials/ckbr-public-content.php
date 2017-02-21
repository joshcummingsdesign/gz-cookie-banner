<?php
/*====================================
=           Public Content           =
====================================*/

$banner_text  = $settings['banner-text'] ?? '';
$confirm_text = $settings['confirm-text'] ?? '';
$deny_text    = $settings['deny-text'] ?? '';
$redirect     = $settings['redirect'] ?? '#';

?>

<aside id="ckbr_banner" class="ckbr_hidden">
    <p><?= $banner_text ?></p>
    <a href="#" id="ckbr_confirm"><?= $confirm_text ?></a>
    <a href="<?= $redirect ?>" id="ckbr_deny"><?= $deny_text ?></a>
</div>
