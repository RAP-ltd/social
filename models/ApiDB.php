<?php
/**
 * Created by PhpStorm.
 * User: alex1rap
 * Date: 11.06.2017
 * Time: 18:33
 */

namespace app\models;

use RAP\db\ActiveRecord;

class ApiDB extends ActiveRecord
{
    protected $method;
    protected $type;

    public function __construct($method, $type = '')
    {
        $this->type = $type;
        if (method_exists($this, $method)) {
            $this->method = $method;
        }
    }

    public function getResult()
    {
        return [];
    }
}