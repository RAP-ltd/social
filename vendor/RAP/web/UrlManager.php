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
    protected $rules;
    protected $params;

    public function __construct()
    {
        $this->rules = APP_CONFIG['routing']['rules'];
    }

    public function createURL($url, $params = [])
    {
        var_dump(['url' => $url, 'params' => $params]);
        foreach ($this->rules as $rule => $route) {
            if ($route == $url) {
                if ($newUrl = $this->matchRules($rule, $params)) {
                    return $newUrl;
                } else {
                    return "/{$route}?" . http_build_query($params);
                }
            }
        }
        $r = strpos($url, '?') ? '&' : '?';
        return $url . $r . http_build_query($params);
    }

    public function matchRules($rule, $params)
    {
        $p = $rule;
        foreach ($params as $param => $value) {
            var_dump(['param' => $param]);
            if (!$p = preg_replace("~<{$param}:\\\(\w)(\+)?>~i", $value, $p)) {
                return false;
            } else {
                var_dump([
                    'p' => $p,
                    'rule' => $rule,
                    'param' => $param,
                    'value' => $value
                ]);
            }
        }
        if (!preg_match("~<(\w+):\\\(\w)(\+)?(\*)?>~i", $p)) {
            return $p;
        }
        return false;
    }

    /*
     * TODO: Закончить;
     */
}