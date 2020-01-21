<?php
session_start();
include 'koneksi.php';
$username = mysql_real_escape_string($_POST['username']);
$password = mysql_real_escape_string($_POST['password']);
// query untuk mendapatkan record dari username
$query = "SELECT * FROM admin WHERE username = '$username'";
$hasil = mysql_query($query);
$data = mysql_fetch_array($hasil);
// cek kesesuaian password
if ($password == $data['password'])
{
    // menyimpan username dan level ke dalam session
    $_SESSION['level'] = $data['level'];
    $_SESSION['username'] = $data['username'];
    //Penggunaan Meta Header HTTP
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=app/index.php">';    
	exit;
}
else 
echo "<script>alert('Login Gagal');window.open('login.php','_self');</script>";
?>