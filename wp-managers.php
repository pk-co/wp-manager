<?php 

    /* 
    Plugin Name: WP Manager
    Description: A Simple Plugin to manage Managers (Add, View, Edit, Delete)
    Version: 1.0.1
    Author: Prasa
    Plugin URI: https://example.plugin
    Author URI: https://example.prasa.com
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

// Register the activation hook create table
register_activation_hook(__FILE__, "wp_create_manager_table");

// create wp_manager table
function wp_create_manager_table(){
    global $wpdb;  // global db object
    $table_name = $wpdb->prefix . "managers";
    $charset_collate = $wpdb->get_charset_collate();

    $sql_comand =  "CREATE TABLE $table_name (
        `id` mediumint(9) NOT NULL AUTO_INCREMENT,
        `name` varchar(50) NOT NULL,
        `age` int(5) NOT NULL,
        `phone` varchar(15) NOT NULL,
        `email` varchar(50) DEFAULT NULL,
        PRIMARY KEY(`id`)
        ) $charset_collate ";
}

// admin page
function wp_admin_page(){
    
    ?>
     <div class="wrap">
        <h1>Managers</h1>
        <h2>Add Manager</h2>
        <form>
            <table>
                <tr>
                    <th>Name: </th>
                    <td><input type="text" name="name" value="" required></td>
                </tr>
                <tr>
                    <th>Age: </th>
                    <td><input type="number" name="age" value="" required></td>
                </tr>
                <tr>
                    <th>Phone: </th>
                    <td><input type="text" name="phone" value="" required></td>
                </tr>
                <tr>
                    <th>Email: </th>
                    <td><input type="email" name="email" value="" required></td>
                </tr>
                <?php ?>

            </table>
            <p><input type="submit" name="add_manager" class="button-primary" value="Add Manager"></p>
        </form>

        <h2>Manager List</h2>
     </div>

    <?php
    
}

