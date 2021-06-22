<?php


use Restserver\Libraries\REST_Controller;


class Cadastro extends REST_Controller {

    

	  /**

     * Get All Data from this method.

     *

    */

    public function __construct() {

       parent::__construct();

       $this->load->database();

    }

       

    /**

     * Get All Data from this method.

     *

    */

	public function index_post()

	{

		$input = $this->input->post();

		$this->db->insert('salas',$input);



		$this->response(array('Sala cadastrada'), REST_Controller::HTTP_CREATED);

	}

}
