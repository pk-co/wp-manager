<?php 

    /* 
    Plugin Name: WP Manager
    Description: A Simple Plugin to manage Managers (Add, View, Edit, Delete)
    Version: 1.0.1
    Author: Prasa
    Plugin URI: https://example.plugin
    AUthor URI: https://example.prasa.com
    */


// prevent the direct access
if(!defined("ABSPATH")){
    exit;
}

//  add action hook create custom MENU
add_action("admin_menu", "wp_add_admin_menu");

// create custom admin MENU
function wp_add_admin_menu(){
    // Adds a top level menu page
    add_menu_page(
        'Managers Details',  // Page Title
        'Managers',          // Menu Title
        'manage_options',    // manage_options
        'manage_managers',  
        'wp_admin_page'

    );
}

?>