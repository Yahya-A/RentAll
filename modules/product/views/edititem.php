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
          <div class="col-lg-3"></div>
          <div class="col-lg-6">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Data Barang</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
              <?php echo form_open_multipart('product/update');?>
              <?php foreach ($edit as $d) : ?>
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">ID Barang</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="id" placeholder="ID Barang" value="<?= $d['id_brg']; ?>">
                    <p><?php echo form_error('id');?></p>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Barang</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="nama" placeholder="Nama" value="<?= $d['nama_brg']; ?>">
                    <p><?php echo form_error('nama');?></p>
                  </div>
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea class="form-control" rows="3" placeholder="Deskripsi Barang . . ." name="deskripsi" value="<?php echo set_value('deskripsi')?>"><?= $d['deskripsi']; ?></textarea>
                    <p><?php echo form_error('deskripsi');?></p>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Harga Sewa</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Harga" name="harga" value="<?= $d['harga']; ?>">
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
              <?php endforeach; ?>
            </div><!-- /.card -->
          </div>
          <div class="col-lg-3"></div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->