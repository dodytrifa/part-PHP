<?php

$pecahan_limaribu = 4;
$pecahan_sepuluhribu = 3;
$pecahan_duapuluhribu = 5;

$uang_setyo = (5000 * $pecahan_limaribu) + (10000 * $pecahan_sepuluhribu) + (20000 * $pecahan_duapuluhribu);
$harga_mainan = 55000;

$kembalian = $uang_setyo - $harga_mainan;

$kembalian_duapuluhribu = intdiv($kembalian, 20000);
$sisa = $kembalian % 20000;

$kembalian_sepuluhribu = intdiv($sisa, 10000);
$sisa = ($kembalian - ($kembalian_sepuluhribu * 10000)) % 10000;

$kembalian_limaribu = intdiv($sisa, 5000);

?>

Jumlah uang Setyo sebanyak Rp <?php echo number_format($uang_setyo, 0, ',', '.');?>

Harga mainan yang dibeli seharga Rp <?php echo number_format($harga_mainan, 0, ',', '.');?>

Setelah dibelanjakan mainan, uang sisa milik Setyo Rp <?php echo number_format($kembalian, 0, ',', '.');?>,
dengan pecahan:

<?php echo $kembalian_limaribu . " lembar lima ribuan";?>

<?php echo $kembalian_sepuluhribu . " lembar sepuluh ribuan";?>

<?php echo $kembalian_duapuluhribu . " lembar dua puluh ribuan";?>