<?php

namespace CKBR\Functions;

$heading            = esc_attr('Cookie Banner', 'ckbr');
$banner_text_field  = ckbr_field('Banner Text', null, 'textarea');
$confirm_text_field = ckbr_field('Confirm Text');
$deny_text_field    = ckbr_field('Deny Text');
$redirect_field     = ckbr_field('Deny Redirect');
$expires_field      = ckbr_field('Cookie Expiration (Days)', 'expires');
$path_field         = ckbr_field('Cookie Path', 'path');
