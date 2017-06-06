<?php
/**
 * Created by PhpStorm.
 * User: alex1rap
 * Date: 03.06.2017
 * Time: 23:19
 */

namespace RAP\web;

use RAP\web\UrlManager;

class Routing
{
    protected $params;
    protected $route;

    public function __construct($config)
    {
        $uri = parse_url($_SERVER['REQUEST_URI'])['path'];
        $this->route = UrlManager::parseURI($uri)->getRoute();
    }

    public function getRoute()
    {
        return $this->route;
    }

    public function getParams()
    {
        return $this->params;
    }
}