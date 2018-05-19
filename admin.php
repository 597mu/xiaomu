<?php


// [ 应用后台入口文件 ]

// 绑定Admin模块到当前入口文件
define('BIND_MODULE','admin');

// 定义应用目录
define('APP_PATH', __DIR__ . '/application/');

// 加载框架引导文件
require __DIR__ . '/thinkphp/start.php';
