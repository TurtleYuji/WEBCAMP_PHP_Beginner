<?php

$expected_data = [
    [1, 2, 3],
    ["aaa", "bbb", "ccc"],
    [",aa", "b \" b", "c \n c"],
];

$file_import = __DIR__ . "/data.csv";

$object_file = new SplFileObject($file_import, "w");

foreach($expected_data as $valueonly){
    $object_file->fputcsv($valueonly);
}