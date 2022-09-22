<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/logout' => [[['_route' => 'app_logout'], null, ['GET' => 0], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'root', '_controller' => 'App\\Controller\\RootController::index'], null, null, null, false, false, null]],
        '/success' => [[['_route' => 'success', '_controller' => 'App\\Controller\\RootController::success'], null, null, null, false, false, null]],
        '/users' => [[['_route' => 'allUsers', '_controller' => 'App\\Controller\\UsersController::allUsers'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/friends/([^/]++)(*:186)'
                .'|/add/([^/]++)/([^/]++)(*:216)'
                .'|/remove/([^/]++)/([^/]++)(*:249)'
                .'|/page/(?'
                    .'|([^/]++)(*:274)'
                    .'|c(?'
                        .'|hange/([^/]++)(*:300)'
                        .'|ountry/([^/]++)(*:323)'
                    .')'
                    .'|hobbies/([^/]++)(*:348)'
                .')'
                .'|/test/([^/]++)(*:371)'
                .'|/users/([^/]++)(*:394)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        186 => [[['_route' => 'friends{id}', '_controller' => 'App\\Controller\\FriendsController::friends'], ['id'], null, null, false, true, null]],
        216 => [[['_route' => 'add_friend', '_controller' => 'App\\Controller\\FriendsController::add'], ['friend_id', 'origin'], null, null, false, true, null]],
        249 => [[['_route' => 'remove_friend', '_controller' => 'App\\Controller\\FriendsController::remove'], ['friend_id', 'origin'], null, null, false, true, null]],
        274 => [[['_route' => '{id}', '_controller' => 'App\\Controller\\PageController::index'], ['id'], null, null, false, true, null]],
        300 => [[['_route' => 'change/{id}', '_controller' => 'App\\Controller\\PageController::change'], ['id'], null, null, false, true, null]],
        323 => [[['_route' => 'country/{id}', '_controller' => 'App\\Controller\\PageController::countryForm'], ['id'], null, null, false, true, null]],
        348 => [[['_route' => 'hobbies/{id}', '_controller' => 'App\\Controller\\PageController::hobbiesForm'], ['id'], null, null, false, true, null]],
        371 => [[['_route' => 'test', '_controller' => 'App\\Controller\\RootController::test'], ['id'], null, null, false, true, null]],
        394 => [
            [['_route' => 'usersByHobby', '_controller' => 'App\\Controller\\UsersController::usersByHobby'], ['hobbyId'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
