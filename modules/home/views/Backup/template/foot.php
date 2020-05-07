<footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="newslatter">
            <form>
              <h2 class="tf">Be The First To Hear Our Exciting News</h2>
              <p>This ante posuere ac Mauris non turpis eu metus congue sagittis Fusce at.</p>
              <div class="input-group">
                <input class=" form-control" type="text" placeholder="Email Here......">
                <button type="submit" value="Sign up" class="btn btn-large btn-primary">Sign up</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="about">
            <div class="footer-logo"></div>
            <p>Contrary to popular belief, Lorem Ipsum is not simply 
random text. It has roots in a piece of classical Latin literature in 
Virginia</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="new-store">
            <h4>What's in store</h4>
            <ul class="toggle-footer" style="">
              <li><a href="#">Returns</a></li>
              <li><a href="#">Delivery Options</a></li>
              <li><a href="#">Brand Directory</a></li>
              <li><a href="#">Buying Guides</a></li>
              <li><a href="#">My Account</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="information">
            <h4>information</h4>
            <ul class="toggle-footer" style="">
              <li><a href="#">Returns</a></li>
              <li><a href="#">Delivery Options</a></li>
              <li><a href="#">Brand Directory</a></li>
              <li><a href="#">Buying Guides</a></li>
              <li><a href="#">My Account</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="contact">
            <h4>Contact Us</h4>
            <ul class="toggle-footer" style="">
              <li> <i class="fa fa-map-marker"></i>
                <div class="address-info">Warehouse &amp; Offices 12345 Street name,California, USA </div>
              </li>
              <li> <i class="fa fa-mobile"></i>
                <div class="call-info">+91 987-654-321<br>
                  <span>+0987-654-321</span> </div>
              </li>
              <li> <i class="fa fa-envelope"></i>
                <div class="email-info"> <a href="#">support@lionode.com</a></div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="social-link">
              <ul>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="footer-link">
              <ul>
                <li><a href="#">Specials</a></li>
                <li><a href="#">Affiliates</a></li>
                <li><a href="#">Gift Vouchers</a></li>
                <li><a href="#">Brands</a></li>
                <li><a href="#">Returns</a></li>
                <li><a href="#">Site Map</a></li>
                <li><a href="#">Contact Us</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="copy-right">
              <p> All Rights Reserved. Copyright 2017 Powered by lionode.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-offer">
        <h2>Deals of the Day: Unbox Latest Offers &amp; Deals Every Single Day at Store.</h2>
      </div>
    </div>
  </footer>
  <!-- Footer block End  --> 
  
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="<?php echo base_url('assets/data/js/jQuery.js')?>"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="<?php echo base_url('assets/data/js/bootstrap.js')?>"></script> 
<script src="<?php echo base_url('assets/data/js/owl.js')?>"></script> 
<script src="<?php echo base_url('assets/data/js/globle.js')?>"></script>


<script src="<?php echo base_url('assets/data/js/ads.js')?>"></script>

<script src="<?php echo base_url('assets/data/js/amquery.js')?>"></script>
<script src="<?php echo base_url('assets/data/js/ads_002.js')?>"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/data/css/ifr.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/data/css/ads.css')?>">
<script type="text/javascript">
	$(document).ready(function(){
		$('.addtocart').click(function(){
			var produk_id    = $(this).data("produkid");
			var produk_nama  = $(this).data("produknama");
			var produk_harga = $(this).data("produkharga");
			var quantity     = $('#' + produk_id).val();
			$.ajax({
				url : "<?php echo base_url();?>cart/add_to_cart",
				method : "POST",
				data : {produk_id: produk_id, produk_nama: produk_nama, produk_harga: produk_harga, quantity: quantity},
				success: function(data){
					$('#detail_cart').html(data);
				}
			});
		});

		// Load shopping cart
		$('#detail_cart').load("<?php echo base_url();?>cart/load_cart");

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
</body></html>