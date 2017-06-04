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
            '' => 'site/index'
        ]
    ]
];