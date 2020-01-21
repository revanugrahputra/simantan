<?php
require('../assets/config/dbconnect.php');
require_once('../assets/libraries/crud/MysqliDb.php');
$db = new MysqliDb ($connect);
if(isset($_GET['id'])){

$idinduk = $_GET['id'];

$db->join('dokumen d', 'i.id_dokumen=d.id_dokumen', 'LEFT');
$db->where('id_induk', $idinduk);
$data = $db->get ('induk_kegiatan i', null, 'd.nama_dokumen, i.nama_induk, i.id_dokumen');

$nmdokumen = $data [0]['nama_dokumen'];
$nminduk = $data [0]['nama_induk'];
$iddokumen = $data [0]['id_dokumen'];

}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Sistem Pemantauan Kegiatan">
  <meta name="keywords" content="sistem, pemantauan, kegiatan" />
  <title>Itjen Kemendikbud - Sistem Pemantauan Kegiatan</title>

  <!-- ========== Css Files ========== -->
  <link href="../assets/css/root.css" rel="stylesheet">

  </head>
  <body>
  <!-- Start Page Loading -->
  <div class="loading"><img src="../assets/img/loading.gif" alt="loading-img"></div>
  <!-- End Page Loading -->
 <!-- //////////////////////////////////////////////////////////////////////////// -->
 <!-- START TOP -->
 <div id="top" class="clearfix">

   <!-- Start App Logo -->
   <div class="applogo">
     <a href="index.php" class="logo">SIMANTAN</a>
   </div>
   <!-- End App Logo -->

   <!-- Start Sidebar Show Hide Button -->
   <a href="#" class="sidebar-open-button"><i class="fa fa-bars"></i></a>
   <a href="#" class="sidebar-open-button-mobile"><i class="fa fa-bars"></i></a>
   <!-- End Sidebar Show Hide Button -->

   <!-- Start Top Right -->
   <ul class="top-right">

   <li class="dropdown link">
     <a href="#" data-toggle="dropdown" class="dropdown-toggle profilebox"><img src="../assets/img/profileimg.png" alt="img"><b>Jonathan Doe</b><span class="caret"></span></a>
       <ul class="dropdown-menu dropdown-menu-list dropdown-menu-right">
         <li role="presentation" class="dropdown-header">Profile</li>
         <li><a href="#"><i class="fa falist fa-inbox"></i>Tabel Kegiatan<span class="badge label-danger">4</span></a></li>
         <li><a href="#"><i class="fa falist fa-file-o"></i>Formulir</a></li>
         <li><a href="#"><i class="fa falist fa-wrench"></i>User Management</a></li>
         <li class="divider"></li>
         <li><a href="#"><i class="fa falist fa-power-off"></i> Logout</a></li>
       </ul>
   </li>

   </ul>
   <!-- End Top Right -->

 </div>
 <!-- END TOP -->
<!-- //////////////////////////////////////////////////////////////////////////// -->

<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- START SIDEBAR -->
<div class="sidebar clearfix">

 <ul class="sidebar-panel nav">
     <li class="sidetitle">ADMIN MENU</li>
     <li><a href="index.php"><span class="icon color5-bg"><i class="fa fa-home"></i></span>Dashboard</a></li>
     <li><a href="manage-form.php"><span class="icon color15-bg"><i class="fa fa-edit"></i></span>Form Kegiatan</a></li>
     <li><a href="manage-table.php"><span class="icon color7-bg"><i class="fa fa-th"></i></span>Tabel Kegiatan</a></li>
 </ul>

</div>
<!-- END SIDEBAR -->
<!-- //////////////////////////////////////////////////////////////////////////// -->

<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- START CONTENT -->
<div class="content">

 <!-- Start Page Header -->
 <div class="page-header">

   <!-- Start Page Header Left Div -->
   <div class="left">
     <img src="../assets/../assets/img/kode-icon.png" alt="icon" style="width:50px">
   <h1 class="title">Inspektorat Jenderal Kemendikbud</h1>
     <ol class="breadcrumb">
       <li class="active">Sistem Pemantauan Kegiatan</li>
     </ol>
   </div>
   <!-- End Page Header Left Div -->

   <!-- Start Page Header Right Div -->
   <div class="right">
     <div class="btn-group" role="group" aria-label="...">
       <a href="index.php" class="btn btn-light">Dashboard</a>
       <a href="#" class="btn btn-light"><i class="fa fa-print"></i>Cetak</a>
     </div>
   </div>
   <!-- End Page Header Right Div -->

 </div>
 <!-- End Page Header -->

 <!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- START CONTAINER -->
<div class="container-default">

  <div class="row presentation">

      <div class="col-lg-8 col-md-6 titles">
        <span class="icon color15-bg"><i class="fa fa-pencil"></i></span>
        <h1>Form Input Kegiatan</h1>
        <h4>Sistem Pemantauan Kegiatan</h4>
      </div>

      <div class="col-lg-4 col-md-6">
        <ul class="list-unstyled list">
          <li><i class="fa fa-check"></i>Formulir Kegiatan</li><li>
          </li><li><i class="fa fa-check"></i>Pendataan Kegiatan</li><li>
          </li><li><i class="fa fa-check"></i>Detail Kegiatan</li><li>
        </li></ul>
      </div>

    </div>

<div class="container-padding">

  <div class="row">
    <div class="col-md-12">
      <div class="panel-body">
        <blockquote>
                <p>Form <?php  echo $nmdokumen;?></p>
                <footer><?php echo $nminduk; ?></footer>
        </blockquote>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 col-lg-6">
      <div class="panel panel-default">

        <div class="panel-title">
          INFORMASI DASAR
        </div>

        <div class="panel-body">
            <form action="kegiatan-input.php" method="post">
              <div class="form-group">
                <input type="hidden" name="iddokumen" value="<?php echo $iddokumen ?>">
                <input type="hidden" name="idinduk" value="<?php echo $idinduk ?>">
                <label for="input1" class="form-label">Kode</label>
                <input class="form-control" id="input1" type="text" readonly="" value="<?php echo $idinduk; ?>" name="idinduk">
              </div>
              <div class="form-group">
                <label for="input3" class="form-label">Nama Kegiatan</label>
                <input class="form-control" id="input3" type="text" name="nmkegiatan">
              </div>
              <div class="form-group">
                <label for="input4" class="form-label">Wilayah</label>
                  <select class="form-control" name="wilayah">
                    <?php
                    $wilayah = $db->get('wilayah_kegiatan');
                    $count = $db->count;
                    for ($i = 0; $i<$count; $i++){
                      echo'<option value="'.$wilayah[$i]['id_wilayah'].'">'.$wilayah[$i]['wilayah'].'</option>';
                    };
                    ?>
                  </select>
              </div>
              <div class="form-group">
                <label for="input5" class="form-label">Jenis Kegiatan</label>
                  <select id="jenisSelector" class="form-control" name="jenis">
                    <?php
                    $jenis = $db->get('jenis_kegiatan');
                    $cnt = $db->count;
                    for ($x = 0; $x<$cnt; $x++){
                    echo '<option value="'.$jenis[$x]['id_jenis'].'">'.$jenis[$x]['jenis'].'</option>';
                  };
                  ?>
                  </select>
              </div>
              <div class="form-group">
                <label for="frekuensi" class="form-label">Frekuensi</label>
                <input class="form-control" id="input6" type="text" name="frekuensi">
              </div>
              <div class="form-group">
                <label for="jmlpeserta" class="form-label">Jumlah Peserta</label>
                <input class="form-control" id="jmlpeserta" type="text" name="jmlpeserta">
              </div>
              <div class="form-group">
                <label for="realisasi" class="form-label">Realisasi</label>
                <input class="form-control" id="realisasi" type="text" name="realisasi">
              </div>
              <div class="form-group">
                <label for="tglmulai" class="form-label">Tanggal Mulai</label>
                <fieldset>
                    <div class="control-group">
                      <div class="controls">
                       <div class="input-prepend input-group">
                         <span class="add-on input-group-addon"><i class="fa fa-calendar"></i></span>
                         <input id="tglmulai" class="form-control" value="2017-02-22" type="text" name="tglmulai">
                       </div>
                      </div>
                    </div>
                   </fieldset>
              </div>

              <div class="form-group">
                <label for="tglselesai" class="form-label">Tanggal Selesai</label>
                <fieldset>
                    <div class="control-group">
                      <div class="controls">
                       <div class="input-prepend input-group">
                         <span class="add-on input-group-addon"><i class="fa fa-calendar"></i></span>
                         <input id="tglselesai" class="form-control" value="2017-02-23" type="text" name="tglselesai">
                       </div>
                      </div>
                    </div>
                   </fieldset>
              </div>

              <div class="form-group">
                <label for="tempat" class="form-label">Tempat</label>
                <input class="form-control" id="tempat" type="text" name="tempat">
              </div>
              <div class="form-group">
                <label for="anggaran" class="form-label">Anggaran</label>
                <div class="input-group">
                      <div class="input-group-addon"><i class="fa"><b>Rp.</b></i></div>
                      <input class="form-control" id="anggaran" placeholder="Contoh : 1200000" type="text" name="anggaran">
                      <div class="input-group-addon">,-</div>
                    </div>
              </div>

        </div>

      </div>
    </div>

    <div class="col-md-12 col-lg-6">
      <div class="panel panel-default">

        <div class="panel-title">
          KELENGKAPAN
        </div>

        <hr>

        <div class="panel-title">
          PRA PELAKSANAAN
        </div>
        <div class="panel-body">

              <div id="pra1">
              <div class="form-group">
                <div class="checkbox checkbox-primary">
                        <input id="rab" type="checkbox">
                        <label for="rab">
                            RAB
                        </label>
                    </div>
                <textarea class="form-control" rows="3" id="rabtxt" placeholder="Keterangan..." disabled="" name="rab"></textarea>
              </div>
            </div>
              <div class="form-group">
                <div class="checkbox checkbox-primary">
                        <input id="proposal" type="checkbox">
                        <label for="proposal">
                            Proposal/KAK
                        </label>
                    </div>
                <textarea class="form-control" rows="3" id="proposaltxt" placeholder="Keterangan..." disabled="" name="proposal"></textarea>
              </div>

              <div class="form-group">
                <div class="checkbox checkbox-primary">
                        <input id="reqpeserta" type="checkbox">
                        <label for="reqpeserta">
                            Permohonan Peserta
                        </label>
                    </div>
                <textarea class="form-control" rows="3" id="reqpesertatxt" placeholder="Keterangan..." disabled="" name="reqpeserta"></textarea>
              </div>

              <div class="form-group">
                <div class="checkbox checkbox-primary">
                        <input id="reqst" type="checkbox">
                        <label for="reqst">
                            Permohonan ST
                        </label>
                    </div>
                <textarea class="form-control" rows="3" id="reqsttxt" placeholder="Keterangan..." disabled="" name="reqst"></textarea>
              </div>
              <div id="pra2">
              <div class="form-group">
                <div class="checkbox checkbox-primary">
                        <input id="reqrusid" type="checkbox">
                        <label for="reqrusid">
                            Permohonan Snack dan Rusid
                        </label>
                    </div>
                <textarea class="form-control" rows="3" id="reqrusidtxt" placeholder="Keterangan..." disabled="" name="reqrusid"></textarea>
              </div>
            </div>
              <hr>

              <div class="panel-title">
                DAFTAR HADIR
              </div>
              <div id="hadir1">
              <div class="form-group">
                <div class="checkbox checkbox-primary">
                        <input id="narsum" type="checkbox">
                        <label for="narsum">
                            Narsum
                        </label>
                    </div>
                <textarea class="form-control" rows="3" id="narsumtxt" placeholder="Keterangan..." disabled="" name="narsum"></textarea>
              </div>
            </div>

              <div class="form-group">
                <div class="checkbox checkbox-primary">
                        <input id="peserta" type="checkbox">
                        <label for="peserta">
                            Peserta
                        </label>
                    </div>
                <textarea class="form-control" rows="3" id="pesertatxt" placeholder="Keterangan..." disabled="" name="peserta"></textarea>
              </div>

              <hr>

              <div class="panel-title">
                PELAKSANAAN
              </div>

              <div class="form-group">
                <div class="checkbox checkbox-primary">
                        <input id="st" type="checkbox">
                        <label for="st">
                            ST
                        </label>
                    </div>
                <textarea class="form-control" rows="3" id="sttxt" placeholder="Keterangan..." disabled="" name="st"></textarea>
              </div>
              <div id="pl1">
              <div class="form-group">
                <div class="checkbox checkbox-primary">
                        <input id="sknarsum" type="checkbox">
                        <label for="sknarsum">
                            SK Narsum dan Panitia
                        </label>
                    </div>
                <textarea class="form-control" rows="3" id="sknarsumtxt" placeholder="Keterangan..." disabled="" name="sknarsum"></textarea>
              </div>
            </div>
              <div class="form-group">
                <div class="checkbox checkbox-primary">
                        <input id="undangan" type="checkbox">
                        <label for="undangan">
                            Undangan Peserta
                        </label>
                    </div>
                <textarea class="form-control" rows="3" id="undangantxt" placeholder="Keterangan..." disabled="" name="undangan"></textarea>
              </div>
              <div id="pl2">
              <div class="form-group">
                <div class="checkbox checkbox-primary">
                        <input id="biodata" type="checkbox">
                        <label for="biodata">
                            Biodata Narsum
                        </label>
                    </div>
                <textarea class="form-control" rows="3" id="biodatatxt" placeholder="Keterangan..." disabled="" name="biodata"></textarea>
              </div>
            </div>
              <div class="form-group">
                <div class="checkbox checkbox-primary">
                        <input id="kuitansi" type="checkbox">
                        <label for="kuitansi">
                            Kuitansi
                        </label>
                    </div>
                <textarea class="form-control" rows="3" id="kuitansitxt" placeholder="Keterangan..." disabled="" name="kuitansi"></textarea>
              </div>

              <div class="form-group">
                <div class="checkbox checkbox-primary">
                        <input id="dokumentasi" type="checkbox">
                        <label for="dokumentasi">
                            Dokumentasi
                        </label>
                    </div>
                <textarea class="form-control" rows="3" id="dokumentasitxt" placeholder="Keterangan..." disabled="" name="dokumentasi"></textarea>
              </div>
              <div id="pl3">
              <div class="form-group">
                <div class="checkbox checkbox-primary">
                        <input id="materi" type="checkbox">
                        <label for="materi">
                            Materi Paparan
                        </label>
                    </div>
                <textarea class="form-control" rows="3" id="materitxt" placeholder="Keterangan..." disabled="" name="materi"></textarea>
              </div>
            </div>

              <div class="form-group">
                <div class="checkbox checkbox-primary">
                        <input id="laporan" type="checkbox">
                        <label for="laporan">
                            Laporan
                        </label>
                    </div>
                <textarea class="form-control" rows="3" id="laporantxt" placeholder="Keterangan..." disabled="" name="laporan"></textarea>
              </div>

              <button type="submit" class="btn btn-default" name="submit" id="submit">Submit</button>

            </form>
        </div>

      </div>
    </div>


  </div>
</div>
<!-- END CONTAINER -->
 <!-- //////////////////////////////////////////////////////////////////////////// -->


<!-- Start Footer -->
<div class="row footer">
  <div class="col-md-6 text-left">
  Copyright © 2017 <a href="#" target="_blank">Itjen Kemendikbud</a> All rights reserved.
  </div>
  <div class="col-md-6 text-right">
    Design and Developed by <a href="#" target="_blank">Tim UNJ</a>
  </div>
</div>
<!-- End Footer -->


</div>
<!-- End Content -->
 <!-- //////////////////////////////////////////////////////////////////////////// -->


<!-- ================================================
jQuery Library
================================================ -->
<script type="text/javascript" src="../assets/js/jquery.min.js"></script>

<!-- ================================================
Bootstrap Core JavaScript File
================================================ -->
<script src="../assets/js/bootstrap/bootstrap.min.js"></script>

<!-- ================================================
Plugin.js - Some Specific JS codes for Plugin Settings
================================================ -->
<script type="text/javascript" src="../assets/js/plugins.js"></script>

<!-- ================================================
Bootstrap Select
================================================ -->
<script type="text/javascript" src="../assets/js/bootstrap-select/bootstrap-select.js"></script>

<!-- ================================================
Bootstrap Toggle
================================================ -->
<script type="text/javascript" src="../assets/js/bootstrap-toggle/bootstrap-toggle.min.js"></script>

<!-- ================================================
Moment.js
================================================ -->
<script type="text/javascript" src="../assets/js/moment/moment.min.js"></script>


<!-- ================================================
Bootstrap Date Range Picker
================================================ -->
<script type="text/javascript" src="../assets/js/date-range-picker/daterangepicker.js"></script>


<!-- Basic Date Range Picker -->
<script type="text/javascript">
$(document).ready(function() {
  $('#date-range-picker').daterangepicker(null, function(start, end, label) {
    console.log(start.toISOString(), end.toISOString(), label);
  });
});
</script>

<script>
$(document).ready(function() {
  $.viewMap = {
    '1' : $('#pra2, #hadir1'),
    '2' : $('#pra2, #hadir1, #pl1, #pl2'),
    '3' : $('#pra1, #hadir1, #pl1, #pl2, #pl3')
  };

  $('#jenisSelector').change(function() {
    // hide all
    $.each($.viewMap, function() { this.hide(); });
    // show current
    $.viewMap[$(this).val()].show();
  }).change();
});
</script>

<!-- Basic Single Date Picker -->
<script type="text/javascript">
$(document).ready(function() {
  $('#tglmulai').daterangepicker({ singleDatePicker: true }, function(start, end, label) {
    console.log(start.toISOString(), end.toISOString(), label);
  });
});
</script>

<!-- Basic Single Date Picker -->
<script type="text/javascript">
$(document).ready(function() {
  $('#tglselesai').daterangepicker({ singleDatePicker: true }, function(start, end, label) {
    console.log(start.toISOString(), end.toISOString(), label);
  });
});
</script>

<script>
document.getElementById('rab').onchange = function() {
document.getElementById('rabtxt').disabled = !this.checked;
};
document.getElementById('proposal').onchange = function() {
document.getElementById('proposaltxt').disabled = !this.checked;
};
document.getElementById('reqpeserta').onchange = function() {
document.getElementById('reqpesertatxt').disabled = !this.checked;
};
document.getElementById('reqst').onchange = function() {
document.getElementById('reqsttxt').disabled = !this.checked;
};
document.getElementById('reqrusid').onchange = function() {
document.getElementById('reqrusidtxt').disabled = !this.checked;
};
document.getElementById('narsum').onchange = function() {
document.getElementById('narsumtxt').disabled = !this.checked;
};
document.getElementById('peserta').onchange = function() {
document.getElementById('pesertatxt').disabled = !this.checked;
};
document.getElementById('st').onchange = function() {
document.getElementById('sttxt').disabled = !this.checked;
};
document.getElementById('sknarsum').onchange = function() {
document.getElementById('sknarsumtxt').disabled = !this.checked;
};
document.getElementById('undangan').onchange = function() {
document.getElementById('undangantxt').disabled = !this.checked;
};
document.getElementById('biodata').onchange = function() {
document.getElementById('biodatatxt').disabled = !this.checked;
};
document.getElementById('kuitansi').onchange = function() {
document.getElementById('kuitansitxt').disabled = !this.checked;
};
document.getElementById('dokumentasi').onchange = function() {
document.getElementById('dokumentasitxt').disabled = !this.checked;
};
document.getElementById('materi').onchange = function() {
document.getElementById('materitxt').disabled = !this.checked;
};
document.getElementById('laporan').onchange = function() {
document.getElementById('laporantxt').disabled = !this.checked;
};
$("button").click(function(){
    $("textarea").removeAttr("disabled");
});
</script>

</body>
</html>
