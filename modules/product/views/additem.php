  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Master Barang</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah Barang</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row mt-5">
        <div class="col-lg-2"></div>
          <div class="col-lg-8">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Data Barang</h3>
                <button type="button" class="btn btn-primary btn-right" data-toggle="modal" data-target="#myModal">
                  Open modal
                </button>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php echo $error;?>
              <?php echo form_open_multipart('product/save');?>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Barang</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="nama" placeholder="Nama" value="<?php echo set_value('nama')?>">
                    <p><?php echo form_error('nama');?></p>
                  </div>
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea class="form-control" rows="3" placeholder="Deskripsi Barang . . ." name="deskripsi" value="<?php echo set_value('deskripsi')?>"></textarea>
                    <p><?php echo form_error('deskripsi');?></p>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Harga Sewa</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Harga" name="harga" value="<?php echo set_value('harga')?>">
                    <p><?php echo form_error('harga');?></p>
                  </div>
                  <div class="form-group">
                        <label>Select</label>
                        <select class="form-control" name="kategori" value="<?php echo set_value('kategori')?>">
                          <?php foreach($kat as $k) : ?>
                          <option value="<?php echo $k['id_kat']; ?>"><?php echo $k['nama_kat']; ?></option>
                          <?php endforeach; ?>
                        </select>
                        <p><?php echo form_error('kategori');?></p>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Input Gambar</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="gambar">
                        <label class="custom-file-label" for="exampleInputFile">Pilih File</label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" value="simpna">Tambahkan</button>
                </div>
                <?php echo form_close();?>
            </div><!-- /.card -->
          </div>
          <div class="col-lg-2"></div>
              <div class="modal fade" id="myModal">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                  
                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h4 class="modal-title">Modal Heading</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <!-- Modal body -->
                    <div class="modal-body">
                    <form>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Kategori</label>
                        <input type="text" class="form-control" id="recipient-name">
                      </div>
                      <div class="form-group">
                        <label for="message-text" class="col-form-label">Message:</label>
                        <textarea class="form-control" id="message-text"></textarea>
                      </div>
                    </form>
                  </div>
                    
                    <!-- Modal footer -->
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Send message</button>
                    </div>
                    
                  </div>
              </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->