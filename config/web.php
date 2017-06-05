<?php
/**
 * Created by PhpStorm.
 * User: alex1rap
 * Date: 03.06.2017
 * Time: 23:46
 */

return [
    'language' => 'ru-RU',
    'routing' => [
        'errors' => [
            'error404' => [
                'controller' => 'app\\controllers\\SiteController',
                'action' => 'actionError404'
            ]
        ],
        'rules' => [
            "css/(.*)" => "frontend/index",
            "fonts/(.*)" => "frontend/index",
            "js/(.*)" => "frontend/index",
            "site/<param:\w+>/<user_id:\d+>" => "site/index",
            "id<user_id:\d+>" => "site/index",
            "messages" => "messages/index",
            "<controller>/<action>" => "<controller>/<action>",
            "<action>" => "site/<action>",
            "<controller:\w+>" => "<controller>/index",
            "" => "site/index"
        ],
    ],
    'defaultView' => 'layouts/main'
];