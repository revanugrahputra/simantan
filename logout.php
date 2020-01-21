<?php
session_start();
if(session_destroy())
{
//header("location: index.php");
    echo "<script>alert('Terima Kasih telah menggunakan Sistem Pemantauan Kegiatan Itjen Kemdikbud');window.open('index.php','_self');</script>";
}
?>