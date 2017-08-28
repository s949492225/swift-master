<?php
/**
 * Created by PhpStorm.
 * User: songlintao
 * Date: 2017/8/24
 * Time: 下午2:59
 * @param $var
 */
function p($var)
{
    if (is_bool($var)) {
        var_dump($var);
    } else if (is_null($var)) {
        var_dump(null);
    } else {
        echo '<pre style="border: solid red;background-color: aquamarine">' . print_r($var, true) . '</pre>';
    }
}