<?php

$main_recipe = __DIR__ . "/file_write_overwrite.txt";

$write_menu = "この内容を新しく追記しました \n";

file_put_contents($main_recipe, $write_menu);