<?php /* Smarty version Smarty-3.1.18, created on 2014-04-29 09:20:13
         compiled from "/Applications/MAMP/htdocs/cast//view/ad/frame.html" */ ?>
<?php /*%%SmartyHeaderCode:91790417535f4f7126ab46-81368045%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5981580f9268d399e5d6aa49f34aba4aa73e6d59' => 
    array (
      0 => '/Applications/MAMP/htdocs/cast//view/ad/frame.html',
      1 => 1398756007,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '91790417535f4f7126ab46-81368045',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_535f4f712cbbe1_71727894',
  'variables' => 
  array (
    'config' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535f4f712cbbe1_71727894')) {function content_535f4f712cbbe1_71727894($_smarty_tpl) {?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>店舗様管理画面</title>
<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
<!--[if lt IE 8]>
<script src="https://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE8.js"></script>
<![endif]-->
<!--[if lt IE 9]><script type="text/javascript" src="js/html5shiv.js"></script><![endif]-->
<script src="../js/jquery-2.1.0.min.js"></script>
<script src="../js/ad/my.js"></script>
<link href="../css/font-awesome.css" rel="stylesheet" media="all">
<link href="../css/ad/style.css" rel="stylesheet" media="all">
</head>
<body>

<header>ここにヘッダー</header>

<div id="wrapper">
	<div id="menu">
		<ul>
			<li class="current"><i class="fa fa-dashboard fa-fw"></i><a href="">ダッシュボード</a></li>
			<li><i class="fa fa-heart fa-fw"></i><a href="">項目設定</a></li>
			<li><i class="fa fa-heart fa-fw"></i><a href=""><?php echo $_smarty_tpl->tpl_vars['config']->value['info']['call'];?>
設定</a></li>
			<li><i class="fa fa-heart fa-fw"></i><a href="">ヘッドライン設定</a></li>
			<li><i class="fa fa-heart fa-fw"></i><a href="">新着情報設定</a></li>
			<li><i class="fa fa-heart fa-fw"></i><a href="">メルマガ設定</a></li>
			<li><i class="fa fa-heart fa-fw"></i><a href="">リンク設定</a></li>
		</ul>
	</div>
	<div id="main">
		<div id ="title">ここにページのタイトルが入ります。</div>
		<div id="breadcrumb"><i class="fa fa-home fa-fw"></i><a href="">HOME</a> <i class="fa fa-chevron-right fa-fw"></i> キャスト一覧</div>
		<div id="contents">
			<img src="http://cast/images/ad/bg-menu.png">
			
		</div>
	</div>
</div>

<footer>© Panda Web Concierge</footer>

</body>
</html><?php }} ?>
