<?php

class Cart extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('cart_model');
	}

	function index(){
		$data['hasil'] = $this->cart->contents();
		$data['last_id'] = $this->cart_model->last_id();

		print_r($data['hasil']);
		$data['data']=$this->cart_model->get_all_produk();
		$this->load->view('v_cart',$data);
	}

	function add_to_cart(){ //fungsi Add To Cart
		$data = array(
			'id' => $this->input->post('item_id'), 
			'name' => $this->input->post('item_name'), 
			'price' => $this->input->post('rent_price'), 
			'qty' => $this->input->post('duration_rent'),
			'sewa' => $this->input->post('sewa'),
			'user_id' => 'RNT11999087653592876',
			'payment_id' => '1'
		);
		$this->cart->insert($data);
		echo $this->show_cart(); //tampilkan cart setelah added
	}

	function show_cart(){ //Fungsi untuk menampilkan Cart
		$output = '';
		$no = 0;
		foreach ($this->cart->contents() as $items) {
			$no++;
			$output .='
				<tr>
					<td>'.$items['name'].'</td>
					<td>'.number_format($items['price']).'</td>
					<td>'.$items['qty'].' '.$items['sewa'].'</td>
					<td>'.number_format($items['subtotal']).'</td>
					<td><button type="button" id="'.$items['rowid'].'" class="hapus_cart btn btn-danger btn-xs">Batal</button></td>
				</tr>
			';
		}
		$output .= '
			<tr>
				<th colspan="3">Total</th>
				<th colspan="2">'.'Rp '.number_format($this->cart->total()).'</th>
			</tr>
		';
		return $output;
	}

	function load_cart(){ //load data cart
		echo $this->show_cart();
	}

	function hapus_cart(){ //fungsi untuk menghapus item cart
		$data = array(
			'rowid' => $this->input->post('row_id'), 
			'qty' => 0, 
		);
		$this->cart->update($data);
		echo $this->show_cart();
	}

	public function order(){
		

		if ($cart = $this->cart->contents())
		{
			foreach ($cart as $item)
			{
				$data_order = array('user_id' => $item['user_id'],
									'rent_date' => date('Y-m-d'));
			}
			$proses = $this->cart_model->insert_order_item($data_order);
		}
		foreach ($cart as $item)
			{
				$last_id = $this->cart_model->last_id();
				foreach($last_id as $l_id){
					$final = $l_id->order_id;
				}
				$data_detail = array('order_id'=>$final,
									'item_id' => $item['id'],
									'rent_time' => $item['qty'],
									'total_price' =>$this->cart->total(),
									'id_payment'=>$item['payment_id']);
				$proses = $this->cart_model->insert_order_detail($data_detail);
			}
		$this->cart->destroy();
		redirect(base_url('cart'));
 

		// $data = array(
		// 	'id_pelanggan' => $this->input->post('id_pel'), 
		// 	'tanggal' => date('Y-m-d')
		// );
		// $this->cart_model->insertorder($data);
	}
}