<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
        parent::__construct();
        $this->load->model('M_search', 'ms');
    }
    
    public function index(){
        // $this->load->view('home/template/head');
		// $this->load->view('home/template/slider');
		$this->load->view('form');
		// $this->load->view('home/template/foot');
    }

    public function search(){
        $name = $this->input->post('id');
        $res = $this->ms->findBy($id);

        if (! empty($res)) {
            $callback = array(
                'status' => 'success',
                'item_name' => $res->item_name
                // 'item_pict' => $res->item_pict,
                // 'rent_price' => $res->rent_price
            );
        } else {
            $callback = array('status' => 'failed');
        }
        echo json_encode($callback);
    }
}
