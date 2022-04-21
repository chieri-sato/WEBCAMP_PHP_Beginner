<?php

class MyClass
{
    // オブジェクト定数の宣言
    const HOGE = 'string';
    
    // コンストラクタ
    public function __construct()
    {
        echo "コンストラクタが動いた!! \n";
    }

    // デストラクタ
    public function __destruct()
    {
        echo "デストラクタが動いた!! \n";
    }
}

var_dump( MyClass::HOGE );

$obj = new MyClass();