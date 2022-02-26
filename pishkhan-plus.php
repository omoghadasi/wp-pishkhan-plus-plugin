<?php
/*
Plugin Name: پیشخوان پلاس
Plugin URI: https://imomid.ir/
Description: یک افزونه ساده برای تغییر ظاهر پیشخوان وردپرس شما.
Author: امید مقدسی
Author URI:  https://imomid.ir/
Text Domain: pishkhan-plus
Domain Path: /languages/
Version: 1.0.0
 */

define('PISHKHAN_PLUS_PATH', plugin_dir_path(__FILE__));
define('PISHKHAN_PLUS_URL', plugin_dir_url(__FILE__));
define('PISHKHAN_PLUS_INC', PISHKHAN_PLUS_PATH . 'inc/');
define('PISHKHAN_PLUS_TEMPLATE', PISHKHAN_PLUS_PATH . 'template/');
define('PISHKHAN_PLUS_ASSETS', PISHKHAN_PLUS_PATH . 'assets/');

function plugin_activation()
{
}
register_activation_hook(__FILE__, 'pishkhan_plus_plugin_activation');

function plugin_deactivation()
{
    # code...
}
register_deactivation_hook(__FILE__, 'pishkhan_plus_plugin_deactivation');

if (is_admin()) {
    include_once PISHKHAN_PLUS_INC . 'functions.php';
    add_action('admin_enqueue_scripts', 'add_stylesheet_to_admin');
}

function add_stylesheet_to_admin()
{
    $src = PISHKHAN_PLUS_URL . 'assets/css/demo1.css';
    wp_enqueue_style('prefix-style', $src);
}
