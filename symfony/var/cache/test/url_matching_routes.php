<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/reader' => [[['_route' => 'app_reader', '_controller' => 'App\\Controller\\ReaderController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/reader/([^/]++)(*:23)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        23 => [
            [['_route' => 'app_reader_get', '_controller' => 'App\\Controller\\ReaderController::getReader'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
