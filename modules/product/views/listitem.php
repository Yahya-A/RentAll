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
              <li class="breadcrumb-item active">Data Barang</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <!-- <?php 
    echo $message?> -->
    <div class="content">
      <div class="container-fluid">
        <section class="content">
            <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Data Barang </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Barang</th>
                      <th>Deskripsi</th>
                      <th>Gambar</th>
                      <th>Harga Sewa</th>
                      <th>Kategori</th>
                      <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($databarang as $d) : ?>
                    <tr>
                    <td>#</td>
                    <td><?= $d['nama_brg'] ?></td>
                      <td><?= $d['deskripsi'] ?></td>
                      <td><img src="<?= base_url('assets/gambar/').$d['gambar'] ?>" height="50px"></td>
                      <td><?= $d['harga'] ?></td>
                      <td><?= $d['nama_kat'] ?></td>
                      <td>
                      <a class="btn btn-success" href="<?= base_url('product/edit/').$d['id_brg'] ?>">Edit</a>
                      <a class="btn btn-danger" href="<?= base_url('product/delete/').$d['id_brg'] ?>">Delete</a>
                      </td>
                    </tr>
                    <?php endforeach;?>
                    </tfoot>
                  </table>
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

  <!-- Control Sidebar -->