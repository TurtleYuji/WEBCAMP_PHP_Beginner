<?php

class MyException extends Exception
{
}

try {
    throw new \MyException("自力で投げた例外");
    throw new TypeError("自力で投げたError");
    throw new Exception("自力で投げたException");
} catch(MyException $e){
    echo "MyException をキャッチしました \n";
    var_dump($e->getMessage());
} catch(\Error $e){
    echo "Error をキャッチしました \n";
    var_dump($e->getMessage());
} catch(\Throwable $e){
    echo "Throwable をキャッチしました \n";
    var_dump($e->getMessage());
}

echo "fin. \n";