<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [
            [['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null],
            [['_route' => 'login_redirect', 'route' => 'login', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController'], null, null, null, false, false, null],
        ],
        '/post' => [[['_route' => 'post', '_controller' => 'App\\Controller\\PostController::new'], null, null, null, false, false, null]],
        '/user/edit' => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], null, null, null, false, false, null]],
        '/user/register' => [[['_route' => 'user_register', '_controller' => 'App\\Controller\\UserProfileController::register'], null, null, null, false, false, null]],
        '/login' => [
            [['_route' => 'app_login', '_controller' => 'App\\Controller\\loginControlleur::login'], null, null, null, false, false, null],
            [['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null],
        ],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\loginControlleur::logout'], null, null, null, false, false, null]],
        '/user/home' => [[['_route' => 'app_user_home', '_controller' => 'App\\Controller\\loginControlleur::userHome'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\loginControlleur::register'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/post/new' => [[['_route' => 'new_post', '_controller' => 'App\\Controller\\PostController::new'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/user/(?'
                    .'|([^/]++)/follow(*:31)'
                    .'|profile/([^/]++)(*:54)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:93)'
                    .'|wdt/([^/]++)(*:112)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:158)'
                            .'|router(*:172)'
                            .'|exception(?'
                                .'|(*:192)'
                                .'|\\.css(*:205)'
                            .')'
                        .')'
                        .'|(*:215)'
                    .')'
                .')'
                .'|/post/([^/]++)/(?'
                    .'|like(*:247)'
                    .'|repost(*:261)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        31 => [[['_route' => 'user_follow', '_controller' => 'App\\Controller\\UserController::follow'], ['id'], ['POST' => 0], null, false, false, null]],
        54 => [[['_route' => 'user_profile', '_controller' => 'App\\Controller\\UserProfileController::index'], ['id'], null, null, false, true, null]],
        93 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        112 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        158 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        172 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        192 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        205 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        215 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        247 => [[['_route' => 'post_like', '_controller' => 'App\\Controller\\PostController::like'], ['id'], ['POST' => 0], null, false, false, null]],
        261 => [
            [['_route' => 'post_repost', '_controller' => 'App\\Controller\\PostController::repost'], ['id'], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
