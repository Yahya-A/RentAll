<?php
class Cart_model extends CI_Model{

	function get_all_produk(){
		$hasil=$this->db->get('items');
		return $hasil->result();
	}
	function insert_order_item($data){
		$this->db->insert('order_item', $data);
	}
	function insert_order_detail($data){
		$this->db->insert('order_detail', $data);
	}
	function last_id(){
		$this->db->select_max('order_id');
		$query = $this->db->get('order_item');
		return $query->result();
	}
}