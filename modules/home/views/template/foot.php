<!--Footer-->
<footer class="page-footer text-center font-small mt-4 wow fadeIn">

  <!--Call to action-->
  <div class="pt-4">
    <a class="btn btn-outline-white" href="https://mdbootstrap.com/getting-started/" target="_blank" role="button">Download
      MDB
      <i class="fas fa-download ml-2"></i>
    </a>
    <a class="btn btn-outline-white" href="https://mdbootstrap.com/bootstrap-tutorial/" target="_blank" role="button">Start
      free tutorial
      <i class="fas fa-graduation-cap ml-2"></i>
    </a>
  </div>
  <!--/.Call to action-->

  <hr class="my-4">

  <!-- Social icons -->
  <div class="pb-4">
    <a href="https://www.facebook.com/mdbootstrap" target="_blank">
      <i class="fab fa-facebook-f mr-3"></i>
    </a>

    <a href="https://twitter.com/MDBootstrap" target="_blank">
      <i class="fab fa-twitter mr-3"></i>
    </a>

    <a href="https://www.youtube.com/watch?v=7MUISDJ5ZZ4" target="_blank">
      <i class="fab fa-youtube mr-3"></i>
    </a>

    <a href="https://plus.google.com/u/0/b/107863090883699620484" target="_blank">
      <i class="fab fa-google-plus-g mr-3"></i>
    </a>

    <a href="https://dribbble.com/mdbootstrap" target="_blank">
      <i class="fab fa-dribbble mr-3"></i>
    </a>

    <a href="https://pinterest.com/mdbootstrap" target="_blank">
      <i class="fab fa-pinterest mr-3"></i>
    </a>

    <a href="https://github.com/mdbootstrap/bootstrap-material-design" target="_blank">
      <i class="fab fa-github mr-3"></i>
    </a>

    <a href="http://codepen.io/mdbootstrap/" target="_blank">
      <i class="fab fa-codepen mr-3"></i>
    </a>
  </div>
  <!-- Social icons -->

  <!--Copyright-->
  <div class="footer-copyright py-3">
    © 2018 Copyright:
    <a href="https://mdbootstrap.com/bootstrap-tutorial/" target="_blank"> MDBootstrap.com </a>
  </div>
  <!--/.Copyright-->

</footer>
<!--/.Footer-->


  <!-- jQuery -->
  <script type="text/javascript" src="<?php echo base_url('assets/v.0.1/js/jquery.min.js')?>"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="<?php echo base_url('assets/v.0.1/js/popper.min.js')?>"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="<?php echo base_url('assets/v.0.1/js/bootstrap.min.js')?>"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="<?php echo base_url('assets/v.0.1/js/mdb.min.js')?>"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript">
  $(document).ready(function(){
		$('.add_cart').click(function(){
			var produk_id    = $(this).data("produkid");
			var produk_nama  = $(this).data("produknama");
			var produk_harga = $(this).data("produkharga");
			var lama_sewa    = $('#' + produk_id).val();
			var jenis_sewa   = $(this).data("sewa");;
			$.ajax({
				url : "<?php echo base_url();?>/cart/add_to_cart",
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
      new WOW().init();
  </script>

</body>