<?php
/**
 * Created by PhpStorm.
 * User: alex1rap
 * Date: 05.06.2017
 * Time: 14:52
 */

namespace RAP\web;

class UrlManager
{
    public $uri;
    public $controller;
    public $action;
    public $config;
    public $params;
    public $request;

    public function __construct($params = [])
    {
        foreach ($params as $param => $value) {
            if (property_exists($this, $param)) {
                $this->$param = $value;
            }
        }
    }

    public static function createURL($url, $params = [])
    {
        $rules = APP_CONFIG['routing']['rules'];
        foreach ($rules as $rule => $route) {
            if ($route == $url) {
                if ($newUrl = self::matchRules($rule, $params)) {
                    return $newUrl;
                } else {
                    return "/{$route}?" . http_build_query($params);
                }
            }
        }
        $r = strpos($url, '?') ? '&' : '?';
        return $url . $r . http_build_query($params);
    }

    /**
     * Руками не трогать!
     **/
    protected static function matchRules($rule, $params)
    {
        $p = $rule;
        foreach ($params as $param => $value) {
            if (!$p = preg_replace("~<{$param}:\\\(\w)(\+)?>~i", $value, $p)) {
                return false;
            } else {
            }
        }
        if (!preg_match("~<(\w+):\\\(\w)(\+)?(\*)?>~i", $p)) {
            return '/' . $p;
        }

        return false;
    }

    public static function parseUrl($url, $rule = null)
    {
        /*
         * TODO: Закончить;
         */
        return true;
    }

    function parseNewUrl($url, $rule)
    {
        $route = self::parseUrl($url, $rule);
    }

    /**
     * Руками не трогать!
     **/
    public static function parseURI($uri, $rule = null)
    {
        $config = APP_CONFIG;
        $parameters = [];
        $parameters['uri'] = $uri;
        $rules = $config['routing']['rules'];
        foreach ($rules as $pattern2 => $route) {
            $pattern = preg_replace("%<(\w+)\:\\\(\w\+?)>%i", "(?<$1>(\\\\$2))", $pattern2);
            $pattern = preg_replace("%<controller>%i", "(?<controller>(.*))", $pattern);
            $pattern = preg_replace("%<action>%i", "(?<action>(\w+))", $pattern);
            if (@preg_match("%^(\/)?{$pattern}$%i", $parameters['uri'], $params)) {
                $route = str_replace([
                    '<controller>',
                    '<action>'
                ], [
                    $params['controller'],
                    $params['action']
                ], $route);
                $parameters['uri'] = $route;
                $parameters['params'] = $params;
                if (isset($params['action'])) {
                    $parameters['action'] = $params['action'];
                }
                break;
            }
        }
        $pars = self::parseRoute($parameters['uri']);
        return $pars;
    }

    /**
     * Руками не трогать!
     **/
    protected static function parseRoute($uri)
    {
        if (preg_match("/^\/?(?<controller>([0-9a-z\/]+))\/(?<action>(\w+))\/?$/i", $uri, $matches)) {
            $controllerPath = $matches['controller'];
            $file = explode('/', $controllerPath);
            $controllerClass = 'app\\controllers\\';
            for ($c = 0; $c < count($file); $c++) {
                if ($c == (count($file) - 1)) {
                    $controllerClass .= ucfirst(strtolower($file[$c])) . 'Controller';
                } else {
                    $controllerClass .= strtolower($file[$c]) . '\\';
                }
            }
            $action = 'action' . ucfirst(strtolower($matches['action']));
            $params = [];
            if (class_exists($controllerClass) AND in_array($action, get_class_methods($controllerClass))) {
                $params['controller'] = $controllerClass;
                $params['action'] = $action;
            } else {
                $config = APP_CONFIG['routing']['errors']['error404'];
                $params['controller'] = $config['controller'];
                $params['action'] = $config['action'];
            }
            $res = new self($params);
            return $res;
        }
        $config = APP_CONFIG['routing']['errors']['error404'];
        return new self([
            'controller' => $config['controller'],
            'action' => $config['action']
        ]);
    }

    public function getRoute()
    {
        return [
            'controller' => $this->controller,
            'action' => $this->action
        ];
    }

    /*
     * TODO: Закончить;
     */
}