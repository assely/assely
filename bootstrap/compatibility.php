<?php

/*
|--------------------------------------------------------------------------
| PHP Version Check
|--------------------------------------------------------------------------
|
| Assely Framework use modern PHP features, so requires atleast PHP 5.5.9.
| If installed version is lower, display error notice in admin panel.
|
 */

if (version_compare(phpversion(), '5.5.9', '<')) {
    function assely_php_version_is_not_sufficient()
    {
        ?>
		    <div class="error notice">
		        <p>
		        	<?php _e('Assely Framework requires atleast <b>PHP 5.5.9</b> for the proper functioning.', 'Assely');
        ?>
		        </p>
		    </div>
	    <?php
    }

    add_action('admin_notices', 'assely_php_version_is_not_sufficient');

    return;
}

/*
|--------------------------------------------------------------------------
| Assely Framework Check
|--------------------------------------------------------------------------
|
| Assely based themes requires Assely Framework. Display
| error notice in admin panel, if it is not installed.
|
 */

if ( ! function_exists('is_plugin_active')) {
    include_once ABSPATH . 'wp-admin/includes/plugin.php';
}

if ( ! is_plugin_active('assely-framework/assely-framework.php')) {
    function assely_not_found_notice()
    {
        ?>
		    <div class="error notice">
		        <p>
		        	<?php _e('<b>We could not find Assely Framework.</b> Install and activate Assely Framework.', 'Assely');
        ?>
		        </p>
		    </div>
	    <?php
    }

    if ( ! (is_admin() || in_array($GLOBALS['pagenow'], ['wp-login.php', 'wp-register.php']))) {
        wp_die(__('Unfortunately, this theme requires <strong>Assely Framework</strong>. Please make sure it is installed.', 'Assely'));
    }

    add_action('admin_notices', 'assely_not_found_notice');

    return;
}