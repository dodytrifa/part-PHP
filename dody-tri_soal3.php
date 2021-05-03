<?php

/*
operasional toko ke-68 = 30.100
operasional toko ke-1  = 10.000
selisih biaya keduanya = 20.100

selisih urutan toko 1 dan 68 = 67

maka biaya per cabang = 20.100 / 67 = 300
*/

$total_cabang = 100;
$biaya_toko1 = 10000;

$biaya_per_cabang = 300;
$dicari = 81;

for($i = 1; $i <= 100; $i++){
    if($i != 1) $biaya = $biaya_toko1 += $biaya_per_cabang;
    if($i == $dicari) $hasil = $biaya;
}

echo "Biaya pengeluaran untuk toko kelontong ke-$dicari adalah Rp " . number_format($hasil, 0, ',', '.');

?>