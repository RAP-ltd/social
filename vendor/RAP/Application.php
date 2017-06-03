<?php
/**
 * Created by PhpStorm.
 * User: alex1rap
 * Date: 03.06.2017
 * Time: 22:59
 */

namespace RAP;

use RAP\web\Routing;

class Application
{
    protected $config;

    public function __construct($config)
    {
        $this->config = $config;
    }

    public function Run()
    {
        $route = (new Routing($this->config['routing']))->getRoute();
        $controller = $route['controller'];
        $action = $route['action'];
        echo (new $controller)->$action();
    }
}