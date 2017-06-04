<?php
/**
 * Created by PhpStorm.
 * User: alex1rap
 * Date: 04.06.2017
 * Time: 0:13
 */

namespace app\controllers;

use RAP\web\Controller;

class SiteController extends Controller
{
    public function actionError404()
    {
        return '<h1>Error 404 !</h1>';
    }

    public function actionIndex()
    {
        $param = $this->request()->get('param');
        return '<h1>Hello world!</h1> param = ' . $param;
    }
}