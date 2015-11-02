<?php
/*
Plugin Name: WP Landing Page PREMIUM
Plugin URI: http://www.b5prod.com
Description: Aditionally Templates for Plugin WP Landing Page
Version: 0.1
Author: B5 Production
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

/**
 * Detect plugin. For use on Front End only.
 */
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

if ( is_plugin_active( 'wp-landing-page/wplandingpage.php' ) ) {
	require_once dirname(__FILE__) . '/includes/templates.php';
} 