<?php
// Register main menu page in wp-admin.
add_action( 'admin_menu', 'WPSUSY_register_menu_settings' );
function WPSUSY_register_menu_settings() {
    add_submenu_page( 'options-general.php', 'WP Susy Members Info Settings', 'WP Susy Members', 'manage_options', 'wp-susy', 'WPSUSY_settings_page');
    
}
function WPSUSY_settings_page(){
    include_once ( 'settings.php' );
}









