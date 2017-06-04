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
    protected $classPath;
    protected $request;
    protected $viewPath;

    public function __construct($request)
    {
        $this->request = $request;
        $this->classPath = strtolower(preg_replace('%^app\\\controllers\\\(.*)Controller$%i', '$1', get_class($this)));
        $this->viewPath = ROOT . '/views';
        echo $this->viewPath;
    }

    public function request()
    {
        return $this->request;
    }

    public function render($view, $params = [])
    {
        extract($params);
        ob_start();
        $render = include $this->viewPath . '/' . $this->classPath . '/' . $view . '.php';
        ob_clean();
        return $render;
    }
}