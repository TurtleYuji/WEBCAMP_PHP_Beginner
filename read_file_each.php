<?php

$recipeFileName = __FILE__;

$recipeFileObject = new SplFileObject($recipeFileName);

foreach($recipeFileObject as $linenumber => $recipeLine){
    echo "{$linenumber}: $recipeLine";
}