<?php
//禁用所有错误报告
//error_reporting(0);
// 应用入口文件

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

//定义应用名称
define('APP_NAME', 'carinfo');

// 定义应用目录
define('APP_PATH', './carinfo/');
define("SITE_PATH",dirname(__FILE__));
// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG', true);
//ini_set('magic_quotes_gpc', 'Off');
//define('BIND_MODULE','Admin');// 绑定Admin模块到当前入口文件
//define('BUILD_CONTROLLER_LIST','Index,User,Menu');
// 引入ThinkPHP入口文件
require '../jycar.com/ThinkPHP/ThinkPHP.php';
//include载入失败亦会继续运行,require则立即停止
//这里是git测试的注释 aaaa