<?php

$file_readobject = __DIR__ . "/data.csv";

$file_object = new SplFileObject($file_readobject);

$file_object->setFlags( SplFileObject::READ_CSV );

foreach($file_object as $key => $value){
    var_dump($value);
}