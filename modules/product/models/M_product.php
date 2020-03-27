<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_product extends CI_Model {

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

	public function tambah_brg($data){
        $this->db->insert('barang', $data);
	}
	
	public function getData(){
		$this->db->select('*');
		$this->db->from('barang');
		$this->db->join('kategori', 'barang.id_kat=kategori.id_kat');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getKategori(){
		return $this->db->get('kategori')->result_array();
	}

	public function getWhere($pid){
		$this->db->where('id_brg', $pid);
        return $this->db->get('barang')->result_array();
	}

	public function deleteData($tabel, $where){
		$res = $this->db->delete($tabel, $where);
		return $res;
	}

	public function editData($tabel, $data, $where){
		$res = $this->db->update($tabel, $data, $where);
		return $res;
	}
}
