<?php
/**
 * Created by PhpStorm.
 * User: alex1rap
 * Date: 04.06.2017
 * Time: 19:38
 */

?>
<!DOCTYPE html>
<html>
<head>
    <title><?= $this->title ?></title>
    <meta charset="utf8">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/bootstrap-theme.css">
    <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-2">
            //
        </div>
        <div class="col-sm-10">
            <div class="content">
                <?= $VIEW_CONTENT ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>
