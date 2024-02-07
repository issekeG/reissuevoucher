<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'app_voucher_index' => [[], ['_controller' => 'App\\Controller\\VoucherController::index'], [], [['text', '/voucher/']], [], [], []],
    'app_voucher_new' => [[], ['_controller' => 'App\\Controller\\VoucherController::new'], [], [['text', '/voucher/form']], [], [], []],
    'app_voucher_search' => [[], ['_controller' => 'App\\Controller\\VoucherController::search'], [], [['text', '/voucher/']], [], [], []],
    'app_voucher_show' => [['id'], ['_controller' => 'App\\Controller\\VoucherController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/voucher']], [], [], []],
    'app_voucher_edit' => [['id'], ['_controller' => 'App\\Controller\\VoucherController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/voucher']], [], [], []],
    'app_voucher_delete' => [['id'], ['_controller' => 'App\\Controller\\VoucherController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/voucher']], [], [], []],
    'update_status' => [['status', 'id'], ['_controller' => 'App\\Controller\\VoucherController::updateStatus'], [], [['variable', '/', '[^/]++', 'id', true], ['variable', '/', '[^/]++', 'status', true], ['text', '/voucherupdate']], [], [], []],
    'dashboard_status' => [['status'], ['_controller' => 'App\\Controller\\VoucherController::showShoesByStatus'], [], [['variable', '/', '[^/]++', 'status', true], ['text', '/voucherupdate']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
];
