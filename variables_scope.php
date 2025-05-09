<?php

$a = 10;
echo "global:a is {$a} \n";

function myfunction()
{
    $b = 999;
    echo "in function:b is {$b}\n";

    echo "in function:a is {$a}\n";
}

myfunction();
echo "global:b is {$b}\n";