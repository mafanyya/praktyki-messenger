<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'root', '_controller' => 'App\\Controller\\RootController::index'], null, null, null, false, false, null]],
        '/success' => [[['_route' => 'success', '_controller' => 'App\\Controller\\RootController::success'], null, null, null, false, false, null]],
        '/users' => [[['_route' => 'allUsers', '_controller' => 'App\\Controller\\UsersController::allUsers'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/page/([^/]++)(*:21)'
                .'|/test/([^/]++)(*:42)'
                .'|/users/([^/]++)(*:64)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        21 => [[['_route' => '{id}', '_controller' => 'App\\Controller\\PageController::index'], ['id'], null, null, false, true, null]],
        42 => [[['_route' => 'test', '_controller' => 'App\\Controller\\RootController::test'], ['id'], null, null, false, true, null]],
        64 => [
            [['_route' => 'usersByHobby', '_controller' => 'App\\Controller\\UsersController::usersByHobby'], ['hobbyId'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
