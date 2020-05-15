<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_Controller {

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

        $this->load->model('login/M_login');
    }

	public function index()
	{
        if ($this->session->userdata('authenticated')) {
            redirect('home');
            $this->render_login($this->load->view('login/loginv'));
        }
		// $valid = $this->form_validation;
		// $username = $this->input->post('username');
		// $password = $this->input->post('password');
		// $valid->set_rules('username', 'Username','required');
		// $valid->set_rules('password', 'Password','required');

		// if ($valid->run()) {
		// 	$this->simple_login->login($username, $password);
		// }
		// $this->load->view('loginv');
    }
    
    public function login(){
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        
        $user = $this->M_login->get($username);

        if (empty($user)) {
            $this->session->set_flashdata('message', 'Username tidak ditemukan');
            redirect('auth');
        } else{
            if ($password == $user->password) {
                if ($user->role == 'admin') {
                    $session = array('authenticated'=>true,
                    'username'=> $user->username,
                    'nama' => $user->nama,
                    'role' => $user->role);
                    $this->session->set_userdata($session);
                    // $data['session']= $session;
                    redirect('dashboard');
                } else{
                    $session = array('authenticated'=>true,
                    'username'=> $user->username,
                    'nama' => $user->nama,
                    'role' => $user->role);
                    $this->session->set_userdata($session);
                    redirect('home');
                } 
            }else{
                $this->session->set_flashdata('message', 'Password salah');
                redirect('auth');
            }
        }
    }
}
