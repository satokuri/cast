<?php

include(dirname(__FILE__) . '/../app/loader.php');

$view = new SmartyWrap();
$db   = DataBase::getInstance();

$view->display(VIEW_PATH.'ad/frame.html');
