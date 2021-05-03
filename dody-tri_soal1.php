<?php

$satu_lusin = 12;
$bolpoin = 1750;
$lembar = 5;
$pecahan_uang = 5000;

$uang_rian = $pecahan_uang * $lembar;
$total_belanja = $satu_lusin * $bolpoin;

$kembali = $uang_rian - $total_belanja;

?>

Satu buah bolpoin seharga Rp <?php echo number_format($bolpoin, 0, ',', '.');?>

Total uang Rian sebanyak Rp <?php echo number_format($uang_rian, 0, ',', '.');?>

Rian membeli <?php echo $satu_lusin;?> buah (satu lusin) bolpoin dengan total belanja sebanyak Rp <?php echo number_format($total_belanja, 0, ',', '.');?>

Sehingga, uang kembalian yang diterima Rian adalah Rp <?php echo number_format($kembali, 0, ',', '.');?>
