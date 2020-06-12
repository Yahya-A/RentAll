<html>
<head>
<title>BootstrapPart6:MembuatPesanAlertDenganBootstrap</title>
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/v.0.1/css/bootstrap.min.css')?>">
</head>
<body>
<divclass="container">
<h1>Membuat Pesan Alert Dengan Bootstrap</h1>
<!-- <div class="alert alert-success">Pesan Alert Sukses</div>
<div class="alert alert-info">Pesan Alert Info</div>
<div class="alert alert-warning">Pesan Alert Peringatan</div>
<div class="alert alert-danger">Pesan Alert Gagal</div> -->
<!-- <div id="snoAlertBox" class="alert alert-success" data-alert="alert">Now Update your Search</div> -->
<button class="btn btn-primary" id="show"> Munculkan Notifikasi</button>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header bg-success">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <p id="notif"></p>
        </div>
      </div>
      
    </div>
  </div>
</div>

</div>
</body>
<script type="text/javascript" src="<?= base_url('assets/v.0.1/js/jquery.min.js')?>"></script>
<script type="text/javascript" src="<?= base_url('assets/v.0.1/js/bootstrap.min.js')?>"></script>
<script type="text/javascript">
$(document).ready(function(){
  $('#show').click(function(){
    $("#notif").html("Notifikasi sukses");
      $('#myModal').modal("show");
    });
  });
//     $('#show').on('click', function () {
//     $("#snoAlertBox").fadeIn();
//    closeSnoAlertBox();
//      });
  
// function closeSnoAlertBox(){
// window.setTimeout(function () {
//   $("#snoAlertBox").fadeOut(500)
// }, 3000);
// }
</script>
</html>