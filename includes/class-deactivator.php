<?php
class WP_Plugin_Deactivator {
    public static function deactivate() {
        global $wpdb;
        $table_name = $wpdb->prefix . 'bright_oop_api';
        $wpdb->query("DROP TABLE IF EXISTS $table_name");
    }
}
