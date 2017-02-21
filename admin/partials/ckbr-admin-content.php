<?php
/*=====================================
=            Admin Content            =
=====================================*/

$banner_text  = $settings['banner-text'] ?? '';
$confirm_text = $settings['confirm-text'] ?? '';
$deny_text    = $settings['deny-text'] ?? '';
$redirect     = $settings['redirect'] ?? '';
$expires      = $settings['expires'] ?? '';
$path         = $settings['path'] ?? '';

?>

<div class="wrap">
    <h1><?php esc_attr_e('Cookie Banner', 'ckbr'); ?></h1>
    <div id="poststuff">
        <div id="post-body" class="metabox-holder columns-2">
            <div id="post-body-content">

                <form action="options.php" method="post">
                    <?php settings_fields('ckbr_settings_group') ?>
                    <h3><label for="ckbr_settings[banner-text]"><?php esc_attr_e('Banner Text', 'ckbr'); ?></label></h3>
                    <p><textarea type="text" id="ckbr_settings[banner-text]" name="ckbr_settings[banner-text]" rows="8" cols="40"><?= $banner_text ?></textarea></p>
                    <h3><label for="ckbr_settings[confirm-text]"><?php esc_attr_e('Confirm Text', 'ckbr'); ?></label></h3>
                    <p><input type="text" id="ckbr_settings[confirm-text]" name="ckbr_settings[confirm-text]" value="<?= $confirm_text ?>"></p>
                    <h3><label for="ckbr_settings[deny-text]"><?php esc_attr_e('Deny Text', 'ckbr'); ?></label></h3>
                    <p><input type="text" id="ckbr_settings[deny-text]" name="ckbr_settings[deny-text]" value="<?= $deny_text ?>"></p>
                    <h3><label for="ckbr_settings[redirect]"><?php esc_attr_e('Deny Redirect', 'ckbr'); ?></label></h3>
                    <p><input type="text" id="ckbr_settings[redirect]" name="ckbr_settings[redirect]" value="<?= $redirect ?>"></p>
                    <h3><label for="ckbr_settings[expires]"><?php esc_attr_e('Cookie Expiration (Days)', 'ckbr'); ?></label></h3>
                    <p><input type="text" id="ckbr_settings[expires]" name="ckbr_settings[expires]" value="<?= $expires ?>"></p>
                    <h3><label for="ckbr_settings[path]"><?php esc_attr_e('Cookie Path', 'ckbr'); ?></label></h3>
                    <p><input type="text" id="ckbr_settings[path]" name="ckbr_settings[path]" value="<?= $path ?>"></p>
                    <p><input class="button-primary" type="submit" value="Submit"></p>
                </form>

            </div>
        </div>
        <br class="clear">
    </div>
</div>
