<?php

// セミコロンで4つの果物が羅列された１文を変数に代入した。
$base_string = "バナナ;リンゴ;ブドウ;マンゴー";
echo "元の文字列 \n";
var_dump($base_string);
echo "\n";

// 上記の１文章を分割し配列とみなさせる
// セミコロンで分割して配列にするようexplodeで指示した。
$exploded_array = explode(";", $base_string);
echo "explodeした配列 \n";
var_dump($exploded_array);

//配列を文字列にするようimplodeで指示する。
$imploded_string = implode("/", $exploded_array);
echo "implodeで配列を文字列化した \n";
var_dump($imploded_string);