<?php
/**
 * Created by PhpStorm.
 * User: songlintao
 * Date: 2017/8/24
 * Time: 下午6:13
 */

namespace core\lib;


class baseCtrl
{
    public $assign = array();

    public function assign($key, $values)
    {
        $this->assign[$key] = $values;
    }

    public function display($file)
    {
        $filePath = APP . '/view/' . $file;
        if (is_file($filePath)) {
            extract($this->assign);
            include $filePath;
        }

    }
}