<?php
session_start();
if(isset($_SESSION['username'])) {
header('location:app/index.php'); }
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
  <link href="assets/css/root.css" rel="stylesheet">
  <style type="text/css">
    body{background: #F5F5F5;}
  </style>
  </head>
  <body>

    <div class="login-form">
      <form action="app/index.php">
        <div class="top">
		<img src="assets/img/kode-icon.png" alt="icon" class="icon">
          <h1>Daftar Administrator</h1>
          <h4>Sistem Pemantauan Kegiatan</h4>
        </div>
        <div class="form-area">
          <div class="group">
            <input type="text" class="form-control" placeholder="Username">
            <i class="fa fa-user"></i>
          </div>
          <div class="group">
            <input type="password" class="form-control" placeholder="Password">
            <i class="fa fa-key"></i>
          </div>
          <div class="group">
            <input type="password" class="form-control" placeholder="Password again">
            <i class="fa fa-key"></i>
          </div>
          <button type="submit" class="btn btn-default btn-block">REGISTER NOW</button>
        </div>
      </form>
      <div class="footer-links row">
        <div class="col-xs-6"><a href="login.php"><i class="fa fa-sign-in"></i> Login</a></div>
        
        <div class="col-xs-6"><a href="index.php"><i class="fa fa-home"></i> SIMANTAN</a></div>
    </div>

</body>
</html>
