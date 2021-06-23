<?php


use Restserver\Libraries\REST_Controller;

require APPPATH . 'libraries/REST_Controller.php';


class Cadastro extends REST_Controller {

    

	  /**

     * Get All Data from this method.

     *

    */

    public function __construct($config = 'rest') {

      parent::__construct($config);

         header('Access-Control-Allow-Origin: *');
         header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method, Authorization");
         header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
         $method = $_SERVER['REQUEST_METHOD'];
         if ($method == "OPTIONS") {
            die();
         }
         $this->load->database();

    }

       

    /**

     * Get All Data from this method.

     *

    */

	public function index_post()

	{

		   $this->db->insert('salas', $this->post());



		$this->response(array('Sala cadastrada'), REST_Controller::HTTP_CREATED);

	}

}
