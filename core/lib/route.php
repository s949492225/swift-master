<?php
/**
 * Created by PhpStorm.
 * User: songlintao
 * Date: 2017/8/24
 * Time: 下午3:48
 */

namespace core\lib;

class route
{
    public $ctrl;
    public $action;

    public function __construct()
    {
        $url = $_SERVER['REQUEST_URI'];
        if (isset($url) && $url != '/') {
            $pathArr = explode('/', trim($url, '/'));
            if (isset($pathArr[0])) {
                $this->ctrl = $pathArr[0];
            } else {
                $this->ctrl = 'index';
            }

            if (isset($pathArr[1])) {
                $this->action = $pathArr[1];
            } else {
                $this->action = 'index';
            }

            $count = count($pathArr);
            $i = 2;
            while ($i < $count) {
                if (isset($pathArr[$i + 1])) {
                    $_GET[$pathArr[$i]] = $pathArr[$i + 1];
                    $i += 2;
                } else {
                    break;
                }
            }
        } else {
            $this->ctrl = 'index';
            $this->action = 'index';
        }
    }
}