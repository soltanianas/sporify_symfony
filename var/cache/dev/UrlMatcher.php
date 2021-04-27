<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/events' => [[['_route' => 'admin_events', '_controller' => 'App\\Controller\\EventController::eventList'], null, null, null, false, false, null]],
        '/admin/tri-event' => [[['_route' => 'tri_event', '_controller' => 'App\\Controller\\EventController::triEvent'], null, null, null, false, false, null]],
        '/admin/search' => [[['_route' => 'search', '_controller' => 'App\\Controller\\EventController::search'], null, null, null, false, false, null]],
        '/event/liste-event-front' => [[['_route' => 'liste_event_front', '_controller' => 'App\\Controller\\EventController::listeEventFront'], null, null, null, false, false, null]],
        '/event' => [[['_route' => 'get_event', '_controller' => 'App\\Controller\\EventController::getEvent'], null, null, null, false, false, null]],
        '/cart' => [[['_route' => 'cart', '_controller' => 'App\\Controller\\OrderController::cart'], null, null, null, false, false, null]],
        '/checkout' => [[['_route' => 'checkout', '_controller' => 'App\\Controller\\OrderController::checkout'], null, null, null, false, false, null]],
        '/order/store' => [[['_route' => 'order_store', '_controller' => 'App\\Controller\\OrderController::order_store'], null, null, null, false, false, null]],
        '/admin/order' => [[['_route' => 'admin_order', '_controller' => 'App\\Controller\\OrderController::admin_index'], null, null, null, false, false, null]],
        '/admin/order/create' => [[['_route' => 'admin_order_create', '_controller' => 'App\\Controller\\OrderController::admin_create'], null, null, null, false, false, null]],
        '/admin/order/store' => [[['_route' => 'admin_order_store', '_controller' => 'App\\Controller\\OrderController::admin_store'], null, null, null, false, false, null]],
        '/admin/order/search' => [[['_route' => 'admin_order_search', '_controller' => 'App\\Controller\\OrderController::admin_search'], null, null, null, false, false, null]],
        '/product' => [[['_route' => 'product', '_controller' => 'App\\Controller\\ProductController::index'], null, null, null, false, false, null]],
        '/product/search' => [[['_route' => 'product_search', '_controller' => 'App\\Controller\\ProductController::search'], null, null, null, false, false, null]],
        '/admin/product' => [[['_route' => 'admin_product', '_controller' => 'App\\Controller\\ProductController::admin_index'], null, null, null, false, false, null]],
        '/admin/product/create' => [[['_route' => 'admin_product_create', '_controller' => 'App\\Controller\\ProductController::admin_create'], null, null, null, false, false, null]],
        '/admin/product/store' => [[['_route' => 'admin_product_store', '_controller' => 'App\\Controller\\ProductController::admin_store'], null, null, null, false, false, null]],
        '/admin/product/search' => [[['_route' => 'admin_product_search', '_controller' => 'App\\Controller\\ProductController::admin_search'], null, null, null, false, false, null]],
        '/admin/promos' => [[['_route' => 'admin_promos', '_controller' => 'App\\Controller\\PromoController::promoList'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/signin' => [[['_route' => 'signin', '_controller' => 'App\\Controller\\UserController::signin'], null, null, null, false, false, null]],
        '/signup' => [[['_route' => 'signup', '_controller' => 'App\\Controller\\UserController::signup'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\UserController::logout'], null, null, null, false, false, null]],
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
                .'|/admin/(?'
                    .'|update\\-(?'
                        .'|event/([^/]++)(*:204)'
                        .'|promo/([^/]++)(*:226)'
                    .')'
                    .'|delete\\-(?'
                        .'|event/([^/]++)(*:260)'
                        .'|promo/([^/]++)(*:282)'
                    .')'
                    .'|order/(?'
                        .'|d(?'
                            .'|e(?'
                                .'|tail/([^/]++)(*:321)'
                                .'|lete/([^/]++)(*:342)'
                            .')'
                            .'|ownload/([^/]++)(*:367)'
                        .')'
                        .'|edit/([^/]++)(*:389)'
                        .'|update/([^/]++)(*:412)'
                    .')'
                    .'|product/(?'
                        .'|edit/([^/]++)(*:445)'
                        .'|update/([^/]++)(*:468)'
                        .'|delete/([^/]++)(*:491)'
                    .')'
                .')'
                .'|/cart/(?'
                    .'|add/([^/]++)(*:522)'
                    .'|update/([^/]++)(*:545)'
                .')'
                .'|/product/(?'
                    .'|detail/([^/]++)(*:581)'
                    .'|filter/([^/]++)(*:604)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        204 => [[['_route' => 'update_event', '_controller' => 'App\\Controller\\EventController::update'], ['id'], null, null, false, true, null]],
        226 => [[['_route' => 'update_promo', '_controller' => 'App\\Controller\\PromoController::update'], ['id'], null, null, false, true, null]],
        260 => [[['_route' => 'delete_event', '_controller' => 'App\\Controller\\EventController::delete'], ['id'], null, null, false, true, null]],
        282 => [[['_route' => 'delete_promo', '_controller' => 'App\\Controller\\PromoController::delete'], ['id'], null, null, false, true, null]],
        321 => [[['_route' => 'admin_order_detail', '_controller' => 'App\\Controller\\OrderController::admin_detail'], ['id'], null, null, false, true, null]],
        342 => [[['_route' => 'admin_order_delete', '_controller' => 'App\\Controller\\OrderController::admin_delete'], ['id'], null, null, false, true, null]],
        367 => [[['_route' => 'admin_order_download', '_controller' => 'App\\Controller\\OrderController::admin_download'], ['id'], null, null, false, true, null]],
        389 => [[['_route' => 'admin_order_edit', '_controller' => 'App\\Controller\\OrderController::admin_edit'], ['id'], null, null, false, true, null]],
        412 => [[['_route' => 'admin_order_update', '_controller' => 'App\\Controller\\OrderController::admin_update'], ['id'], null, null, false, true, null]],
        445 => [[['_route' => 'admin_product_edit', '_controller' => 'App\\Controller\\ProductController::admin_edit'], ['id'], null, null, false, true, null]],
        468 => [[['_route' => 'admin_product_update', '_controller' => 'App\\Controller\\ProductController::admin_update'], ['id'], null, null, false, true, null]],
        491 => [[['_route' => 'admin_product_delete', '_controller' => 'App\\Controller\\ProductController::admin_delete'], ['id'], null, null, false, true, null]],
        522 => [[['_route' => 'cart_add', '_controller' => 'App\\Controller\\OrderController::cart_add'], ['id'], null, null, false, true, null]],
        545 => [[['_route' => 'cart_update', '_controller' => 'App\\Controller\\OrderController::cart_update'], ['id'], null, null, false, true, null]],
        581 => [[['_route' => 'product_detail', '_controller' => 'App\\Controller\\ProductController::detail'], ['id'], null, null, false, true, null]],
        604 => [
            [['_route' => 'product_filter_by_type', '_controller' => 'App\\Controller\\ProductController::filter_by_type'], ['type'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
