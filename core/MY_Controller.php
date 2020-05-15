<?php (defined('BASEPATH')) OR exit('No direct script access allowed');


class MY_Controller extends CI_Controller {
    public function __construct(){
        parent::__construct();

        $this->authenticated();
    }

    public function authenticated(){
        if ($this->uri->segment(1) != 'auth' && $this->uri->segment(1) != '') {
            if ( ! $this->session->userdata('authenticated')) {
                redirect('auth');
            }
        }
    }

    public function render_login($content, $data = NULL){
        $data['content'] = $this->load->view($content, $data, TRUE);

        $this->load->view('login/loginv', $data);
    }

    public function render_backend($content, $data = NULL){
        $data['header'] = $this->load->view('dashboard/template/navtop', $data, TRUE);
        $data['content'] = $this->load->view($content, $data, TRUE);

        $this->load->view('dashboardv', $data);
    }
}