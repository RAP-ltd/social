<?php
/**
 * Created by PhpStorm.
 * User: alex1rap
 * Date: 11.06.2017
 * Time: 18:05
 */

namespace app\controllers;

use RAP\web\Controller;
use app\models\ApiDB;

class ApiController extends Controller
{
    public function actionIndex()
    {
        $api = new ApiDB($this->request->get('method'),$this->request->get('type'));
        if ($res = $api->getResult()) {
            return json_encode(['response' => $res]);
        } else {
            return json_encode([
                'response' => [
                    'error' => [
                        'code' => 1,
                        'descriptions' => 'Unknown error'
                    ]
                ]
            ]);
        }
    }
}