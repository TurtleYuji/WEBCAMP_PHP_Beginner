<?php

define('DEF_INT', 123);
define('DEF_FLOAT', 3.14);
define('DEF_STRING', "string");

var_dump(DEF_INT);
var_dump(DEF_FLOAT);
var_dump(DEF_STRING);

$num_string = "999";
$num_int = 999;

var_dump($num_string);
var_dump($num_int);

define('TEST_FLOAT', 1.23);
define('TEST_FLOAT2', "1.23");

var_dump(TEST_FLOAT);
var_dump(TEST_FLOAT2);