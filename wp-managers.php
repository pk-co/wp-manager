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

