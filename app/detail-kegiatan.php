<?php
require('../assets/config/dbconnect.php');
require_once('../assets/libraries/crud/MysqliDb.php');
$db = new MysqliDb ($connect);
if(isset($_GET['id'])){

$idkegiatan = $_GET['id'];
$db->where('id_kegiatan', $idkegiatan);
$data = $db->get ('kegiatan');

$iddokumen = $data [0]['id_dokumen'];
$db->where('id_dokumen', $iddokumen);
$dokumen = $db->get('dokumen');
$nmdokumen = $dokumen [0]['nama_dokumen'];


$idinduk = $data [0]['id_induk'];
$db->where('id_induk', $idinduk);
$induk = $db->get('induk_kegiatan');
$nminduk = $induk [0]['nama_induk'];

$idjenis = $data [0]['id_jenis'];
$idwilayah = $data [0]['id_wilayah'];

$idwilayah = $data[0]['id_wilayah'];
$idjenis = $data[0]['id_jenis'];
$db->where('id_wilayah', $idwilayah);
$wilayah=$db->get('wilayah_kegiatan');

$db->where('id_jenis', $idjenis);
$jenis=$db->get('jenis_kegiatan');

$nmkegiatan = $data[0]['nama_kegiatan'];
$nmwilayah = $wilayah[0]['wilayah'];
$nmjenis = $jenis[0]['jenis'];
$frekuensi = $data[0]['frekuensi'];
$jmlpeserta = $data[0]['jumlah_peserta'];
$realisasi = $data[0]['realisasi'];
$tglmulai = date("d F, Y", strtotime($data[0]['tgl_mulai']));
$tglselesai = date("d F, Y", strtotime($data[0]['tgl_selesai']));
$anggaran = number_format($data[0]['anggaran']);
$tempat = $data[0]['lokasi_kegiatan'];
$rab = $data[0]['rab'];
$reqpeserta = $data [0]['req_peserta'];
$proposal = $data[0]['proposal'];
$reqst = $data[0]['req_st'];
$reqrusid = $data[0]['req_rusid'];
$st = $data[0]['st'];
$sknarsum = $data[0]['sk_narsum'];
$skpanitia = $data[0]['sk_panitia'];
$undangan = $data[0]['undangan_peserta'];
$peserta = $data[0]['datahadir_peserta'];
$narsum = $data[0]['datahadir_narsum'];
$biodata = $data[0]['bio_narsum'];
$kuitansi = $data[0]['kuitansi'];
$dokumentasi = $data[0]['dokumentasi'];
$materi = $data[0]['materi'];
$laporan = $data[0]['laporan'];
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
 <!-- //////////////////////////////////////////////////////////////////////////// -->
 <!-- START TOP -->
 <div id="top" class="clearfix">

   <!-- Start App Logo -->
   <div class="applogo">
     <a href="index.php" class="logo">simantan</a>
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
        <span class="icon color7-bg"><i class="fa fa-suitcase"></i></span>
        <h1>Detail Kegiatan</h1>
        <h4>Sistem Pemantauan Kegiatan</h4>
      </div>

      <div class="col-lg-4 col-md-6">
        <ul class="list-unstyled list">
          <li><i class="fa fa-check"></i>Management Kegiatan</li><li>
          </li><li><i class="fa fa-check"></i>Kalender Kegiatan</li><li>
          </li><li><i class="fa fa-check"></i>Management Keuangan</li><li>
        </li></ul>
      </div>

  </div>

<div class="container-padding">
  <div class="row">
<div class="col-md-12">
  <blockquote>
          <p>Detail <?php echo $nmdokumen ?></p>
          <footer><?php echo $nminduk ?></footer><br>
          <a href="edit-kegiatan.php?id=<?php echo $idkegiatan ?>" class="btn btn-sm btn-option3"><i class="fa fa-paper-plane-o"></i>Edit Kegiatan</a>
  </blockquote>
</div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">


          <div class="panel-title">
            INFORMASI DASAR
          </div>

          <div class="panel-body">
            <div class="col-md-6 padding-1-0">
              <form>
                <div class="form-group">
                  <label for="input1" class="form-label">Kode</label>
                  <input class="form-control" id="input1" type="text" readonly="" value="<?php echo $idkegiatan; ?>" name="idkegiatan">
                </div>
                <div class="form-group">
                  <label for="input3" class="form-label"readonly="" >Nama Kegiatan</label>
                  <input class="form-control" id="input3" type="text" name="nmkegiatan" readonly="" value="<?php echo $nmkegiatan ?>">
                </div>
                <div class="form-group">
                  <label for="input4" class="form-label">Wilayah</label>
                    <select class="form-control" readonly="">
                      <?php echo'
                        <option value="'.$idwilayah.'">'.$nmwilayah.'</option>';
                      ?>
                    </select>
                </div>
                <div class="form-group">
                  <label for="input5" class="form-label">Jenis Kegiatan</label>
                    <select id="jenisSelector" class="form-control" name="jenis" readonly="">
                      <?php
                      echo '<option value="'.$idjenis.'">'.$nmjenis.'</option>';
                    ?>
                    </select>
                </div>
                <div class="form-group">
                  <label for="frekuensi" class="form-label">Frekuensi</label>
                  <input class="form-control" id="frekuensi" type="text" readonly="" value="<?php echo $frekuensi ?>">
                </div>
            </div>
            <div class="col-md-6 padding-0">
              <div class="form-group">
                <label for="jmlpeserta" class="form-label">Jumlah Peserta</label>
                <input class="form-control" id="jmlpeserta" type="text" name="jmlpeserta" readonly="" value="<?php echo $jmlpeserta ?>">
              </div>
              <div class="form-group">
                <label for="realisasi" class="form-label">Realisasi</label>
                <input class="form-control" id="realisasi" type="text" name="realisasi" readonly="" value="<?php echo $realisasi ?>">
              </div>
              <div class="form-group">
                <label for="input9" class="form-label">Tanggal Mulai - Tanggal Selesai</label>
                <fieldset>
                 <div class="control-group">
                   <div class="controls">
                    <div class="input-prepend input-group">
                      <span class="add-on input-group-addon"><i class="fa fa-calendar"></i></span>
                      <input id="date-range-picker" class="form-control active" value="<?php echo $tglmulai; echo ' sd '; echo $tglselesai; ?>" type="text" readonly="">
                    </div>
                   </div>
                 </div>
                </fieldset>
              </div>
              <div class="form-group">
                <label for="tempat" class="form-label">Tempat</label>
                <input class="form-control" id="tempat" type="text" name="tempat" readonly="" value="<?php echo $tempat ?>">
              </div>
              <div class="form-group">
                <label for="anggaran" class="form-label">Anggaran</label>
                <div class="input-group">
                      <div class="input-group-addon"><i class="fa"><b>Rp.</b></i></div>
                      <input class="form-control" id="anggaran" readonly="" type="text" name="anggaran" value="<?php echo $anggaran ?>">
                      <div class="input-group-addon">,-</div>
                    </div>
              </div>
            </form>
          </div>
        </div>
    </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">


          <div class="panel-title">
            KELENGKAPAN
          </div>

          <div class="panel-body">
            <div class="col-md-6 padding-1-0">
              <hr>

              <div class="panel-title">
                PRA PELAKSANAAN
              </div>

              <form>
                <div id="pra1">
                <div class="form-group">
                  <div class="checkbox checkbox-primary">
                          <input id="rab" type="checkbox" value="false" <?php if ($rab != '') echo "checked='checked'"; ?>>
                          <label for="rab">
                              RAB
                          </label>
                      </div>
                  <textarea class="form-control" rows="3" id="rabtxt"  readonly="" name="rab" value="<?php $rab ?>"><?php echo $rab ?></textarea>
                </div>
              </div>
                <div class="form-group">
                  <div class="checkbox checkbox-primary">
                          <input id="proposal" type="checkbox" value="false" <?php if ($proposal != '') echo "checked='checked'"; ?>>
                          <label for="proposal">
                              Proposal/KAK
                          </label>
                      </div>
                  <textarea class="form-control" rows="3" id="proposaltxt"  readonly="" name="proposal" value="<?php $proposal ?>"><?php echo $proposal ?></textarea>
                </div>

                <div class="form-group">
                  <div class="checkbox checkbox-primary">
                          <input id="reqpeserta" type="checkbox" value="false" <?php if ($reqpeserta != '') echo "checked='checked'"; ?>>
                          <label for="reqpeserta">
                              Permohonan Peserta
                          </label>
                      </div>
                  <textarea class="form-control" rows="3" id="reqpesertatxt"  readonly="" name="reqpeserta" value="<?php $reqpeserta ?>"><?php echo $reqpeserta ?></textarea>
                </div>

                <div class="form-group">
                  <div class="checkbox checkbox-primary">
                          <input id="reqst" type="checkbox" value="false" <?php if ($reqst != '') echo "checked='checked'"; ?>>
                          <label for="reqst">
                              Permohonan ST
                          </label>
                      </div>
                  <textarea class="form-control" rows="3" id="reqsttxt"  readonly="" name="reqst" value="<?php $reqst ?>"><?php echo $reqst ?></textarea>
                </div>

                <div id="pra2">
                <div class="form-group">
                  <div class="checkbox checkbox-primary">
                          <input id="reqrusid" type="checkbox" value="false" <?php if ($reqrusid != '') echo "checked='checked'"; ?>>
                          <label for="reqrusid">
                              Permohonan Snack dan Rusid
                          </label>
                      </div>
                  <textarea class="form-control" rows="3" id="reqrusidtxt"  disabled="" name="reqrusid" value="<?php $reqrusid ?>"><?php echo $reqrusid ?></textarea>
                </div>
              </div>

              <hr>

              <div class="panel-title">
                DAFTAR HADIR
              </div>
              <div id="hadir1">
              <div class="form-group">
                <div class="checkbox checkbox-primary">
                        <input id="narsum" type="checkbox" value="false" <?php if ($narsum != '') echo "checked='checked'"; ?>>
                        <label for="narsum">
                            Narsum
                        </label>
                    </div>
                <textarea class="form-control" rows="3" id="narsumtxt"  readonly="" name="narsum" value="<?php $narsum ?>"><?php echo $narsum ?></textarea>
              </div>
            </div>

              <div class="form-group">
                <div class="checkbox checkbox-primary">
                        <input id="peserta" type="checkbox" value="false" <?php if ($peserta != '') echo "checked='checked'"; ?>>
                        <label for="peserta">
                            Peserta
                        </label>
                    </div>
                <textarea class="form-control" rows="3" id="pesertatxt"  readonly="" name="peserta" value="<?php $peserta ?>"><?php echo $peserta ?></textarea>
              </div>

            </div>
            <div class="col-md-6 padding-0">
              <hr>

              <div class="panel-title">
                PELAKSANAAN
              </div>

              <div class="form-group">
                <div class="checkbox checkbox-primary">
                        <input id="st" type="checkbox" value="false" <?php if ($st != '') echo "checked='checked'"; ?>>
                        <label for="st">
                            ST
                        </label>
                    </div>
                <textarea class="form-control" rows="3" id="sttxt"  readonly="" name="st" value="<?php $st ?>"><?php echo $st ?></textarea>
              </div>
              <div id="pl1">
              <div class="form-group">
                <div class="checkbox checkbox-primary">
                        <input id="sknarsum" type="checkbox" value="false" <?php if ($sknarsum != '') echo "checked='checked'"; ?>>
                        <label for="sknarsum">
                            SK Narsum dan Panitia
                        </label>
                    </div>
                <textarea class="form-control" rows="3" id="sknarsumtxt"  readonly="" name="sknarsum" value="<?php $sknarsum ?>"><?php echo $sknarsum ?></textarea>
              </div>
            </div>
              <div class="form-group">
                <div class="checkbox checkbox-primary">
                        <input id="undangan" type="checkbox" value="false" <?php if ($undangan != '') echo "checked='checked'"; ?>>
                        <label for="undangan">
                            Undangan Peserta
                        </label>
                    </div>
                <textarea class="form-control" rows="3" id="undangantxt"  readonly="" name="undangan" value="<?php $undangan ?>"><?php echo $undangan ?></textarea>
              </div>
              <div id="pl2">
              <div class="form-group">
                <div class="checkbox checkbox-primary">
                        <input id="biodata" type="checkbox" value="false" <?php if ($biodata != '') echo "checked='checked'"; ?>>
                        <label for="biodata">
                            Biodata Narsum
                        </label>
                    </div>
                <textarea class="form-control" rows="3" id="biodatatxt"  readonly="" name="biodata" value="<?php $biodata ?>"><?php echo $biodata ?></textarea>
              </div>
            </div>
              <div class="form-group">
                <div class="checkbox checkbox-primary">
                        <input id="kuitansi" type="checkbox" value="false" <?php if ($kuitansi != '') echo "checked='checked'"; ?>>
                        <label for="kuitansi">
                            Kuitansi
                        </label>
                    </div>
                <textarea class="form-control" rows="3" id="kuitansitxt"  readonly="" name="kuitansi" value="<?php $kuitansi ?>"><?php echo $kuitansi ?></textarea>
              </div>

              <div class="form-group">
                <div class="checkbox checkbox-primary">
                        <input id="dokumentasi" type="checkbox" value="false" <?php if ($dokumentasi != '') echo "checked='checked'"; ?>>
                        <label for="dokumentasi">
                            Dokumentasi
                        </label>
                    </div>
                <textarea class="form-control" rows="3" id="dokumentasitxt"  readonly="" name="dokumentasi" value="<?php echo $dokumentasi ?>"><?php $dokumentasi ?></textarea>
              </div>
              <div id="pl3">
              <div class="form-group">
                <div class="checkbox checkbox-primary">
                        <input id="materi" type="checkbox" value="false" <?php if ($materi != '') echo "checked='checked'"; ?>>
                        <label for="materi">
                            Materi Paparan
                        </label>
                    </div>
                <textarea class="form-control" rows="3" id="materitxt"  readonly="" name="materi" value="<?php $materi ?>"><?php echo $materi ?></textarea>
              </div>
            </div>

              <div class="form-group">
                <div class="checkbox checkbox-primary">
                        <input id="laporan" type="checkbox" value="false" <?php if ($laporan != '') echo "checked='checked'"; ?>>
                        <label for="laporan">
                            Laporan
                        </label>
                    </div>
                <textarea class="form-control" rows="3" id="laporantxt"  readonly="" name="laporan" value="<?php $laporan ?>"><?php echo $laporan ?></textarea>
              </div>

            </form>
          </div>
        </div>
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

<script>
$(document).ready(function() {
  $.viewMap = {
    '1' : $('#pra2'),
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
<script>
$(document).ready(function() {
    //getting the length of your textbox
    var myLength = $("#rab").val().length;
    if(myLength <= 0){
        $("input").removeAttr("checked");
    }

    var myLength = $("#proposal").val().length;
    if(myLength <= 0){
        $("input").removeAttr("checked");
    }

    var myLength = $("textarea reqpeserta").val().length;
    if(myLength <= 0){
        $("input").removeAttr("checked");
    }

    var myLength = $("#reqst").val().length;
    if(myLength <= 0){
        $("input").removeAttr("checked");
    }
  });
</script>

</body>
</html>
