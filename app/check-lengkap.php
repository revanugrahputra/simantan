<?php
if($idjenis == '1'){
  if ($reqpeserta != '' && $proposal != '' && $reqst != '' && $reqrusid != '' && $st != '' && $undangan != '' && $narsum != '' && $dokumentasi != '' && $laporan != '' && $kuitansi != ''){
    echo "Sudah Lengkap";
  }else{
    echo "Belum Lengkap";
  }
}elseif ($idjenis == '2'){
  if ($reqpeserta != '' && $proposal != '' && $reqst != '' && $reqrusid != '' && $st != '' && $sknarsum != '' && $undangan != '' && $narsum != '' && $peserta != '' && $biodata != '' && $dokumentasi != '' && $laporan != '' && $kuitansi != ''){
    echo "Sudah Lengkap";
  }else{
    echo "Belum Lengkap";
  }
}elseif ($idjenis == '3'){
  if ($reqpeserta != '' && $proposal != '' && $reqst != '' && $rab != '' && $st != '' && $sknarsum != '' && $undangan != '' && $narsum != '' && $peserta != '' && $biodata != '' && $dokumentasi != '' && $laporan != '' && $kuitansi != '' && $materi != ''){
    echo "Sudah Lengkap";
  }else{
    echo "Belum Lengkap";
  }
}

 ?>
