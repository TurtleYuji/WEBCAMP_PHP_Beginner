<?php

function myfunction(int $val)
{
    $val *=2;
    echo "in myfunction, val is {$val} \n";
}

$val = 10;
myfunction($val);
echo "val is {$val} \n";