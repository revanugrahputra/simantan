<?php
// memulai session
session_start();
error_reporting(0);
if (isset($_SESSION['level']))
{
  // jika level admin
  if ($_SESSION['level'] == "admin")
   { 
    header('location:app/index.php'); 
   }
   // jika kondisi level user maka akan diarahkan ke halaman lain
   else if ($_SESSION['level'] == "user")
   {
       header('location:index.php');
   }
}
else {
	
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
  <link href="assets/css/root.css" rel="stylesheet">
  <style type="text/css">
    body{background: #F5F5F5;}
  </style>
  </head>
  <body>

    <div class="login-form">
      <form action="loginperiksa.php" method="post" name="form1" target="_self">
        <div class="top">
          <img src="assets/img/kode-icon.png" alt="icon" class="icon">
          <h1>Itjen Kemendikbud</h1>
          <h4>Sistem Pemantauan Kegiatan</h4>
        </div>
        <div class="form-area">
          <div class="group">
            <input name="username" type="text" class="form-control" placeholder="Username" required>
            <i class="fa fa-user"></i>
          </div>
          <div class="group">
            <input name="password" type="password" class="form-control" placeholder="Password" required>
            <i class="fa fa-key"></i>
          </div>
          <div class="checkbox checkbox-primary">
            <input id="checkbox101" type="checkbox" checked>
            <label for="checkbox101"> Remember Me</label>
          </div>
          <button name="login"  type="submit" value="Login" class="btn btn-default btn-block">LOGIN</button>
        </div>
      </form>
      <div class="footer-links row">
        <div class="col-xs-6"><a href="index.php"><i class="fa fa-home"></i> SIMANTAN</a></div>
        <div class="col-xs-6 text-right"><a href="#"><i class="fa fa-user"></i> Website Itjen</a></div>
      </div>
    </div>

</body>
</html>
