<?php

/**
* 特殊文字を HTML エンティティに変換する
*
* @param string $str
* @return string 変換後文字列
*
*/
function h($str)
{
	return htmlspecialchars($string,ENT_QUOTES);
}

/**
* コメントで変数を出力する
*
* @param mixed $val
*/
function cpr($val){
    echo "<!-- [DEBUG START] ".print_r($val,1)." [DEBUG END]-->";
}