<?php
/**
 * Created by PhpStorm.
 * User: alex1rap
 * Date: 06.06.2017
 * Time: 16:34
 */

namespace RAP\helpers;

use RAP\web\UrlManager;

class Url
{
    public static function to($route, $params = [])
    {
        return UrlManager::createURL($route, $params);
    }
}