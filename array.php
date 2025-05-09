<?php

// 要素1つの配列を作成 = 変数と同じこと
$awk = [ 123 ];
var_dump($awk);

// 要素3つの配列を作成 = 変数にはできないこと
$awk2 = [ 999, "Hello" , 3.14 ];
var_dump($awk2);

// ▽配列内の1つの要素の中身を見たり書き換える

// 要素を指定する
var_dump($awk2[0]);

// 書き換える
$awk2[0] = 654321;
var_dump($awk2[0]);

var_dump($awk2);

// $awkに要素を追加する
$awk[] = 1.41421356;
$awk[] = "string value";
var_dump($awk);
