<!DOCTYPE html>
<html>
<head>
	<title>Shopping cart dengan codeigniter dan AJAX</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
</head>
<body>
<div class="container"><br/>
	<h2>Shopping Cart Dengan Ajax dan Codeigniter, <?php print_r($last_id)?></h2>
	<hr/>
	<div class="row">
		<div class="col-md-8">
			<h4>Produk</h4>
			<div class="row">
			<?php foreach ($data as $row) : ?>
				<div class="col-md-4">
					<div class="thumbnail">
						<img width="200" src="<?php echo base_url().'assets/images/'.$row->item_pict;?>">
						<div class="caption">
							<h4><?php echo $row->item_name;?></h4>
							<div class="row">
								<div class="col-md-7">
									<h4><?php echo 'Rp '.number_format($row->rent_price);?></h4>
								</div>
								<div class="col-md-5">
									<input type="number" name="duration_rent" id="<?php echo $row->item_id;?>" value="1" class="quantity form-control">
								</div>
							</div>
							<button class="add_cart btn btn-success btn-block" data-produkid="<?php echo $row->item_id;?>" data-produknama="<?php echo $row->item_name;?>" data-produkharga="<?php echo $row->rent_price;?>" data-sewa="<?php echo $row->rent_duration;?>">Add To Cart</button>
						</div>
					</div>
				</div>
			<?php endforeach;?>
				
			</div>

		</div>
		<div class="col-md-4">
			<h4>Shopping Cart</h4>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Produk</th>
						<th>Harga</th>
						<th>Lama Sewa</th>
						<th>Subtotal</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody id="detail_cart">

				</tbody>
				
			</table>
			<a href="<?php echo base_url('index.php/cart/order')?>" class="pesan btn btn-primary">Pesan</a>
		</div>
	</div>
</div>
<p>
</p>

<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-2.2.3.min.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.add_cart').click(function(){
			var produk_id    = $(this).data("produkid");
			var produk_nama  = $(this).data("produknama");
			var produk_harga = $(this).data("produkharga");
			var lama_sewa    = $('#' + produk_id).val();
			var jenis_sewa   = $(this).data("sewa");;
			$.ajax({
				url : "<?php echo base_url();?>index.php/cart/add_to_cart",
				method : "POST",
				data : {item_id: produk_id, item_name: produk_nama, rent_price: produk_harga, duration_rent: lama_sewa, sewa: jenis_sewa},
				success: function(data){
					$('#detail_cart').html(data);
				}
			});
		});

		// $('.pesan').click(function(){
		// 	var id_pel    = $(this).data("produkid");
		// 	var nama_brg  = $(this).data("produknama");
		// 	var harga = $(this).data("produkharga");
		// 	var quantity     = $('#' + produk_id).val();
		// 	$.ajax({
		// 		url : "<?php echo base_url();?>index.php/cart/order",
		// 		method : "POST",
		// 		data : {id_pel: id_pel, nama_brg: nama_brg, harga: harga, quantity: quantity},
		// 		success: function(data){
		// 			$('#detail_cart').html(data);
		// 		}
		// 	});
		// });


		// Load shopping cart
		$('#detail_cart').load("<?php echo base_url();?>index.php/cart/load_cart");

		//Hapus Item Cart
		$(document).on('click','.hapus_cart',function(){
			var row_id=$(this).attr("id"); //mengambil row_id dari artibut id
			$.ajax({
				url : "<?php echo base_url();?>cart/hapus_cart",
				method : "POST",
				data : {row_id : row_id},
				success :function(data){
					$('#detail_cart').html(data);
				}
			});
		});
	});
</script>
</body>
</html>