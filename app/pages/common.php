<?php

// 呼び元のページ名を取得
$pageName = basename($_SERVER['PHP_SELF'],'.php');
// 各ページ情報設定
$page['title']       = $config['title']["{$pageName}"];
$page['h1']          = $config['h1']["{$pageName}"];
$page['h2']          = $config['h2']["{$pageName}"];
$page['description'] = $config['description']["{$pageName}"];
$page['keywords']    = $config['keywords']["{$pageName}"];

$view = new SmartyWrap();

$view->assign('page',$page);
$view->display(VIEW_PATH.$pageName.'.html');