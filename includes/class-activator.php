<?php

class WP_Plugin_Activator{
    public static function activate(){
        global $wpdb;
        $table_name=$wpdb->prefix . 'bright_oop_api';
        $charset_collate= $wpdb->get_charset_collate();
        
        $sql= "CREATE TABLE IF NOT EXISTS $table_name (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        ) $charset_collate;";

        require_once ABSPATH . 'WP-admin/includes/upgrade.php';
        dbDelta($sql);
    }
}


?>