<?php
require('../assets/config/dbconnect.php');
require_once('../assets/libraries/crud/MysqliDb.php');
$db = new MysqliDb ($connect);

$db->join('dokumen d', 'k.id_dokumen = d.id_dokumen', 'LEFT');
$db->join('induk_kegiatan i', 'k.id_induk = i.id_induk', 'LEFT');
$db->join('wilayah_kegiatan w', 'k.id_wilayah = w.id_wilayah', 'LEFT');
$db->join('jenis_kegiatan j', 'k.id_jenis = j.id_jenis', 'LEFT');
$kegiatan = $db->get( 'kegiatan k', null, 'k.*, d.nama_dokumen AS namadokumen, i.nama_induk AS namainduk, w.wilayah AS area, j.jenis AS tipe' );
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Sistem Pemantauan Kegiatan berbasis web | Itjen Kemendikbud.">
  <meta name="keywords" content="sistem, pemantauan, monitoring, kegiatan, agenda" />
  <title>Itjen Kemendikbud | Sistem Pemantauan Kegiatan</title>

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
          <li><a href="manage-table.php"><i class="fa falist fa-inbox"></i>Tabel Kegiatan</a></li>
          <li><a href="manage-form.php"><i class="fa falist fa-file-o"></i>Formulir</a></li>
          <li><a href="manage-user.php"><i class="fa falist fa-wrench"></i>User Management</a></li>
          <li class="divider"></li>
          <li><a href="../logout.php"><i class="fa falist fa-power-off"></i> Logout</a></li>
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


  <!-- START HEADER PRESENTATION -->
   <div class="row presentation">

       <div class="col-lg-8 col-md-6 titles">
         <span class="icon color5-bg"><i class="fa fa-home"></i></span>
         <h1>Dashboard</h1>
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
   <!-- END HEADER PRESENTATION -->

</div>

<div class="container-padding">

  <!-- START ROW OVERVIEW SISTEM -->
   <div class="row">
      <div class="col-md-6 col-lg-4">
         <div class="panel panel-primary">

           <div class="panel-title">
             SISA KEGIATAN <span class="badge">15</span>
           </div>
           <center>
           <div class="panel-body">
           <img src="../assets/../assets/img/kegiatan-icon.png" alt="icon" style="width:100px">
           </div>

           <div class="panel-heading">15 Kegiatan</div>
         </center>
         </div>
       </div>

      <div class="col-md-6 col-lg-4">
       <div class="panel panel-success">

         <div class="panel-title">
           SISA HARI <span class="badge">40</span>
         </div>
         <center>
         <div class="panel-body">
         <img src="../assets/../assets/img/kalender-icon.png" alt="icon" style="width:100px">
         </div>

         <div class="panel-heading">40 Hari</div>
       </center>
       </div>
      </div>

      <div class="col-md-6 col-lg-4">
       <div class="panel panel-warning">

         <div class="panel-title">
           SISA PAGU <span class="badge">20.000.000</span>
         </div>
         <center>
         <div class="panel-body">
         <img src="../assets/../assets/img/pagu-icon.png" alt="icon" style="width:100px">
         </div>

         <div class="panel-heading">Rp. 20.000.000,-</div>
         </center>

       </div>
     </div>
   </div>
   <!-- END ROW OVERVIEW SISTEM-->

   <?php
   for($x=0; $x<3;$x++){
   $dokumen = $db->get('dokumen');
   echo'

   <!-- START ROW TABEL DATA -->
   <div class="row">

    <!-- Start Panel -->
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-title">
          '.$dokumen[$x]['nama_dokumen'].'
        </div>
        <div class="panel-body table-responsive">

            <table id="example'.$x.'" class="table display">
                <thead>
                    <tr>
                        <th>Kegiatan</th>
                        <th>Jenis</th>
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Selesai</th>
                        <th>Anggaran</th>
                        <th>Kelengkapan</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tfoot>
                    <tr>
                        <th>Kegiatan</th>
                        <th>Jenis</th>
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Selesai</th>
                        <th>Anggaran</th>
                        <th>Kelengkapan</th>
                        <th>Action</th>
                      </tr>
                </tfoot>

                <tbody>
                ';
                 $iddok = $dokumen[$x]['id_dokumen'];
                 $db->where('id_dokumen', $iddok);
                 $kegiatan = $db->get('kegiatan');
                 $count = $db->count;
                 for($y=0; $y<$count;$y++){

                   $idjenis = $kegiatan[$y]['id_jenis'];
                   $db->where('id_jenis', $idjenis);
                   $jenis = $db->get('jenis_kegiatan');

                   $idwilayah = $kegiatan[$y]['id_wilayah'];
                   $db->where('id_wilayah', $idwilayah);
                   $wilayah = $db->get('wilayah_kegiatan');

                   $idinduk = $kegiatan[$y]['id_induk'];
                   $db->where('id_induk', $idinduk);
                   $induk = $db->get('induk_kegiatan');

                   $iddokumen = $kegiatan[$y]['id_dokumen'];
                   $db->where('id_dokumen', $iddokumen);
                   $doku = $db->get('dokumen');

                   $nmjenis = $jenis[0]['jenis'];
                   $mulai = $kegiatan[$y]['tgl_mulai'];
                   $tglmulai = date("d F, Y", strtotime($mulai));
                   $selesai = $kegiatan[$y]['tgl_selesai'];
                   $tglselesai = date("d F, Y", strtotime($selesai));
                   $angka = $kegiatan[$y]['anggaran'];
                   $anggaran = number_format($angka);

                   $reqpeserta = $kegiatan[$y]['req_peserta'];
                   $proposal = $kegiatan[$y]['proposal'];
                   $reqst = $kegiatan[$y]['req_st'];
                   $reqrusid = $kegiatan[$y]['req_rusid'];
                   $rab = $kegiatan[$y]['rab'];
                   $st = $kegiatan[$y]['st'];
                   $sknarsum = $kegiatan[$y]['sk_narsum'];
                   $undangan = $kegiatan[$y]['undangan_peserta'];
                   $narsum = $kegiatan[$y]['datahadir_narsum'];
                   $peserta = $kegiatan[$y]['datahadir_peserta'];
                   $dokumentasi = $kegiatan[$y]['dokumentasi'];
                   $laporan = $kegiatan[$y]['laporan'];
                   $materi = $kegiatan[$y]['materi'];
                   $kuitansi = $kegiatan[$y]['kuitansi'];
                   $biodata = $kegiatan[$y]['bio_narsum'];

                   echo '
                   <tr>
                       <td>'.$kegiatan[$y]['nama_kegiatan'].'</td>
                       <td>'.$nmjenis.'</td>
                       <td>'.$tglmulai.'</td>
                       <td>'.$tglselesai.'</td>
                       <td>Rp. '.$anggaran.'</td>
                       <td>';
                       include ('check-lengkap.php');
                       echo'</td>
                       <td><a href="#" class="btn btn-sm btn-option1" data-toggle="modal" data-target="#'.$kegiatan[$y]['id_kegiatan'].'"><i class="fa fa-paper-plane-o"></i>Lihat Detail</a></br></br>
                       <a href="edit-kegiatan.php?id='.$kegiatan[$y]['id_kegiatan'].'" class="btn btn-sm btn-option3"><i class="fa fa-paper-plane-o"></i>Edit Kegiatan</a></td>

                   </tr>

                   <!-- Modal -->
                       <div class="modal fade" id="'.$kegiatan[$y]['id_kegiatan'].'" tabindex="-1" role="dialog" aria-hidden="true">
                         <div class="modal-dialog modal-lg">
                           <div class="modal-content">
                             <div class="modal-header">
                               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                               <h4 class="modal-title">Dokumen '.$doku[0]['nama_dokumen'].'</h4> <br>
                               <a href="cetak-kegiatan.php?id='.$kegiatan[$y]['id_kegiatan'].'" class="btn btn-sm btn-option3"><i class="fa fa-paper-plane-o"></i>Cetak</a>
                             </div>
                             <div class="modal-body">

                             <div class="row">
                               <div class="col-md-12 col-lg-6">
                                 <div class="panel panel-default">

                                   <div class="panel-title">
                                     INFORMASI DASAR
                                   </div>

                                   <div class="panel-body">
                                       <form>
                                         <div class="form-group">
                                           <label for="input1" class="form-label">Kode</label>
                                           <input class="form-control" id="input1" type="text" readonly="" value="'.$kegiatan[$y]['id_kegiatan'].'" name="idkegiatan">
                                         </div>

                                         <div class="form-group">
                                           <label for="input1" class="form-label">Induk Kegiatan</label>
                                           <input class="form-control" id="input1" type="text" readonly="" value="'.$induk[0]['nama_induk'].'" name="idkegiatan">
                                         </div>

                                         <div class="form-group">
                                           <label for="input3" class="form-label">Nama Kegiatan</label>
                                           <input class="form-control" id="input3" type="text" readonly="" name="nmkegiatan" value="'.$kegiatan[$y]['nama_kegiatan'].'">
                                         </div>

                                         <div class="form-group">
                                           <label for="input4" class="form-label">Wilayah</label>
                                             <select class="form-control" name="wilayah" readonly="">
                                                 <option value="'.$wilayah[0]['id_wilayah'].'">'.$wilayah[0]['wilayah'].'</option>
                                             </select>
                                         </div>

                                         <div class="form-group">
                                           <label for="input5" class="form-label">Jenis Kegiatan</label>
                                             <select id="jenisSelector" class="form-control" name="jenis" readonly="">
                                             <option value="'.$jenis[0]['id_jenis'].'">'.$jenis[0]['jenis'].'</option>
                                             </select>
                                         </div>

                                         <div class="form-group">
                                           <label for="frekuensi" class="form-label">Frekuensi</label>
                                           <input class="form-control" id="input6" type="text" name="frekuensi" value="'.$kegiatan[$y]['frekuensi'].'" readonly="">
                                         </div>

                                         <div class="form-group">
                                           <label for="jmlpeserta" class="form-label">Jumlah Peserta</label>
                                           <input class="form-control" id="jmlpeserta" type="text" name="jmlpeserta" value="'.$kegiatan[$y]['jumlah_peserta'].'" readonly="">
                                         </div>

                                         <div class="form-group">
                                           <label for="realisasi" class="form-label">Realisasi</label>
                                           <input class="form-control" id="realisasi" type="text" name="realisasi" value="'.$kegiatan[$y]['realisasi'].'" readonly="">
                                         </div>

                                         <div class="form-group">
                                           <label for="input9" class="form-label">Tanggal Mulai - Tanggal Selesai</label>
                                           <fieldset>
                                            <div class="control-group">
                                              <div class="controls">
                                               <div class="input-prepend input-group">
                                                 <span class="add-on input-group-addon"><i class="fa fa-calendar"></i></span>
                                                 <input id="date-range-picker" class="form-control active" value="'.$tglmulai.' sd '.$tglselesai.'" type="text" readonly="">
                                               </div>
                                              </div>
                                            </div>
                                           </fieldset>
                                         </div>

                                         <div class="form-group">
                                           <label for="tempat" class="form-label">Tempat</label>
                                           <input class="form-control" id="tempat" type="text" name="tempat" value="'.$kegiatan[$y]['lokasi_kegiatan'].'" readonly="">
                                         </div>

                                         <div class="form-group">
                                           <label for="anggaran" class="form-label">Anggaran</label>
                                           <div class="input-group">
                                                 <div class="input-group-addon"><i class="fa"><b>Rp.</b></i></div>
                                                 <input class="form-control" id="anggaran" type="text" name="anggaran" value="'.$anggaran.'" readonly="">
                                                 <div class="input-group-addon">,-</div>
                                               </div>
                                         </div>

                                   </div>

                                 </div>
                               </div>

                               <div class="col-md-12 col-lg-6">
                                 <div class="panel panel-default">

                                   <div class="panel-body">';
                                     if($idjenis == '1'){
                                               echo '
                                               <div class="panel-title">
                                                 PRA PELAKSANAAN
                                               </div>
                                               <div class="checkbox checkbox-primary">
                                                       <input id="proposal" type="checkbox" ';if ($kegiatan[$y]['req_peserta'] != '') echo "checked='checked'"; echo '>
                                                       <label for="proposal">
                                                           Permohonan Peserta
                                                       </label>
                                               </div>
                                               <div class="checkbox checkbox-primary">
                                                       <input id="proposal" type="checkbox" ';if ($kegiatan[$y]['proposal'] != '') echo "checked='checked'"; echo '>
                                                       <label for="proposal">
                                                           Proposal/KAK
                                                       </label>
                                               </div>
                                               <div class="checkbox checkbox-primary">
                                                       <input id="proposal" type="checkbox" ';if ($kegiatan[$y]['req_st'] != '') echo "checked='checked'"; echo '>
                                                       <label for="proposal">
                                                           Permohonan ST
                                                       </label>
                                               </div>
                                               <div class="checkbox checkbox-primary">
                                                       <input id="proposal" type="checkbox" ';if ($kegiatan[$y]['req_rusid'] != '') echo "checked='checked'"; echo '>
                                                       <label for="proposal">
                                                           Permohonan Snack & Rusid
                                                       </label>
                                               </div>

                                               <hr>

                                               <div class="panel-title">
                                                 PELAKSANAAN
                                               </div>
                                               <div class="checkbox checkbox-primary">
                                                       <input id="proposal" type="checkbox" ';if ($kegiatan[$y]['st'] != '') echo "checked='checked'"; echo '>
                                                       <label for="proposal">
                                                           ST
                                                       </label>
                                               </div>
                                               <div class="checkbox checkbox-primary">
                                                       <input id="proposal" type="checkbox" ';if ($kegiatan[$y]['undangan_peserta'] != '') echo "checked='checked'"; echo '>
                                                       <label for="proposal">
                                                           Undangan Peserta
                                                       </label>
                                               </div>
                                               <div class="checkbox checkbox-primary">
                                                       <input id="proposal" type="checkbox" ';if ($kegiatan[$y]['datahadir_narsum'] != '') echo "checked='checked'"; echo '>
                                                       <label for="proposal">
                                                           Daftar Hadir
                                                       </label>
                                               </div>
                                               <div class="checkbox checkbox-primary">
                                                       <input id="proposal" type="checkbox" ';if ($kegiatan[$y]['dokumentasi'] != '') echo "checked='checked'"; echo '>
                                                       <label for="proposal">
                                                           Dokumentasi
                                                       </label>
                                               </div>
                                               <div class="checkbox checkbox-primary">
                                                       <input id="proposal" type="checkbox" ';if ($kegiatan[$y]['laporan'] != '') echo "checked='checked'"; echo '>
                                                       <label for="proposal">
                                                           Laporan
                                                       </label>
                                               </div>
                                               <div class="checkbox checkbox-primary">
                                                       <input id="proposal" type="checkbox" ';if ($kegiatan[$y]['kuitansi'] != '') echo "checked='checked'"; echo '>
                                                       <label for="proposal">
                                                           Kuitansi
                                                       </label>
                                               </div>
                                               ';
                                             }
                                     elseif($idjenis == '2'){
                                                       echo '
                                                       Pra :<br>
                                                       <div class="checkbox checkbox-primary">
                                                               <input id="proposal" type="checkbox" ';if ($kegiatan[$y]['req_peserta'] != '') echo "checked='checked'"; echo '>
                                                               <label for="proposal">
                                                                   Permohonan Peserta
                                                               </label>
                                                       </div>
                                                       <div class="checkbox checkbox-primary">
                                                               <input id="proposal" type="checkbox" ';if ($kegiatan[$y]['proposal'] != '') echo "checked='checked'"; echo '>
                                                               <label for="proposal">
                                                                   Proposal/KAK
                                                               </label>
                                                       </div>
                                                       <div class="checkbox checkbox-primary">
                                                               <input id="proposal" type="checkbox" ';if ($kegiatan[$y]['req_st'] != '') echo "checked='checked'"; echo '>
                                                               <label for="proposal">
                                                                   Permohonan ST
                                                               </label>
                                                       </div>
                                                       <div class="checkbox checkbox-primary">
                                                               <input id="proposal" type="checkbox" ';if ($kegiatan[$y]['req_rusid'] != '') echo "checked='checked'"; echo '>
                                                               <label for="proposal">
                                                                   Permohonan Snack & Rusid
                                                               </label>
                                                       </div>


                                                       Pelaksanaan :<br>
                                                       <div class="checkbox checkbox-primary">
                                                               <input id="proposal" type="checkbox" ';if ($kegiatan[$y]['st'] != '') echo "checked='checked'"; echo '>
                                                               <label for="proposal">
                                                                   ST
                                                               </label>
                                                       </div>
                                                       <div class="checkbox checkbox-primary">
                                                               <input id="proposal" type="checkbox" ';if ($kegiatan[$y]['sk_narsum'] != '') echo "checked='checked'"; echo '>
                                                               <label for="proposal">
                                                                   SK Narsum
                                                               </label>
                                                       </div>
                                                       <div class="checkbox checkbox-primary">
                                                               <input id="proposal" type="checkbox" ';if ($kegiatan[$y]['undangan_peserta'] != '') echo "checked='checked'"; echo '>
                                                               <label for="proposal">
                                                                   Undangan Peserta
                                                               </label>
                                                       </div>
                                                       <div class="checkbox checkbox-primary">
                                                               <input id="proposal" type="checkbox" ';if ($kegiatan[$y]['datahadir_narsum'] != '') echo "checked='checked'"; echo '>
                                                               <label for="proposal">
                                                                   Daftar Hadir Narsum
                                                               </label>
                                                       </div>
                                                       <div class="checkbox checkbox-primary">
                                                               <input id="proposal" type="checkbox" ';if ($kegiatan[$y]['datahadir_peserta'] != '') echo "checked='checked'"; echo '>
                                                               <label for="proposal">
                                                                   Daftar Hadir Peserta
                                                               </label>
                                                       </div>
                                                       <div class="checkbox checkbox-primary">
                                                               <input id="proposal" type="checkbox" ';if ($kegiatan[$y]['bio_narsum'] != '') echo "checked='checked'"; echo '>
                                                               <label for="proposal">
                                                                   Biodata
                                                               </label>
                                                       </div>
                                                       <div class="checkbox checkbox-primary">
                                                               <input id="proposal" type="checkbox" ';if ($kegiatan[$y]['dokumentasi'] != '') echo "checked='checked'"; echo '>
                                                               <label for="proposal">
                                                                   Dokumentasi
                                                               </label>
                                                       </div>
                                                       <div class="checkbox checkbox-primary">
                                                               <input id="proposal" type="checkbox" ';if ($kegiatan[$y]['laporan'] != '') echo "checked='checked'"; echo '>
                                                               <label for="proposal">
                                                                   Laporan
                                                               </label>
                                                       </div>
                                                       <div class="checkbox checkbox-primary">
                                                               <input id="proposal" type="checkbox" ';if ($kegiatan[$y]['kuitansi'] != '') echo "checked='checked'"; echo '>
                                                               <label for="proposal">
                                                                   Kuitansi
                                                               </label>
                                                       </div>
                                                       ';
                                                     }
                                                     elseif($idjenis == '3'){
                                                                       echo '
                                                                       Pra :<br>
                                                                       <div class="checkbox checkbox-primary">
                                                                               <input id="proposal" type="checkbox" ';if ($kegiatan[$y]['req_peserta'] != '') echo "checked='checked'"; echo '>
                                                                               <label for="proposal">
                                                                                   Permohonan Peserta
                                                                               </label>
                                                                       </div>
                                                                       <div class="checkbox checkbox-primary">
                                                                               <input id="proposal" type="checkbox" ';if ($kegiatan[$y]['proposal'] != '') echo "checked='checked'"; echo '>
                                                                               <label for="proposal">
                                                                                   Proposal/KAK
                                                                               </label>
                                                                       </div>
                                                                       <div class="checkbox checkbox-primary">
                                                                               <input id="proposal" type="checkbox" ';if ($kegiatan[$y]['req_st'] != '') echo "checked='checked'"; echo '>
                                                                               <label for="proposal">
                                                                                   Permohonan ST
                                                                               </label>
                                                                       </div>
                                                                       <div class="checkbox checkbox-primary">
                                                                               <input id="proposal" type="checkbox" ';if ($kegiatan[$y]['rab'] != '') echo "checked='checked'"; echo '>
                                                                               <label for="proposal">
                                                                                   RAB
                                                                               </label>
                                                                       </div>


                                                                       Pelaksanaan : <br>
                                                                       <div class="checkbox checkbox-primary">
                                                                               <input id="proposal" type="checkbox" ';if ($kegiatan[$y]['st'] != '') echo "checked='checked'"; echo '>
                                                                               <label for="proposal">
                                                                                   ST
                                                                               </label>
                                                                       </div>
                                                                       <div class="checkbox checkbox-primary">
                                                                               <input id="proposal" type="checkbox" ';if ($kegiatan[$y]['sk_narsum'] != '') echo "checked='checked'"; echo '>
                                                                               <label for="proposal">
                                                                                   SK Narsum dan Panitia
                                                                               </label>
                                                                       </div>
                                                                       <div class="checkbox checkbox-primary">
                                                                               <input id="proposal" type="checkbox" ';if ($kegiatan[$y]['undangan_peserta'] != '') echo "checked='checked'"; echo '>
                                                                               <label for="proposal">
                                                                                   Undangan Peserta
                                                                               </label>
                                                                       </div>
                                                                       <div class="checkbox checkbox-primary">
                                                                               <input id="proposal" type="checkbox" ';if ($kegiatan[$y]['datahadir_narsum'] != '') echo "checked='checked'"; echo '>
                                                                               <label for="proposal">
                                                                                   Daftar Hadir Narsum
                                                                               </label>
                                                                       </div>
                                                                       <div class="checkbox checkbox-primary">
                                                                               <input id="proposal" type="checkbox" ';if ($kegiatan[$y]['datahadir_peserta'] != '') echo "checked='checked'"; echo '>
                                                                               <label for="proposal">
                                                                                   Daftar Hadir Peserta
                                                                               </label>
                                                                       </div>
                                                                       <div class="checkbox checkbox-primary">
                                                                               <input id="proposal" type="checkbox" ';if ($kegiatan[$y]['bio_narsum'] != '') echo "checked='checked'"; echo '>
                                                                               <label for="proposal">
                                                                                   Biodata Narsum
                                                                               </label>
                                                                       </div>
                                                                       <div class="checkbox checkbox-primary">
                                                                               <input id="proposal" type="checkbox" ';if ($kegiatan[$y]['dokumentasi'] != '') echo "checked='checked'"; echo '>
                                                                               <label for="proposal">
                                                                                   Dokumentasi
                                                                               </label>
                                                                       </div>
                                                                       <div class="checkbox checkbox-primary">
                                                                               <input id="proposal" type="checkbox" ';if ($kegiatan[$y]['materi'] != '') echo "checked='checked'"; echo '>
                                                                               <label for="proposal">
                                                                                   Materi Paparan
                                                                               </label>
                                                                       </div>
                                                                       <div class="checkbox checkbox-primary">
                                                                               <input id="proposal" type="checkbox" ';if ($kegiatan[$y]['laporan'] != '') echo "checked='checked'"; echo '>
                                                                               <label for="proposal">
                                                                                   Laporan
                                                                               </label>
                                                                       </div>
                                                                       <div class="checkbox checkbox-primary">
                                                                               <input id="proposal" type="checkbox" ';if ($kegiatan[$y]['kuitansi'] != '') echo "checked='checked'"; echo '>
                                                                               <label for="proposal">
                                                                                   Kuitansi
                                                                               </label>
                                                                       </div>
                                                                       ';
                                                                     }

                                    echo '
                                   </form>
                                   </div>

                                 </div>
                               </div>


                             </div>

                             </div>
                             <div class="modal-footer">
                               <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                         </div>
                       </div>

                     <!-- End Moda Code -->

                      ';}
                      echo '
                </tbody>
          </table>


      </div>

    </div>
    ';
    }?>
  </div>
  <!-- End Panel -->
</div>
   <!-- END ROW TABEL DATA -->
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
Data Tables
================================================ -->
<script src="../assets/js/datatables/datatables.min.js"></script>



<script>
$(document).ready(function() {
    $('#example0').DataTable();
} );
</script>
<script>
$(document).ready(function() {
    $('#example1').DataTable();
} );
</script>
<script>
$(document).ready(function() {
    $('#example2').DataTable();
} );
</script>
</body>
</html>
