<?php
/**
 * Plugin Name: My php oop api
 * Description: Best php oop wp API
 * Version: 1.0
 * Plugin URK: www.brightcsolution.com 
 */
if(!defined("ABSPATH")) exit;

define('WP_PLUGIN_BRIGHT_PATH',plugin_dir_path(__FILE__));
define('WP_PLUGIN_BRIGHT_URL',plugin_dir_url(__FILE__));

// include required files
require_once WP_PLUGIN_BRIGHT_PATH. 'includes/class-activator.php';
require_once WP_PLUGIN_BRIGHT_PATH. 'includes/class-deactivator.php';
require_once WP_PLUGIN_BRIGHT_PATH. 'includes/class-model.php';
require_once WP_PLUGIN_BRIGHT_PATH. 'includes/class-api-controller.php';

// Activation and Deactivation
register_activation_hook(__FILE__, ['WP_Plugin_Activator', 'activate']);
register_deactivation_hook(__FILE__, ['WP_Plugin_Deactivator', 'deactivate']);

// initialize API
function WP_Plugin_api_bright_init(){
    $api_controller= new WP_Plugin_API_Controller();
    $api_controller->register_routes();
}

add_action('rest_api_init', 'WP_Plugin_api_bright_init');





?>