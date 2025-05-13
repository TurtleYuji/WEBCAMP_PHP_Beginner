<?php

class クッキー設計図
{
    private static $焼き方レシピ; // 静的プロパティとして焼き方を保存

    public static function 基本の作り方マニュアル()
    {
        echo "クッキーを作る前に手を洗いましょう。これはインスタンス(クッキー)を焼かなくても実行できるため、静的なマニュアルにしています。 \n";
    }

    public static function set焼き方($baking)
    {
        static::$焼き方レシピ = $baking; // static:: で静的プロパティにアクセス
    }

    public static function get保存方法()
    {
        return static::$焼き方レシピ; // static:: で静的プロパティにアクセス
    }

}

クッキー設計図::基本の作り方マニュアル();
クッキー設計図::set焼き方("オーブンで180度15分焼く");
echo クッキー設計図::get保存方法() , "\n";