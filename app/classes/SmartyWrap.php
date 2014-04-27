<?php

/**
* Smarty継承クラス
*
* @author satoshi kurihara
* @since PHP 5.3
* @version 1.0
*/

class SmartyWrap extends Smarty
{
	public function __construct()
	{
	    parent::__construct();
	    $this->template_dir = VIEW_PATH;
	    $this->compile_dir  = VENDER_PATH."smarty/templates_c/";
	    $this->config_dir   = VENDER_PATH."smarty/configs/";
	    $this->cache_dir    = VENDER_PATH."smarty/cache/";
		$this->left_delimiter = '<!--{';
		$this->right_delimiter = '}-->';
	}
}