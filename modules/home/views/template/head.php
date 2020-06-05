<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Rent All - Sewa Barang Jadi Gampang</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/v.0.1/css/bootstrap.min.css')?>">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url('assets/v.0.1/css/mdb.min.css')?>">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="<?php echo base_url('assets/v.0.1/css/style.css')?>">
</head>
<body>

<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
  <div class="container-lg">

    <!-- Brand -->
    <a class="navbar-brand" href="#" target="_blank">
      <strong>Rent All</strong>
    </a>

    <!-- Collapse -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Links -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <!-- Left -->
      <ul class="navbar-nav mr-auto ml-5">
        <li class="nav-item mr-3">
          <a class="nav-link" href="<?php echo base_url('home/etalase')?>">Etalase</a>
        </li>
        <li class="nav-item dropdown mr-3">
          <a class="nav-link dropdown-toggle" id="navbarDropdowncategory-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Kategori
          </a>
          <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdowncategory-333">
            <a href="#" class="dropdown-item">Elektronik</a>
            <a href="#" class="dropdown-item">Transportasi</a>
            <a href="#" class="dropdown-item">Lainnya</a>
          </div>
        </li>
        <!-- <li class="nav-item mr-3">
          <a class="nav-link" href="#" target="_blank">Cara Penyewaan</a>
        </li>
        <li class="nav-item mr-3">
          <a class="nav-link" href="#" target="_blank">Hubungi Kami</a>
        </li> -->
      </ul>

      <!-- Right -->
      <ul class="navbar-nav nav-flex-icons">
        <li>
          <form class="form-inline mr-auto">
            <input class="form-control" type="text" placeholder="Ketikkan Nama Barang . ." aria-label="Search" id="key">
            <button class="btn btn-mdb-color btn-rounded btn-sm my-0 ml-sm-2" type="button" id="cari">Search</button>
          </form>
        </li>
        <li class="nav-item dropdown cart">
            <a class="nav-link waves-effect" id="navbarDropdowncart" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
              <span class="badge red z-depth-1 mr-1"> 0 </span>
              <i class="fas fa-shopping-cart"></i>
              <span class="clearfix d-none d-sm-inline-block"> Cart </span>
            </a>
            <ul class="dropdown-menu dropdown-light cart_preview" aria-labelledby="navbarDropdowncart">
                  <li>
                      <table class="table" id="detail_cart">
                        <tbody>
                            <tr>
                              <td class="text-left">Barang 1</td>
                              <td class="text-right">$210.00</td>
                              <td class="text-left"><strong>Sub-Total</strong></td>
                              <td class="text-right price-new">$210.00</td>
                            </tr>
                        </tbody>
                        <tfoot>
                          <tr>
                            <td colspan="2" class="text-right"></td>
                            <td class="text-left"><strong>Total</strong></td>
                            <td class="text-right price-new">$254.00</td>
                          </tr>
                          <tr>
                            
                          </tr>
                        </tfoot>
                      </table>
                      <div class="btn-group w-100" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-indigo darken-4"><i class="fas fa-cart-arrow-down fa-sm pr-2" aria-hidden="true"></i>
                          Keranjang</button>
                        <button type="button" class="btn btn-indigo darken-4"><i class="fas fa-share fa-sm pr-2" aria-hidden="true"></i>Checkout</button>
                      </div>
                  </li>
            </ul>
        </li>
        <li class="nav-item" >
          <a href="<?= base_url('login')?>" class="nav-link">
            <p class="h6 pt-1">Sign In</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link btn btn-sm btn-info btn-rounded" role="button">Registrasi</a>
        </li>
      </ul>

    </div>

  </div>
</nav>
<!-- Navbar -->