<?php
require('../config/dbconnect.php');
require_once('../assets/libraries/crud/MysqliDb.php');
$db = new MysqliDb ($connect);
if(isset($_POST['submit'])){
  $data = Array ("id_dokumen" => $_POST['iddokumen'],
                 "id_induk" => $_POST['idinduk'],
                 "id_wilayah" => $_POST['wilayah'],
                 "id_jenis" => $_POST['jenis'],
                 "nama_kegiatan" => $_POST['nmkegiatan'],
                 "frekuensi" => $_POST['frekuensi'],
                 "jumlah_peserta" => $_POST['jmlpeserta'],
                 "realisasi" => $_POST['realisasi'],
                 "tgl_mulai" => $_POST['tglmulai'],
                 "tgl_selesai" => $_POST['tglselesai'],
                 "lokasi_kegiatan" => $_POST['tempat'],
                 "req_peserta" => $_POST['reqpeserta'],
                 "proposal" => $_POST['proposal'],
                 "req_st" => $_POST['reqst'],
                 "req_rusid" => $_POST['reqrusid'],
                 "rab" => $_POST['rab'],
                 "st" => $_POST['st'],
                 "sk_narsum" => $_POST['sknarsum'],
                 "sk_panitia" => $_POST['sknarsum'],
                 "undangan_peserta" => $_POST['undangan'],
                 "datahadir_peserta" => $_POST['peserta'],
                 "datahadir_narsum" => $_POST['narsum'],
                 "bio_narsum" => $_POST['biodata'],
                 "kuitansi" => $_POST['kuitansi'],
                 "dokumentasi" => $_POST['dokumentasi'],
                 "materi" => $_POST['materi'],
                 "laporan" => $_POST['laporan'],
                 "anggaran" => str_replace('.','',$_POST['anggaran'])
               );
      $input = $db->insert ('kegiatan', $data);
      if ($input){
          header('location:manage-form.php');
      }
    }
?>
