<?php
/**
 * Created by PhpStorm.
 * User: alex1rap
 * Date: 09.06.2017
 * Time: 16:01
 */

namespace app\controllers;

use RAP\web\Controller;

class CalendarController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}