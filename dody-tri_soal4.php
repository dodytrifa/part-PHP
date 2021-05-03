<?php

function bil($i) {
    if ($i % 2 == 0) return "$i. Bilangan Genap";
    else return "$i. Bilangan Ganjil";
}

$i = 1;
?>

<?php echo bil($i++); ?>

<?php echo bil($i++); ?>

<?php echo bil($i++); ?>

<?php echo bil($i++); ?>

<?php echo bil($i++); ?>

<?php echo bil($i++); ?>

<?php echo bil($i++); ?>

<?php echo bil($i++); ?>

<?php echo bil($i++); ?>

<?php echo bil($i++); ?>
