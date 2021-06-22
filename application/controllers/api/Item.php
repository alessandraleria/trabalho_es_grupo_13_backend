<?php

require APPPATH . 'libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Item extends REST_Controller {

     public function __construct() {
         parent::__construct();
         $this->load->database();
     }

    /**
     * Get All Data from this method.
     * 
     * @return Response
     */

    public function index_get($id = 0){
        if(!empty($id)){
            $data = $this->db->get_where("items", ['id' => $id])->row_array();
        } else {
            $data = $this->db->get("items")->result();
        }

        $this->response($data, REST_Controller::HTTP_OK);
    }
}