<?php
/**
 * Created by PhpStorm.
 * User: alex1rap
 * Date: 03.06.2017
 * Time: 22:46
 */

$dir = require_once __DIR__ . '/../app_dir.php';

define('ROOT', $dir['dir']);

require_once ROOT . '/vendor/autoload.php';

$config = require_once ROOT . '/config/web.php';

(new \RAP\Application($config))->Run();
