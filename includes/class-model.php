<?php

class WP_Plugin_Model{
    private $table;

    public function __construct(){
        global $wpdb;
        $this->table= $wpdb->prefix . 'bright_oop_api';
    }

    // create data
    public function create($name,$email){
        global $wpdb;
        return $wpdb->insert($this->table,[
            'name'=> sanitize_text_field($name),
            'email'=> sanitize_text_field($email)

        ]);
    }

    // Read All Data{}
    public function get_all(){
        global $wpdb;
        return $wpdb->get_results("SELECT * FROM {$this->table}");
    }

    // read single data
    public function get($id)
    {
        global $wpdb;
        return $wpdb->get_row($wpdb->prepare("SELECT * FROM {$this->table} WHERE id = %d", $id));
    }

    // update data
    public function update($id, $name, $email){
        global $wpdb;
        return $wpdb->prepare($this->table, [
            'name'=> sanitize_text_field($name),
            'email'=> sanitize_text_field($email)

        ],['id' => $id]);
    }

    // delete data
    public function delete($id){
        global $wpdb;
        return $wpdb->delete($this->table, ['id' => $id]);
    }
}


?>