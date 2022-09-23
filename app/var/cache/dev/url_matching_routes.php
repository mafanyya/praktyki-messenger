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
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/add_user' => [[['_route' => 'add_user', '_controller' => 'App\\Controller\\AdminController::addUser'], null, null, null, false, false, null]],
        '/remove_user' => [[['_route' => 'remove_user', '_controller' => 'App\\Controller\\AdminController::removeUser'], null, null, null, false, false, null]],
        '/add_hobby' => [[['_route' => 'add_hobby', '_controller' => 'App\\Controller\\AdminController::addHobby'], null, null, null, false, false, null]],
        '/remove_hobby' => [[['_route' => 'remove_hobby', '_controller' => 'App\\Controller\\AdminController::removeHobby'], null, null, null, false, false, null]],
        '/add_country' => [[['_route' => 'add_country', '_controller' => 'App\\Controller\\AdminController::addCountry'], null, null, null, false, false, null]],
        '/remove_country' => [[['_route' => 'remove_country', '_controller' => 'App\\Controller\\AdminController::removeCountry'], null, null, null, false, false, null]],
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
                .'|/remove(?'
                    .'|_(?'
                        .'|user/([^/]++)(*:196)'
                        .'|hobby/([^/]++)(*:218)'
                        .'|country/([^/]++)(*:242)'
                    .')'
                    .'|/([^/]++)/([^/]++)(*:269)'
                .')'
                .'|/friends/([^/]++)(*:295)'
                .'|/add/([^/]++)/([^/]++)(*:325)'
                .'|/page/(?'
                    .'|([^/]++)(*:350)'
                    .'|c(?'
                        .'|hange/([^/]++)(*:376)'
                        .'|ountry/([^/]++)(*:399)'
                    .')'
                    .'|hobbies/([^/]++)(*:424)'
                .')'
                .'|/test/([^/]++)(*:447)'
                .'|/users/([^/]++)(*:470)'
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
        196 => [[['_route' => 'remove_user/{id}', '_controller' => 'App\\Controller\\AdminController::removeUserId'], ['id'], null, null, false, true, null]],
        218 => [[['_route' => 'remove_hobby/{id}', '_controller' => 'App\\Controller\\AdminController::removeHobbyId'], ['id'], null, null, false, true, null]],
        242 => [[['_route' => 'remove_country/{id}', '_controller' => 'App\\Controller\\AdminController::removeCountryId'], ['id'], null, null, false, true, null]],
        269 => [[['_route' => 'remove_friend', '_controller' => 'App\\Controller\\FriendsController::remove'], ['friend_id', 'origin'], null, null, false, true, null]],
        295 => [[['_route' => 'friends{id}', '_controller' => 'App\\Controller\\FriendsController::friends'], ['id'], null, null, false, true, null]],
        325 => [[['_route' => 'add_friend', '_controller' => 'App\\Controller\\FriendsController::add'], ['friend_id', 'origin'], null, null, false, true, null]],
        350 => [[['_route' => '{id}', '_controller' => 'App\\Controller\\PageController::index'], ['id'], null, null, false, true, null]],
        376 => [[['_route' => 'change/{id}', '_controller' => 'App\\Controller\\PageController::change'], ['id'], null, null, false, true, null]],
        399 => [[['_route' => 'country/{id}', '_controller' => 'App\\Controller\\PageController::countryForm'], ['id'], null, null, false, true, null]],
        424 => [[['_route' => 'hobbies/{id}', '_controller' => 'App\\Controller\\PageController::hobbiesForm'], ['id'], null, null, false, true, null]],
        447 => [[['_route' => 'test', '_controller' => 'App\\Controller\\RootController::test'], ['id'], null, null, false, true, null]],
        470 => [
            [['_route' => 'usersByHobby', '_controller' => 'App\\Controller\\UsersController::usersByHobby'], ['hobbyId'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
