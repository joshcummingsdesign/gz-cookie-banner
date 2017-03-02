# Grizzly Cookie Banner

[![semantic versioning](https://img.shields.io/github/release/joshcummingsdesign/gz-cookie-banner.svg)](https://github.com/joshcummingsdesign/gz-cookie-banner)

A simple way to let your users know you are using cookies on your WordPress site.

## Template Override

By default, Grizzly Cookie Banner gives you a default template to work with. This template includes the following markup:

```
<aside id="ckbr_banner" class="ckbr_hidden">
    <p><?= $banner_text ?></p>
    <a href="#" id="ckbr_confirm"><?= $confirm_text ?></a>
    <a href="<?= $redirect ?>" id="ckbr_deny"><?= $deny_text ?></a>
</aside>
```

To override the default php template, create the file `partials/gz-cookie-banner.php` in your theme. You will then have access to the following variables:

```
$settings     - The settings array
$banner_text  - The message that displays in the banner
$confirm_text - The text in the confirm button
$deny_text    - The text in the deny button
$redirect     - The redirect link for the deny button
```

You can then write the markup you need to create the perfect cookie banner. Make sure to use the necessary IDs and classes:

```
#ckbr_banner  - The banner wrapper
.ckbr_hidden  - Used to show/hide the banner
#ckbr_confirm - Hides the banner and creates the cookie on click
#ckbr_deny    - Unused at the moment, but may be used in the future
```
