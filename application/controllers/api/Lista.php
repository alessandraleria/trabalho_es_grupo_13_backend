<?php


use Restserver\Libraries\REST_Controller;

require APPPATH . 'libraries/REST_Controller.php';

     

class Lista extends REST_Controller {

    

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

	public function index_get()

	{

        $lista_de_salas = $this->db->get('salas')->result();

        $this->response($lista_de_salas, REST_Controller::HTTP_OK);

	}

      

    /**

     * Get All Data from this method.

     *

    */

    /**

     * Get All Data from this method.

     *

    */

    public function index_put($id)

    {

        $put_data = $this->put();

        $this->db->where('id', $id);
        $this->db->update('salas', $put_data);

     

        $this->response(['Sala atualizada.'], REST_Controller::HTTP_OK);

    }

     

    /**

     * Get All Data from this method.

     *

    */

    public function index_delete($id)

    {   
        $data = array(
            'ativa'=>false
        );
        $this->db->where('id', $id);
        $this->db->update('salas', $data);

     

        $this->response(array('Sala removida.'), REST_Controller::HTTP_OK);

    }

    	

}
