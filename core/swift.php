<?php

/**
 * Created by PhpStorm.
 * User: songlintao
 * Date: 2017/8/24
 * Time: 下午3:34
 */

namespace core;

use core\lib\route;

class swift
{
    public static $clazzMap = array();

    public static function run()
    {
        $route = new route();
        $ctrlClazz = $route->ctrl;
        $action = $route->action;

        $ctrlFile = APP . '/ctrl/' . $ctrlClazz . 'Ctrl.php';
        $ctrlClazz = MODULE . '\ctrl\\' . $ctrlClazz . 'Ctrl';

        if (is_file($ctrlFile)) {
            include $ctrlFile;
            $ctrl = new $ctrlClazz();
            if (is_callable(array($ctrl, $action))) {
                $ctrl->$action();
            } else {
                p('找不到控制器：' . $ctrlClazz . '中的方法->' . $action);
            }
        } else {
            p('找不到控制器：' . $ctrlClazz);
        }

    }

    /**
     * 自动加载类
     * @param $clazz string $clazz=\core\route;
     * @return bool
     */
    public static function load($clazz)
    {
        //        $clazz=core\route;
        //        new \core\route();
        //        SWIFT.'/core/route.php';
        if (isset($clazzMap[$clazz])) {
            return true;
        } else {
            $clazz = str_replace("\\", "/", $clazz);
            $file = SWIFT . '/' . $clazz . ".php";
            if (is_file($file)) {
                include $file;
                self::$clazzMap[$clazz] = $clazz;
                return true;
            } else {
                return false;
            }
        }
    }

}