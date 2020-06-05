<div class="row">
    <?php foreach ($items as $row) : ?>
      <!-- Grid column -->
      <div class="col-md-4 mb-4">
  
        <!-- Card -->
        <div class="img-card">

          <div class="view zoom overlay z-depth-2 rounded align-middle img-items">
            <img class="img-fluid w-100"
              src="<?php echo base_url().'assets/v.0.1/images/'.$row->item_pict;?>" alt="Sample">
            <a href="#!">
              <div class="mask">
                <img class="img-fluid w-100"
                  src="<?php echo base_url().'assets/v.0.1/images/'.$row->item_pict;?>">
                <div class="mask rgba-black-slight"></div>
              </div>
            </a>
          </div>
  
          <div class="text-center pt-4">
  
            <h5><?php echo $row->item_name;?></h5>
            <p class="mb-2 text-muted text-uppercase small">Shirts</p>
            <hr>
            <h6 class="mb-3"><?php echo 'Rp '.number_format($row->rent_price);?></h6>
            <button type="button" class="btn btn-primary btn-sm mr-1 mb-2 add_cart" data-produkid="<?php echo $row->item_id;?>" data-produknama="<?php echo $row->item_name;?>" data-produkharga="<?php echo $row->rent_price;?>"><i
                class="fas fa-shopping-cart pr-2"></i>Add to cart</button>
            <button type="button" class="btn btn-light btn-sm mr-1 mb-2"><i
                class="fas fa-info-circle pr-2"></i>Details</button>
            <button type="button" class="btn btn-danger btn-sm px-3 mb-2 material-tooltip-main"
              data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i
                class="far fa-heart"></i></button>
  
          </div>
  
        </div>
        <!-- Card -->
  
      </div>
      <!-- Grid column -->
      <?php endforeach;?>
  
    </div>