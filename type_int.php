<?php

$i = 123;
var_dump($i);

var_dump(PHP_INT_MAX);
var_dump(PHP_INT_MIN);

$over_max = PHP_INT_MAX + 1;
var_dump($over_max);

$over_min = PHP_INT_MIN - 1;
var_dump($over_min);
