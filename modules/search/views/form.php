<html>
<head>
<script type="text/javascript" src="<?php echo base_url('assets/v.0.1/js/jquery.min.js')?>"></script>
 <script type="text/javascript" src="<?php echo base_url('assets/v.0.1/js/config.js')?>"></script>
 <script type="text/javascript">
 var baseurl = "<?= base_url();?>"
 </script>
</head>
<body>
<!--  -->
 <h1>FORM SISWA</h1><hr>
 <form>
 <table>
 <tr>
 <td>NIS</td>
 <td>:</td>
 <td><input type="text" name="id" id="id"> <button
 type="button" id="btn-search">Cari</button> <span
 id="loading">LOADING...</span></td>
 </tr>
 <tr>
 <td>Nama</td>
 <td>:</td>
 <td><input type="text" name="nama" id="nama"></td>
 </tr>
 <tr>
<td>Jenis Kelamin</td>
 <td>:</td>
 <td><input type="text" name="jenis_kelamin"
 id="jenis_kelamin"></td>
 </tr>
 <tr>
 <td>Telepon</td>
 <td>:</td>
 <td><input type="text" name="telepon" id="telepon"></td>
 </tr>
 <tr>
 
<td>Alamat</td>
 <td>:</td>
 <td><input type="text" name="alamat" id="alamat"></td>
 </tr>
 </table>
 </form>
 </body>
 </html>
 
 