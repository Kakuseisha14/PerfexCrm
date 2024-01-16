<?php

/**
 * Ensures that the module init file can't be accessed directly, only within the application.
 */
defined('BASEPATH') or exit('No direct script access allowed');

/*
Module Name: Sucursales y Cajas
Description: Modulo de sucursales y cajas.
Version: 2.3.0
Requires at least: 2.3.*
*/

hooks()->add_action('admin_init', 'my_module_init_menu_items');

function my_module_init_menu_items(){
    $CI = &get_instance();

    $CI->app_menu->add_sidebar_menu_item('custom-menu-unique-id', [
        'name'     => 'Sucursales y Caja', // The name if the item
        'href'     => 'https://perfexcrm.com/', // URL of the item
        'position' => 10, // The menu position, see below for default positions.
        'icon'     => 'fa fa-question-circle', // Font awesome icon
    ]);
}