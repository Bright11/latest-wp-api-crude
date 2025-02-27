<?php

class WP_Plugin_API_Controller{
    private $model;
    public function __construct(){
        $this->model= new WP_Plugin_Model();
    }

    public function register_routes(){
        register_rest_route("wp-api-bright/v1",'/create',[
            'methods'=> 'POST',
            'callback' => [$this, 'create_data']
        ]);

        register_rest_route("wp-api-bright/v1",'/get-all',[
            'methods'=> 'GET',
            'callback' => [$this, 'get_all_data']
        ]);


        register_rest_route("wp-api-bright/v1",'/get/(?P<id>\d+)',[
            'methods'=> 'GET',
            'callback' => [$this, 'get_single_data']
        ]);

        register_rest_route("wp-api-bright/v1",'/update/(?P<id>\d+)',[
            'methods'=> 'POST',
            'callback' => [$this, 'update_data']
        ]);

        register_rest_route("wp-api-bright/v1",'/delete/(?P<id>\d+)',[
            'methods'=> 'DELETE',
            'callback' => [$this, 'delete_data']
        ]);
    }


    public function create_data($request){
        $name = $request['name'];
        $email = $request['email'];
        $this->model->create($name, $email);
        return rest_ensure_response(['message' => 'Data created successfully']);
    }

    public function get_all_data()
    {
        return rest_ensure_response($this->model->get_all());
    }

    public function get_single_data($request){
        return rest_ensure_response($this->model->get($request['id']));
    }

    public function update_data($request){
        $id = $request['id'];
        $name = $request['name'];
        $email = $request['email'];
        $this->model->update($id, $name, $email);
        return rest_ensure_response(['message' => 'Data updated successfully']);

    }

    public function delete_data($request){
        $id = $request['id'];
        $this->model->delete($id);
        return rest_ensure_response(['message' => 'Data deleted successfully']);
    }


}


?>