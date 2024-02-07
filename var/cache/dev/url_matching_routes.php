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
        '/voucher' => [
            [['_route' => 'app_voucher_index', '_controller' => 'App\\Controller\\VoucherController::index'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'app_voucher_search', '_controller' => 'App\\Controller\\VoucherController::search'], null, ['GET' => 0, 'POST' => 1], null, true, false, null],
        ],
        '/voucher/form' => [[['_route' => 'app_voucher_new', '_controller' => 'App\\Controller\\VoucherController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/voucher(?'
                    .'|/([^/]++)(?'
                        .'|(*:30)'
                        .'|/edit(*:42)'
                        .'|(*:49)'
                    .')'
                    .'|update/([^/]++)(?'
                        .'|/([^/]++)(*:84)'
                        .'|(*:91)'
                    .')'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:128)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        30 => [[['_route' => 'app_voucher_show', '_controller' => 'App\\Controller\\VoucherController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        42 => [[['_route' => 'app_voucher_edit', '_controller' => 'App\\Controller\\VoucherController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        49 => [[['_route' => 'app_voucher_delete', '_controller' => 'App\\Controller\\VoucherController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        84 => [[['_route' => 'update_status', '_controller' => 'App\\Controller\\VoucherController::updateStatus'], ['status', 'id'], ['POST' => 0, 'GET' => 1], null, false, true, null]],
        91 => [[['_route' => 'dashboard_status', '_controller' => 'App\\Controller\\VoucherController::showShoesByStatus'], ['status'], ['POST' => 0, 'GET' => 1], null, false, true, null]],
        128 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
