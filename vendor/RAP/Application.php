<?php
/**
 * Created by PhpStorm.
 * User: alex1rap
 * Date: 03.06.2017
 * Time: 22:59
 */

namespace RAP;

use RAP\web\Routing;
use RAP\web\Request;

class Application
{
    protected $config;
    protected $request;

    public function __construct($config)
    {
        $this->config = $config;
    }

    public function Run()
    {
        $routing = new Routing($this->config['routing']);
        $route = $routing->getRoute();
        $controller = $route['controller'];
        $action = $route['action'];
        $this->request = $routing->getParams();
        echo (new $controller($this->request()))->$action();
    }

    public function request()
    {
        return (new Request($this->request));
    }
}