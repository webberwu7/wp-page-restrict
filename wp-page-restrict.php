<?php

/**
 * Plugin Name: wp-page-restrict
 * Plugin URI:  
 * Description: 限制整個網站必須先登入才能看到
 * Version:     1.0
 * Author:      webber.wu
 * Author URI:  
 * Text Domain: WpPageRestrict
 */

// autoload class object
require __DIR__ . "/autoload.php";

use WpPageRestrict\WpPageRestrict;

// define absolute url
defined('WP_PAGE_RESTRICT_PLUGIN_FILE') || define('WP_PAGE_RESTRICT_PLUGIN_FILE', __FILE__);
defined('WP_PAGE_RESTRICT_ABS_PLUGIN_URL') || define('WP_PAGE_RESTRICT_ABS_PLUGIN_URL', plugin_dir_url(__FILE__));
defined('WP_PAGE_RESTRICT_ABS_PLUGIN_PATH') || define('WP_PAGE_RESTRICT_ABS_PLUGIN_PATH', plugin_dir_path(__FILE__));

// 讀取這個插件
add_action(
    'plugins_loaded',
    function () {
        $plugin = new WpPageRestrict();
        $plugin->plugin_init();
        return $plugin;
    }
);
