<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/reissuevoucher/register' => [[['_route' => 'voucher_app_register', '_controller' => 'App\\Controller\\reissuevoucher\\RegistrationController::register'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reissuevoucher/login' => [[['_route' => 'voucher_app_login', '_controller' => 'App\\Controller\\reissuevoucher\\SecurityController::login'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reissuevoucher/logout' => [[['_route' => 'voucher_app_logout', '_controller' => 'App\\Controller\\reissuevoucher\\SecurityController::logout'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reissuevoucher/voucher' => [[['_route' => 'app_voucher_index', '_controller' => 'App\\Controller\\reissuevoucher\\Voucher_reissueController::index'], null, ['GET' => 0], null, false, false, null]],
        '/reissuevoucher/voucher/form' => [[['_route' => 'app_voucher_new', '_controller' => 'App\\Controller\\reissuevoucher\\Voucher_reissueController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reissuevoucher/voucher/search' => [[['_route' => 'app_voucher_search', '_controller' => 'App\\Controller\\reissuevoucher\\Voucher_reissueController::search'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/trainingvideos/videos' => [[['_route' => 'app_video_index', '_controller' => 'App\\Controller\\trainingvideos\\VideoController::index'], null, ['GET' => 0], null, false, false, null]],
        '/trainingvideos/video' => [[['_route' => 'app_video_search', '_controller' => 'App\\Controller\\trainingvideos\\VideoController::search'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/trainingvideos/video/form' => [[['_route' => 'app_video_new', '_controller' => 'App\\Controller\\trainingvideos\\VideoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/trainingvideos/category' => [[['_route' => 'video_app_category_index', '_controller' => 'App\\Controller\\trainingvideos\\CategoryController::index'], null, ['GET' => 0], null, false, false, null]],
        '/trainingvideos/category/new' => [[['_route' => 'video_app_category_new', '_controller' => 'App\\Controller\\trainingvideos\\CategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/reissuevoucher/voucher/(?'
                    .'|([^/]++)(?'
                        .'|(*:80)'
                        .'|/edit(*:92)'
                        .'|(*:99)'
                    .')'
                    .'|update/([^/]++)(?'
                        .'|/([^/]++)(*:134)'
                        .'|(*:142)'
                    .')'
                .')'
                .'|/trainingvideos/(?'
                    .'|video/(?'
                        .'|update/([^/]++)/([^/]++)(*:204)'
                        .'|([^/]++)(?'
                            .'|/edit(*:228)'
                            .'|(*:236)'
                        .')'
                        .'|update/([^/]++)(*:260)'
                    .')'
                    .'|category/([^/]++)(?'
                        .'|(*:289)'
                        .'|/edit(*:302)'
                        .'|(*:310)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        80 => [[['_route' => 'app_voucher_show', '_controller' => 'App\\Controller\\reissuevoucher\\Voucher_reissueController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        92 => [[['_route' => 'app_voucher_edit', '_controller' => 'App\\Controller\\reissuevoucher\\Voucher_reissueController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        99 => [[['_route' => 'app_voucher_delete', '_controller' => 'App\\Controller\\reissuevoucher\\Voucher_reissueController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        134 => [[['_route' => 'voucher_update_status', '_controller' => 'App\\Controller\\reissuevoucher\\Voucher_reissueController::updateStatus'], ['status', 'id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        142 => [[['_route' => 'voucher_dashboard_status', '_controller' => 'App\\Controller\\reissuevoucher\\Voucher_reissueController::showVoucherReissueByStatus'], ['status'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        204 => [[['_route' => 'video_update_status', '_controller' => 'App\\Controller\\trainingvideos\\VideoController::updateStatus'], ['status', 'id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        228 => [[['_route' => 'app_video_edit', '_controller' => 'App\\Controller\\trainingvideos\\VideoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        236 => [[['_route' => 'app_video_delete', '_controller' => 'App\\Controller\\trainingvideos\\VideoController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        260 => [[['_route' => 'video_dashboard_category', '_controller' => 'App\\Controller\\trainingvideos\\VideoController::showShoesByStatus'], ['category_id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        289 => [[['_route' => 'video_app_category_show', '_controller' => 'App\\Controller\\trainingvideos\\CategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        302 => [[['_route' => 'video_app_category_edit', '_controller' => 'App\\Controller\\trainingvideos\\CategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        310 => [
            [['_route' => 'video_app_category_delete', '_controller' => 'App\\Controller\\trainingvideos\\CategoryController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
