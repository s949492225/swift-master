<?php
/**
 * Created by PhpStorm.
 * User: songlintao
 * Date: 2017/8/24
 * Time: 下午5:51
 */

namespace core\lib;


class baseModel extends \PDO
{
    public function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=root';
        $username = 'root';
        $passwd = 'root';
        try {
            parent::__construct($dsn, $username, $passwd);
        } catch (\PDOException $e) {
            p($e->getMessage());
        }
    }
}