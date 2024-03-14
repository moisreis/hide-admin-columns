<?php
/*
Plugin Name: Hide Admin Menus
Description: This plugin removes specific items from the WordPress admin menu.
Version: 1.0
Author: Moisés Reis
License: GPL2
*/

/**
 * Remove Items from WordPress Admin Menu
 *
 * This function removes specific items from the WordPress admin menu.
 */
function sdb_hide_admin_menus()
{
    remove_menu_page('edit.php');
}
add_action('admin_menu', 'sdb_hide_admin_menus');
?>
