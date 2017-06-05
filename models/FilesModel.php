<?php
/**
 * Created by PhpStorm.
 * User: alex1rap
 * Date: 05.06.2017
 * Time: 22:15
 */

namespace app\models;

class FilesModel
{
    public static function readFrontendFile($file)
    {
        return file_get_contents(WEB_ROOT . $file);
    }
}