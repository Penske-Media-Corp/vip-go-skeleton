<?php
/*
 * We recommend all plugins for your site are
 * loaded in code, either from a file like this
 * one or from your theme (if the plugins are
 * specific to your theme and do not need to be
 * loaded as early as this in the WordPress boot
 * sequence.
 *
 * @see https://vip.wordpress.com/documentation/vip-go/understanding-your-vip-go-codebase/
 */

// wpcom_vip_load_plugin( 'plugin-name' );
// Note the above requires a specific naming structure: /plugin-name/plugin-name.php
// You can also specify a specific root file: wpcom_vip_load_plugin( 'plugin-name/plugin.php' );

// Load plugin pmc-mu-plugin-loader if exists
if ( file_exists( WP_PLUGIN_DIR . '/pmc-mu-plugin-loader/pmc-mu-plugin-loader.php' ) ) {
	wpcom_vip_load_plugin( 'pmc-mu-plugin-loader' );
}