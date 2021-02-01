<?php
function zet() {
    $a = [1500,2000];
    $b = rand(2, 804);
    $a = array_sum($a);
    
    return $a * rand(1, 6) + round($b / $a) * $b;
}
$price = zet();
$price = number_format($price, 2, ',', ' ');
$price = str_replace(',00', '', $price);

$output = 'Сегодня Вы могли бы заработать '. $price .' руб.';

//return $output;