<?php

function numToDouble(int|float $i): int|float
{
    $戻り値 = $i * 2;
    return $戻り値;
}

$実験 = numToDouble(10);
echo "10 を2倍にしたら{$実験}になった \n";

echo "\n";

//

function AddNumbers(int|float $a,int|float $b): int|float
{
    $result = $a + $b;
    return $result;
}

$actual = AddNumbers(6,9);
echo "6+9を足したら{$actual}になりました。\n";
