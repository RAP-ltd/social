<?php
/**
 * Created by PhpStorm.
 * User: alex1rap
 * Date: 05.06.2017
 * Time: 1:24
 */

namespace RAP\helpers;

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
}