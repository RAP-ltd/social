<?php
/**
 * Created by PhpStorm.
 * User: alex1rap
 * Date: 05.06.2017
 * Time: 21:14
 */

namespace app\controllers;

use RAP\web\Controller;

class MessagesController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index', ['user_id' => 1]);
    }
}