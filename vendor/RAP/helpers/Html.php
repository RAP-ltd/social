<?php
/**
 * Created by PhpStorm.
 * User: alex1rap
 * Date: 05.06.2017
 * Time: 1:24
 */

namespace RAP\helpers;

use RAP\helpers\Url;

class Html
{
    public static function img($url, $params = [])
    {
        $string = "<img src='{$url}'";
        foreach ($params as $attribute => $value) {
            $string .= " {$attribute}='{$value}'";
        }
        return $string . '>';
    }

    public static function a($name, $url, $params = [])
    {
        if (is_string($url)) {
            $link = Url::to($url);
        } elseif (is_array($url)) {
            $link = Url::to(array_shift($url), $url);
        }
        $attributes = '';
        foreach ($params as $attribute => $value) {
            $attributes .= " {$attribute}='{$value}'";
        }
        return "<a href='{$link}'$attributes>{$name}</a>";
    }
}