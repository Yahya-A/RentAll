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
    <div id="hasil">
    <div class="row">
      <!-- Grid column -->
      <?php $this->load->view('view', array('items'=>$items));?>
        <!-- <input type="text" name="name" id="name"> -->
    </div>
    </div>
    
    <!-- Grid row -->
  
  </section>
  <!--Section: Block Content-->
  

      <!--Pagination-->
      <nav class="d-flex justify-content-center wow fadeIn">    
      </nav>
      <!--Pagination-->

    </div>
  </main>
  <!--Main layout-->
