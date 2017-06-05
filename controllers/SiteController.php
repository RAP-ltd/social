<?php
/**
 * Created by PhpStorm.
 * User: alex1rap
 * Date: 04.06.2017
 * Time: 0:13
 */

namespace app\controllers;

use RAP\web\Controller;
use RAP\helpers\Calculator;

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

    public function actionCalculate()
    {
        extract($_POST);
        $matrix = [
            [$X11, $X12, $X13],
            [$X21, $X22, $X23],
            [$X31, $X32, $X33]
        ];
        $row = [
            [$R1],
            [$R2],
            [$R3]
        ];
        $X = Calculator::getX3($matrix, $row);
        return json_encode([
            'response' =>
                $X
        ]);
    }
}