<?php
$menu = ["Makanan", "Minuman", "Parsel"];

foreach($menu as $m) {
    $i = 1;
    echo $m;
    echo "
        $i. Menu $m ke ". $i++. "
        $i. Menu $m ke ". $i++. "
        $i. Menu $m ke ". $i++. "
    ";
}
?>