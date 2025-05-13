<?php

$recipeFileName = __FILE__;

$recipeFileEntire = file_get_contents($recipeFileName);

var_dump($recipeFileEntire);