<?php
/**
 * Created by PhpStorm.
 * User: alex1rap
 * Date: 04.06.2017
 * Time: 16:12
 */

namespace RAP\web;

use RAP\web\View;

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
    }

    public function request()
    {
        return $this->request;
    }

    protected function renderTemplate($view, $params = [])
    {
        $render = new View($this->viewPath, $this->classPath, $params);
        return $render->renderTemplate($view, $params);
    }

    public function render($view, $params = [])
    {
        return $this->renderTemplate($view, $params);
    }
}