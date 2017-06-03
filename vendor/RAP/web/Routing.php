<?php
/**
 * Created by PhpStorm.
 * User: alex1rap
 * Date: 03.06.2017
 * Time: 23:19
 */

namespace RAP\web;

class Routing
{
    protected $uri;
    protected $controller;
    protected $action;
    protected $config;

    public function __construct($config)
    {
        $this->config = $config;
        $uri_length = strpos($_SERVER['REQUEST_URI'], '?');
        $this->uri = substr($_SERVER['REQUEST_URI'], $uri_length);
        $this->parseURI();
    }

    protected function parseURI()
    {
        if (preg_match("/^\/?(?<controller>([0-9a-z\/]+))\/(?<action>(\w+))\/?$/i", $this->uri, $matches)) {
            $controllerPath = $matches['controller'];
            $file = explode('/', $controllerPath);
            $controllerClass = 'app\\controllers\\';
            for ($c = 0; $c < count($file); $c++) {
                if ($c == (count($file) - 1))
                {
                    $controllerClass .= ucfirst(strtolower($file[$c])) . 'Controller';
                } else {
                    $controllerClass .= strtolower($file[$c]) . '\\';
                }
            }
            $action = 'action' . ucfirst(strtolower($matches['action']));
            if (class_exists($controllerClass) AND in_array($action, get_class_methods($controllerClass))) {
                $this->controller = $controllerClass;
                $this->action = $action;
            } else {
                $config = $this->config['errors']['error404'];
                $this->controller = $config['controller'];
                $this->action = $config['action'];
            }
        }
    }

    public function getRoute()
    {
        return [
            'controller' => $this->controller,
            'action' => $this->action
        ];
    }
}