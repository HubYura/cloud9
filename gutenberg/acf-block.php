<?php
/*
 * include ACF block
 */
include_once ABSPATH . 'wp-admin/includes/plugin.php';
if ( is_plugin_active( 'advanced-custom-fields-pro/acf.php' ) || is_plugin_active( 'advanced-custom-fields/acf.php' )) {
    
    /**
     * Implement the ACF block
     */
    require_once get_template_directory() . '/gutenberg/gutenberg-acf.php';

}