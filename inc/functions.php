<?php

function pishkhan_plus_plugin_add_menu()
{
    add_menu_page(
        'پیشخوان پلاس',
        'پیشخوان پلاس',
        'manage_options',
        'pishkhan_plus',
        'pishkhan_plus_plugin_add_menu_callback');
}

function pishkhan_plus_plugin_add_menu_callback()
{
    if (isset($_POST)) {
    }
    include_once PISHKHAN_PLUS_TEMPLATE . 'optionPage/main.php';
}

add_action('admin_menu', 'pishkhan_plus_plugin_add_menu');
