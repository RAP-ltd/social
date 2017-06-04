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
        return $this->render('error404');
    }

    public function actionIndex()
    {
        return $this->render('index', ['test' => 123]);
    }
}