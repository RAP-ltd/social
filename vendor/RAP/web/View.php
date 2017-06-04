<?php
/**
 * Created by PhpStorm.
 * User: alex1rap
 * Date: 04.06.2017
 * Time: 19:40
 */

namespace RAP\web;

class View
{
    protected $breadcrumbs;
    protected $params;
    protected $title;
    protected $viewPath;
    protected $content;
    protected $config;
    protected $classPath;

    public function __construct($viewPath, $classPath, $params = [])
    {
        $this->params = $params;
        $this->viewPath = $viewPath;
        $this->classPath = $classPath;
        $this->config = include ROOT . '/config/web.php';
    }

    public function renderTemplate($view, $params = [])
    {
        ob_start();
        ob_implicit_flush(false);
        $params['VIEW_CONTENT'] = $this->render($view, $params);
        echo $this->render('../layouts/main', $params);
        return ob_get_clean();
    }

    public function render($view, $params = [])
    {
        extract($params);
        ob_start();
        echo include $this->viewPath . '/' . $this->classPath . '/' . $view . '.php';
        return ob_get_clean();
    }
}