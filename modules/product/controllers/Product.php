<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

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
		$this->simple_login->cek_login();
		$this->load->helper(array('form', 'url'));
		$this->load->model('m_product', 'mp');
	}

	public function index()
	{
		$this->listitem();
	}

	public function additem(){
		$data['error'] = " ";
		$data['kat'] = $this->mp->getKategori();
		$this->load->view('dashboard/template/navtop');
		$this->load->view('dashboard/template/navleft');
		$this->load->view('product/additem', $data);
		$this->load->view('dashboard/template/foot');
	}

	public function listitem(){
		$data['databarang'] = $this->mp->getData();
		$this->load->view('dashboard/template/navtop');
		$this->load->view('dashboard/template/navleft');
		$this->load->view('product/listitem', $data);
		$this->load->view('dashboard/template/foot');
	}

	public function edit($pid){
		$data['edit'] = $this->mp->getWhere($pid);
		$data['kat'] = $this->mp->getKategori();
		$this->load->view('dashboard/template/navtop');
		$this->load->view('dashboard/template/navleft');
		$this->load->view('product/edititem', $data);
		$this->load->view('dashboard/template/foot');
	}

	public function save(){
		$config['upload_path'] = './assets/gambar/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = 1000;
		// $config['max_width'] = 1024;
		// $config['max_height'] = 768;
		$this->load->library('upload', $config);

		$this->form_validation->set_rules('nama','NAMA', 'required');
        $this->form_validation->set_rules('deskripsi', 'DESKRIPSI', 'required');
		$this->form_validation->set_rules('harga', 'Harga', 'required');
		$this->form_validation->set_rules('kategori', 'Kategori', 'required');

		if ($this->form_validation->run() == FALSE || ! $this->upload->do_upload('gambar')) {
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('dashboard/template/navtop');
			$this->load->view('dashboard/template/navleft');
			$this->load->view('additem', $error);
			$this->load->view('dashboard/template/foot');
		}else{
			$image_data = $this->upload->data();
			$imgdata = file_get_contents($image_data['full_path']);
			$file_encode = base64_encode($imgdata);

			$data['nama_brg'] = $this->input->post('nama');
			$data['deskripsi'] = $this->input->post('deskripsi');
			$data['harga'] = $this->input->post('harga');
			$data['gambar'] = $this->upload->data('file_name');
			$data['id_kat'] = $this->input->post('kategori');

			$this->mp->tambah_brg($data);
			$pesan['message'] = "Data Berhasil Ditambah";
			$this->load->view('dashboard/template/navtop');
			$this->load->view('dashboard/template/navleft');
			$this->load->view('dashboard/dashboardv', $pesan);
			$this->load->view('dashboard/template/foot');
			}
		}

		public function update()
		{
			$config['upload_path'] = './assets/gambar/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = 1000;
			$this->load->library('upload', $config);

				$this->form_validation->set_rules('nama','NAMA', 'required');
        		$this->form_validation->set_rules('deskripsi', 'DESKRIPSI', 'required');
				$this->form_validation->set_rules('harga', 'Harga', 'required');
				$this->form_validation->set_rules('kategori', 'Kategori', 'required');

				$id = $this->input->post('id');
				$nama = $this->input->post('nama');
				$deskripsi = $this->input->post('deskripsi');
				$harga = $this->input->post('harga');
				$gambar = $this->upload->do_upload('gambar');
				$kat = $this->input->post('kategori');

				if ($this->form_validation->run() == false || ! $this->upload->do_upload('gambar')) {
					$error = array('error' => $this->upload->display_errors());
					$this->load->view('dashboard/template/navtop');
					$this->load->view('dashboard/template/navleft');
					$this->load->view('edititem', $error);
					$this->load->view('dashboard/template/foot');
					redirect('product');
				} else {
					$image_data = $this->upload->data();
					$imgdata = file_get_contents($image_data['full_path']);
					$file_encode = base64_encode($imgdata);
					
					$pid = array('id_brg' => $id);
					$data['nama_brg'] = $nama;
					$data['deskripsi'] = $deskripsi;
					$data['harga'] = $harga;
					$data['gambar'] = $this->upload->data('file_name');
					$data['id_kat'] = $kat;
					$this->mp->editData('barang', $data, $pid);
					$data['databarang'] = $this->mp->getData();
					$data['message'] = "Data Berhasil Ditambah";
					$this->load->view('dashboard/template/navtop');
					$this->load->view('dashboard/template/navleft');
					$this->load->view('listitem', $data);
					$this->load->view('dashboard/template/foot');
				}
		}
		

		public function delete($pid){
			$id = array('id_brg' => $pid);
			$this->mp->deleteData('barang', $id);
			redirect(base_url('product/listitem'),'refresh');
		}
}
