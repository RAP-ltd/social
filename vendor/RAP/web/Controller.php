<?php
/**
 * Created by PhpStorm.
 * User: alex1rap
 * Date: 04.06.2017
 * Time: 16:12
 */

namespace RAP\web;

class Controller
{
    protected $request;

    public function __construct($request)
    {
        $this->request = $request;
    }

    public function request()
    {
        return $this->request;
    }
}