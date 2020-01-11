<?php
function rupiah($uang)
{
    $uang = "Rp" . number_format($uang, 0, ",", ".");
    return $uang;
}
function getNamaHari($tgl)
{
    $arrHari = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");
    $namaHari = date("w", strtotime($tgl));
    return $arrHari[$namaHari];
}
