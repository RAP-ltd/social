<?php
/**
 * Created by PhpStorm.
 * User: alex1rap
 * Date: 03.06.2017
 * Time: 22:46
 */

require_once __DIR__ . '/../vendor/autoload.php';

$config = require __DIR__ . '/../config/web.php';

(new \RAP\Application($config))->Run();
