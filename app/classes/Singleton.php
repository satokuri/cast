<?php

/**
* シングルトンクラス
*
* @author satoshikurihara
* @since PHP 5.3
* @version 1.0
*/
abstract class Singleton
{
    protected static $_instance = array();

    protected function __construct()
    {
        /* privateが定石と言いながら抽象化クラスにしてしまったので、
         * protectedがよろしいかと。
         * もちろん継承先でもprotectedで
         */
    }

    public static function getInstance()
    {
        $key = get_called_class();
        if(!isset(self::$_instance[$key]))
        {
            self::$_instance[$key] = new static();
        }
        return self::$_instance[$key];
    }

    final public function __clone()
    {
        throw new Exception('インスタンスの複製は出来ません。');
    }
}