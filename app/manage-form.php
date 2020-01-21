<?php
require('../assets/config/dbconnect.php');
require_once('../assets/libraries/crud/MysqliDb.php');
$db = new MysqliDb ($connect);
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
        <span class="icon color15-bg"><i class="fa fa-paper-plane"></i></span>
        <h1>Formulir Kegiatan</h1>
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
        <div class="panel">

          <div class="panel-title">
            JADWAL KEGIATAN RUMAH TANGGA
          </div>

          <div class="panel-body">

            <p>Berikut adalah daftar kegiatan rumah tangga yang aktif, untuk melihat konten silahkan klik panel dibawah.</p>
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <?php
              $dokumen = $db->get('dokumen');
              $count = $db->count;
              for ($i = 0; $i<$count; $i++){
              echo '<div class="panel panel-default panel-collapse">
                <div class="panel-heading" role="tab" id="heading'.$i.'">
                  <h4 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse'.$i.'" aria-expanded="false" aria-controls="collapse'.$i.'">
                    '.$dokumen[$i]["nama_dokumen"].'
                    </a>
                  </h4>
                </div>
                <div id="collapse'.$i.'" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                  <div class="panel-body">
            <table class="table table-bordered table-striped">
              <colgroup>
                <col class="col-xs-1">
                <col class="col-xs-7">
              </colgroup>
              <thead>
                <tr>
                  <th>No</th>
                  <th>Induk Kegiatan</th>
                  <th>Perintah</th>
                </tr>
              </thead>
              <tbody>
              ';
              $iddok = $dokumen[$i]["id_dokumen"];
              $db->where('id_dokumen', $iddok);
              $induk = $db->get('induk_kegiatan');
              $cnt = $db->count;
              for ($x = 0; $x < $cnt; $x++){
                $y = $x + 1;
                echo '<tr>
                  <th scope="row">
                    <code>#'.$y.'</code>
                  </th>
                  <td>'.$induk[$x]["nama_induk"].'</td>
                  <td><a href="input-form.php?id='.$induk[$x]['id_induk'].'" class="btn btn-sm btn-option1"><i class="fa fa-paper-plane-o"></i>Buat Form</a></td>
                </tr>';
            }
            echo '
              </tbody>
            </table>
          </div>
                </div>
              </div>';
            };
             ?>
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


</body>
</html>
