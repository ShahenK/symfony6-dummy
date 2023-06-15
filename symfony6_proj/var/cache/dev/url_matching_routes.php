<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/blog' => [[['_route' => 'blog', '_controller' => 'App\\Controller\\TestController::index'], null, null, null, false, false, null]],
        '/blog/create' => [[['_route' => 'create', '_controller' => 'App\\Controller\\TestController::create'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/blog/(?'
                    .'|edit/([^/]++)(*:64)'
                    .'|delete/([^/]++)(*:86)'
                    .'|([^/]++)(*:101)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        64 => [[['_route' => 'edit', '_controller' => 'App\\Controller\\TestController::edit'], ['id'], null, null, false, true, null]],
        86 => [[['_route' => 'delete', '_controller' => 'App\\Controller\\TestController::delete'], ['id'], ['GET' => 0, 'DELETE' => 1], null, false, true, null]],
        101 => [
            [['_route' => 'comment', '_controller' => 'App\\Controller\\TestController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
