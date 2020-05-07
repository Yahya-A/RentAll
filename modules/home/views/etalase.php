<!--Main layout-->
<main>
    <div class="container">

        <div class="bc-icons-2 mt-4">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb indigo lighten-4">
                <li class="breadcrumb-item"><a class="black-text" href="#">Etalase</a><i class="fas fa-caret-right mx-2"
                    aria-hidden="true"></i></li>
                <li class="breadcrumb-item active"><a class="black-text" href="#">Produk</a>
              </ol>
            </nav>
          </div>
          
          
      
      <!--Section: Block Content-->
<section>

    <!-- Grid row -->
    <div class="row">
    <?php foreach ($data->result() as $row) : ?>
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
            <button type="button" class="btn btn-primary btn-sm mr-1 mb-2 add_cart" data-produkid="<?php echo $row->item_id;?>" data-produknama="<?php echo $row->item_name;?>" data-produkharga="<?php echo $row->rent_price;?>"?>"><i
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
    <!-- Grid row -->
  
  </section>
  <!--Section: Block Content-->
  

      <!--Pagination-->
      <nav class="d-flex justify-content-center wow fadeIn">
        <?php echo $paging; ?>
        <!-- <ul class="pagination pg-blue">

          
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
              <span class="sr-only">Previous</span>
            </a>
          </li>

          <li class="page-item active">
            <a class="page-link" href="#">1
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">2</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">3</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">4</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">5</a>
          </li>

          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
              <span class="sr-only">Next</span>
            </a>
          </li>
        </ul> -->
      </nav>
      <!--Pagination-->

    </div>
  </main>
  <!--Main layout-->
