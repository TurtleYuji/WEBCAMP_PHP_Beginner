<?php

$box = [0,1];

foreach($box as $value){
    echo "{$value} \n";
}

$sum = 1;
while ($sum <=10000){
    $prepre = $box[count($box) - 2]; 
    $pre = $box[count($box) - 1];

    $sum = $prepre + $pre;
    $box[] = $sum;
    echo "{$sum} \n";
}