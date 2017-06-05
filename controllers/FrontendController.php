<?php
/**
 * Created by PhpStorm.
 * User: alex1rap
 * Date: 05.06.2017
 * Time: 22:18
 */

namespace app\controllers;

use RAP\web\Controller;
use app\models\FilesModel;

class FrontendController extends Controller
{
    public function actionIndex()
    {
        $file = parse_url($_SERVER['REQUEST_URI'])['path'];
        return FilesModel::readFrontendFile($file);
    }
}