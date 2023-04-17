<?php
/**
 * Plugin Name: WP Susy Members
 * Plugin URI:  https://github.com/wpwebguru/WP-Susy-Members
 * Author:      Sunny
 * Author URI:  https://github.com/wpwebguru/
 * Description: Display Susy members data as ref functions.
 * Version:     1.0.1
 * License:     GPL-2.0+
 * License URL: http://www.gnu.org/licenses/gpl-2.0.txt
 * text-domain: wp_susy
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

define( 'WPSUSY_URL', plugins_url('/',  __FILE__ ) );
define( 'WPSUSY_PATH', plugin_dir_path( __FILE__ ) );

add_action ( 'plugins_loaded', 'WPSUSY_loaded_after_activate_plugin' );
function WPSUSY_loaded_after_activate_plugin(){
    // Additional File included
    include_once ( 'includes/public/public.php' );
    include_once ( 'includes/public/dynamic_css.php' );
    include_once ( 'includes/admin/admin.php' );
    include_once ( 'assets/js/admin.js.php' );
    // Custom style & script included
    add_action( 'wp_enqueue_scripts', 'WPSUSY_public_enqueue_style_script' );	
    add_action( 'admin_enqueue_scripts', 'WPSUSY_admin_enqueue_style_script' );	
}

function WPSUSY_public_enqueue_style_script() {
    wp_enqueue_style( 'wpsusy_style', plugins_url('assets/css/public.css', __FILE__) );
}
function WPSUSY_admin_enqueue_style_script() {
    wp_enqueue_style( 'wp-color-picker' );
    wp_enqueue_style( 'wpsusy_admin', plugins_url('assets/css/admin.css', __FILE__) );
}
// WordPress Plugin Add Settings Link
add_filter('plugin_action_links_'.plugin_basename(__FILE__), 'WPSUSY_add_plugin_page_settings_link');
function WPSUSY_add_plugin_page_settings_link( $links ) {
    $links[] = '<a href="' .
        admin_url( 'options-general.php?page=wp-susy' ) .
        '">' . __('Settings') . '</a>';
    return $links;
}

