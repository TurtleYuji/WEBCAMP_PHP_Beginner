<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

trait いちごパウダー
{
    public function いちごパウダーのメソッド()
    {
        echo "いちごパウダーを上からかけます \n";
    }
}

class 基本のクッキー
{
    use いちごパウダー;

    public function 基本のクッキーのメソッド()
    {
        echo "基本のクッキーを作ります \n";
    }
}

$obj = new 基本のクッキー();
$obj->基本のクッキーのメソッド();
$obj->いちごパウダーのメソッド();