<?php
/**
 * Created by PhpStorm.
 * User: songlintao
 * Date: 2017/8/24
 * Time: 下午5:08
 */

namespace app\ctrl;

use core\lib\baseCtrl;

class indexCtrl extends baseCtrl
{

    public function index()
    {
        $this->assign("data", "fdjsajfkds");
        $this->display('index.html');
    }

}