<?php
$server		= "localhost";
$username	= "root";
$password	= "";
$database	= "simantan";
$koneksi 	= mysql_connect($server,$username,$password);

if (! $koneksi){
echo "Gagal Koneksi";
    mysql_error();
}
mysql_select_db($database)
    or die ("Database tidak ada".mysql_error());
?>