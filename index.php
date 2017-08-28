<?php
/**
 * Created by PhpStorm.
 * User: songlintao
 * Date: 2017/8/24
 * Time: 下午12:00
 *
 * 入口文件
 * 1.定义常量
 * 2.加载函数库
 * 3.启动框架
 */
define("SWIFT", realpath('./'));
define("CORE", SWIFT . '/core');
define("APP", SWIFT . '/app');
define("MODULE", 'app');

define('DEBUG', true);

if (DEBUG) {
    ini_set('display_errors', 'On');
} else {
    ini_set('display_errors', 'Off');
}

include CORE . '/common/function.php';
include CORE . '/swift.php';

spl_autoload_register('\core\swift::load');
\core\swift::run();

