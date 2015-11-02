<?php
/*
Plugin Name: WP Landing Page PREMIUM
Plugin URI: http://www.b5prod.com
Description: Aditionally Templates for Plugin WP Landing Page
Version: 0.9.3
Author: B5 Productions
Author URI: http://www.b5prod.com
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Domain Path: /languages
Text Domain: wplandingpage

WP Landing Page is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

WP Landing Page is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with WP Landing Page. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
*/

if( ! class_exists( 'WPLP_Updater' ) ){
	include_once( plugin_dir_path( __FILE__ ) . 'updater.php' );
}

/* Auto install WP LP and actived */
require_once dirname( __FILE__ ) . '/vendor/autoload.php';
add_action( 'tgmpa_register', 'my_plugin_register_required_plugins' );

function my_plugin_register_required_plugins() {
 	$plugins = array(
 		array(
 			'name'      		=> 'WP Landing Page',
			'slug'      		=> 'wp-landing-page',
 			'required' 	 		=> true,
			'force_activation'  => true,
 		)
 	);

	$config = array(
 		'id'           => 'wplpp',                 // Unique ID for hashing notices for multiple instances of TGMPA.                     // Default absolute path to bundled plugins.
 		'menu'         => 'wplpp-install-plugins', // Menu slug.
 		'parent_slug'  => 'plugins.php',            // Parent menu slug.
 		'capability'   => 'parent_menu_slug',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
 		'has_notices'  => true,                    // Show admin notices or not.
 		'dismissable'  => false,                    // If false, a user cannot dismiss the nag message.
 		'dismiss_msg'  => 'To use WP Landing Page Premium you need install WP Landing Page',                      // If 'dismissable' is false, this message will be output at top of nag.
 		'is_automatic' => true,                   // Automatically activate plugins after installation or not.
	);
	tgmpa( $plugins, $config );
}

$updater = new WPLP_Updater( __FILE__ );
$updater->set_username( 'boluge' );
$updater->set_repository( 'wplp-plugin' );
$updater->authorize( '59318b3b7ac2c66b73119a7985ec24716e40d0c2' );
$updater->initialize();

/**
 * Detect plugin. For use on Front End only.
 */
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

if ( is_plugin_active( 'wp-landing-page/wplandingpage.php' ) ) {
	require_once dirname(__FILE__) . '/includes/templates.php';
}
