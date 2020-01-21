<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Sistem Pemantauan Kegiatan">
  <meta name="keywords" content="sistem, pemantauan, kegiatan" />
  <title>Daya Serap Anggaran Itjen | Itjen Kemendikbud - Sistem Pemantauan Kegiatan</title>
  <link rel="shortcut icon" href="assets/img/kode-icon.png">
  <!-- ========== Css Files ========== -->
  <link href="assets/css/root.css" rel="stylesheet">

  </head>
  <body>
  <!-- Start Page Loading <div class="loading"><img src="assets/img/loading.gif" alt="loading-img"></div> -->

  <!-- End Page Loading -->
 <!-- //////////////////////////////////////////////////////////////////////////// -->
  <!-- START TOP -->
  <div id="top" class="clearfix" style="background: #9a80b9">

  	<!-- Start App Logo -->
  	<div class="applogo" style="background: #9a80b9">
  		<a href="index.php" img src="assets/img/kode-icon.png" class="logo" >SIMANTAN</a>
  	</div>
  	<!-- End App Logo -->


    <!-- Start Top Right -->
    <ul class="top-right">

	<li class="dropdown link">
      <a href="#" data-toggle="dropdown"><b>Profil</b><span class="caret"></span></a>
        <ul class="dropdown-menu dropdown-menu-list dropdown-menu-right">
          <li><a href="sejarah.php"><i class="fa falist fa-history"></i>Sejarah</a></li>
          <li><a href="profil.php"><i class="fa falist fa-user"></i> Profil</a></li>
		</ul>
    </li>

	<li class="dropdown link">
      <a href="#" data-toggle="dropdown"><b>Informasi Publik</b><span class="caret"></span></a>
        <ul class="dropdown-menu dropdown-menu-list dropdown-menu-right">
          <li><a href="daya.php"><i class="fa falist fa-line-chart"></i>Daya Serap Anggaran Itjen</a></li>
          <li><a href="kebijakan.php"><i class="fa falist fa-bullhorn"></i>Kebijakan Informai Publik</a></li>
        </ul>
    </li>

    <li class="dropdown link">
      <a href="#" data-toggle="dropdown"><b>Publikasi & Dokumentasi</b><span class="caret"></span></a>
          <ul class="dropdown-menu dropdown-menu-list dropdown-menu-right">
		  <li><a href="http://itjen.kemdikbud.go.id/?page_id=2358"><i class="fa falist fa-file-text"></i>Majalah Forwas</a></li>
          <li><a href="http://radio.itjen.kemdikbud.go.id/"><i class="fa falist fa-volume-up"></i>Radio Itjen</a></li>
        </ul>
    </li>

    </ul>
    <!-- End Top Right -->


  </div>

  <!-- END TOP -->
 <!-- //////////////////////////////////////////////////////////////////////////// -->

 <!-- //////////////////////////////////////////////////////////////////////////// -->

 <!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- START CONTENT -->

<div class="content" style="margin-left:0px" >



	<div class="container">
		<div class="row">
  <!-- Start Page Header -->
  <div class="page-header">

    <div class="left">
      <img src="assets/img/kode-icon.png" alt="icon" style="width:90px">
    <h1 class="title">Inspektorat Jenderal Kemendikbud</h1>
      <ol class="breadcrumb">
        <li class="active">Sistem Pemantauan Kegiatan</li>
      </ol>
    </div>
    <!-- Start Page Header Right Div -->
    <div class="right">
      <div class="btn-group" role="group" aria-label="...">
        <a href="login.php" class="btn btn-light" style="background: @color11"><i class="fa fa-user"></i>Login</a>
        <a href="index.php" class="btn btn-light"><i class="fa fa-home"></i> Home</a>
    </div>
    </div>
    <!-- End Page Header Right Div -->


  </div>
  <!-- End Page Header -->
</div>
</div>
 <!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- START CONTAINER -->
<div class="container">
	<div class="row">
	<div class="row presentation" style="background: url(assets/img/daya.jpg); background-size: 100% 100%;
		min-height: 70px;
        min-width: 50px;
        width: 100%;
        height: 50px;
        position: fixed;
        top: 0;
        left: 0;">

		<div class="col-lg-8 col-md-6 titles">
        <span class="icon color11-bg"><i class="fa fa-line-chart"></i></span>
        <h1>Daya Serap Anggaran</h1>
        <h4>Itjen Kementrian Pendidikan dan Kebudayaan</h4>
		</div>

      <div class="col-lg-4 col-md-6">
        <ul class="list-unstyled list">
          <li><i class="fa fa-check"></i>Management Kegiatan</li><li>
          </li><li><i class="fa fa-check"></i>Kalender Kegiatan</li><li>
          </li><li><i class="fa fa-check"></i>Management Keuangan</li><li>
        </li></ul>
      </div>
    </div>


    </div>
    </div>

<div class="container-padding">
  <div class="row">
     <div class="col-md-12">
      <div class="panel">

        <div class="panel-title">
          DAYA SERAP ANGGARAN ITJEN KEMDIKBUD
        </div>

        <div class="panel-body" style="text-align:center">
			<img src="assets/img/daya-serap.png" style="center"></img>




        </div>

      </div>
    </div>

  </div>
</div>

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
<!-- END CONTAINER -->
 <!-- //////////////////////////////////////////////////////////////////////////// -->





<!-- End Content -->
 <!-- //////////////////////////////////////////////////////////////////////////// -->


<!-- ================================================
jQuery Library
================================================ -->
<script type="text/javascript" src="assets/js/jquery.min.js"></script>

<!-- ================================================
Bootstrap Core JavaScript File
================================================ -->
<script src="assets/js/bootstrap/bootstrap.min.js"></script>

<!-- ================================================
Plugin.js - Some Specific JS codes for Plugin Settings
================================================ -->
<script type="text/javascript" src="assets/js/plugins.js"></script>

<!-- ================================================
Data Tables
================================================ -->
<script src="assets/js/datatables/datatables.min.js"></script>


<script>
$(document).ready(function() {
    $('#example0').DataTable();
	$('#example1').DataTable();
	$('#example2').DataTable();
} );
</script>



<script>
$(document).ready(function() {
    var table = $('#example').DataTable({
        "columnDefs": [
            { "visible": false, "targets": 2 }
        ],
        "order": [[ 2, 'asc' ]],
        "displayLength": 25,
        "drawCallback": function ( settings ) {
            var api = this.api();
            var rows = api.rows( {page:'current'} ).nodes();
            var last=null;

            api.column(2, {page:'current'} ).data().each( function ( group, i ) {
                if ( last !== group ) {
                    $(rows).eq( i ).before(
                        '<tr class="group"><td colspan="5">'+group+'</td></tr>'
                    );

                    last = group;
                }
            } );
        }
    } );

    // Order by the grouping
    $('#example tbody').on( 'click', 'tr.group', function () {
        var currentOrder = table.order()[0];
        if ( currentOrder[0] === 2 && currentOrder[1] === 'asc' ) {
            table.order( [ 2, 'desc' ] ).draw();
        }
        else {
            table.order( [ 2, 'asc' ] ).draw();
        }
    } );
} );

</script>
</body>
</html>
