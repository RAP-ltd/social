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
<body style="background-color: #faf7c7">
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-brand"><a href="/">R.A.P</a></div>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-sm-2 col-xs-4">
            <div class="list-group">
                <a href="#" class="list-group-item">
                    <span class="visible-xs glyphicon glyphicon-apple"></span>
                    <span class="hidden-xs">Item 1</span></a>
                <a href="#" class="list-group-item">Item 2</a>
                <a href="/messages/index" class="list-group-item">Сообщения</a>
                <a href="#" class="list-group-item">Item 4</a>
                <a href="#" class="list-group-item">Item 5</a>
            </div>
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
