<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'simantan';

$connect = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

if ($connect->connect_errno > 0){
  die('Maaf koneksi gagal: '.$connect->connect_error);
}

 ?>
