<?php
/**
 * Created by PhpStorm.
 * User: alex1rap
 * Date: 04.06.2017
 * Time: 0:13
 */

namespace app\controllers;

class SiteController
{
    public function actionError404()
    {
        return 'Error 404 !';
    }

    public function actionIndex()
    {
        return 'Hello world!';
    }
}