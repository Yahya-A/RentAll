<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
	public function __construct(){
		parent::__construct();
		$this->load->model('m_home', 'mh');
	}

	public function index()
	{
		$this->load->view('template/head');
		$this->load->view('template/slider');
		$this->load->view('home');
		$this->load->view('template/foot');
	}

	public function etalase(){
		$config['base_url'] = base_url('home/etalase');
		$config['total_rows'] = $this->db->count_all('items'); //total row
        $config['per_page'] = 3;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

		$config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = '&raquo;';
        $config['prev_link']        = '&laquo;';
        $config['full_tag_open']    = '<ul class="pagination pg-blue">';
        $config['full_tag_close']   = '</ul>';
        $config['num_tag_open']     = '<li class="page-item">
		<span class="page-link">';
        $config['num_tag_close']    = '</span>
		</li>';
        $config['cur_tag_open']     = ' <li class="page-item active">
		<span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span>
		</span>
	  </li>';
        $config['next_tag_open']    = ' <li class="page-item">
		<span class="page-link" aria-label="Next">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span>
		<span class="sr-only">Next</span>
	  </span>
	</li>';
        $config['prev_tag_open']    = ' <li class="page-item">
		<span class="page-link" aria-label="Previus">';
        $config['prev_tagl_close']  = '<span aria-hidden="true">&raquo;</span>
		<span class="sr-only">Previus</span>
	  </span>
	</li>';
        $config['first_tag_open']   = ' <li class="page-item">
		<span class="page-link" aria-label="Previus">';
        $config['first_tagl_close'] = '<span aria-hidden="true">&raquo;</span>
		<span class="sr-only">Previus</span>
	  </span>
	</li>';
        $config['last_tag_open']    = ' <li class="page-item">
		<span class="page-link" aria-label="Next">';
        $config['last_tagl_close']  = '<span aria-hidden="true">&raquo;</span>
		<span class="sr-only">Next</span>
	  </span>
	</li>';

		$this->pagination->initialize($config);
		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		
		$data['data'] = $this->mh->getDatalist($config["per_page"], $data['page']);           
 
        $data['paging'] = $this->pagination->create_links();
		// $data['data'] = $this->mh->getAll('items');

		$this->load->view('template/head');
		$this->load->view('template/slider');
		$this->load->view('etalase', $data);
		$this->load->view('template/foot');


	}
}
