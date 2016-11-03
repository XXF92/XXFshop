<?php
header("content-type:text/html;charset=utf-8");// 乱码问题
// 可选
define('APP_DEBUG',true);
// 必须
define('APP_PATH','./Application/');
require './ThinkPHP/ThinkPHP.php';
