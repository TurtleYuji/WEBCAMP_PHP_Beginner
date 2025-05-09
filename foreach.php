<?php

$array = [
    "key1" => "Hello",
    0 => "1st",
    1 => "2nd",
    "key2" => 3.14
];

//▽foreachで処理する
foreach($array as $k => $v){
    echo "{$k} -> {$v} \n";
}

// ▽foreachで処理(値valueのみを受け取る書き方：keyは受け取らない指示)
echo "\n";
foreach($array as $value){
    echo "{$value} \n";
}

echo "\n";
$colors = ["red", "green", "blue"];

foreach ($colors as $color) {
    echo $color . "\n";
}

echo "\n";
$colors = ["red", "green", "blue"];

foreach ($colors as $index => $color) {
    echo "$index: $color\n";
}

echo "\n";
$user = [
    "name" => "Taro",
    "age" => 25,
    "country" => "Japan"
];

foreach ($user as $key => $value) {
    echo "$key: $value\n";
}