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
        '/offre' => [[['_route' => 'app_offre', '_controller' => 'App\\Controller\\OffreController::index3'], null, null, null, false, false, null]],
        '/offre/fnew' => [[['_route' => 'app_offre_fnew', '_controller' => 'App\\Controller\\OffreController::fnew'], null, null, null, false, false, null]],
        '/offreback' => [[['_route' => 'app_offreback', '_controller' => 'App\\Controller\\OffreController::index7'], null, null, null, false, false, null]],
        '/offreback/fnew' => [[['_route' => 'app_offreback_fnew', '_controller' => 'App\\Controller\\OffreController::fnew2'], null, null, null, false, false, null]],
        '/partenaire' => [[['_route' => 'app_partenaire', '_controller' => 'App\\Controller\\PartenaireController::index'], null, null, null, false, false, null]],
        '/partenaire/fnew' => [[['_route' => 'app_partenaire_fnew', '_controller' => 'App\\Controller\\PartenaireController::fnew'], null, null, null, false, false, null]],
        '/afficherpart' => [[['_route' => 'app_partenaire1', '_controller' => 'App\\Controller\\PartenaireController::index3'], null, null, null, false, false, null]],
        '/backend' => [[['_route' => 'app_back', '_controller' => 'App\\Controller\\PartenaireController::indexback'], null, null, null, false, false, null]],
        '/afficherpartback' => [[['_route' => 'app_partenaire_back1', '_controller' => 'App\\Controller\\PartenaireController::indexx'], null, null, null, false, false, null]],
        '/partenaireback/fnew' => [[['_route' => 'app_partenaireback_fnew', '_controller' => 'App\\Controller\\PartenaireController::fnew2'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'homeOn', '_controller' => 'App\\Controller\\SecurityController::homeOn'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/succes' => [[['_route' => 'app_succes', '_controller' => 'App\\Controller\\SuccesController::index1'], null, null, null, false, false, null]],
        '/succes/index' => [[['_route' => 'app_succes_index', '_controller' => 'App\\Controller\\SuccesController::index'], null, null, null, false, false, null]],
        '/succes/new' => [[['_route' => 'app_succes_new', '_controller' => 'App\\Controller\\SuccesController::fnew'], null, null, null, false, false, null]],
        '/succes/back' => [[['_route' => 'app_succes_back', '_controller' => 'App\\Controller\\SuccesController::index3'], null, null, null, false, false, null]],
        '/succes/affback' => [[['_route' => 'app_succes_index_back', '_controller' => 'App\\Controller\\SuccesController::index2'], null, null, null, false, false, null]],
        '/succes/newback' => [[['_route' => 'app_succes_new_back', '_controller' => 'App\\Controller\\SuccesController::fnewB'], null, null, null, false, false, null]],
        '/taches' => [[['_route' => 'app_taches', '_controller' => 'App\\Controller\\TachesController::index1'], null, null, null, false, false, null]],
        '/taches/index' => [[['_route' => 'app_taches_index', '_controller' => 'App\\Controller\\TachesController::index'], null, null, null, false, false, null]],
        '/taches/new' => [[['_route' => 'app_taches_new', '_controller' => 'App\\Controller\\TachesController::fnew'], null, null, null, false, false, null]],
        '/taches/affback' => [[['_route' => 'app_taches_index_back', '_controller' => 'App\\Controller\\TachesController::index2'], null, null, null, false, false, null]],
        '/taches/newback' => [[['_route' => 'app_taches_new_back', '_controller' => 'App\\Controller\\TachesController::fnewB'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'app_user', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/user/fnew' => [[['_route' => 'app_user_fnew', '_controller' => 'App\\Controller\\UserController::fnew'], null, null, null, false, false, null]],
        '/afficheruser' => [[['_route' => 'app_user1', '_controller' => 'App\\Controller\\UserController::index3'], null, null, null, false, false, null]],
        '/taches/favorites' => [[['_route' => 'app_taches_favorites', '_controller' => 'App\\Controller\\TachesController::favorites'], null, ['GET' => 0], null, false, false, null]],
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
                .'|/offre/delete/([^/]++)(*:191)'
                .'|/edit(?'
                    .'|offre(?'
                        .'|/([^/]++)(*:224)'
                        .'|back/([^/]++)(*:245)'
                    .')'
                    .'|part(?'
                        .'|/([^/]++)(*:270)'
                        .'|back/([^/]++)(*:291)'
                    .')'
                .')'
                .'|/back/delete(?'
                    .'|offre/([^/]++)(*:330)'
                    .'|part/([^/]++)(*:351)'
                .')'
                .'|/partenaire/delete/([^/]++)(*:387)'
                .'|/succes/(?'
                    .'|edit(?'
                        .'|/([^/]++)(*:422)'
                        .'|back/([^/]++)(*:443)'
                    .')'
                    .'|delete(?'
                        .'|/([^/]++)(*:470)'
                        .'|back/([^/]++)(*:491)'
                    .')'
                .')'
                .'|/taches/(?'
                    .'|edit(?'
                        .'|/([^/]++)(*:528)'
                        .'|back/([^/]++)(*:549)'
                    .')'
                    .'|delete(?'
                        .'|/([^/]++)(*:576)'
                        .'|back/([^/]++)(*:597)'
                    .')'
                .')'
                .'|/marquer\\-favoris/([^/]++)(*:633)'
                .'|/retirer\\-favoris/([^/]++)(*:667)'
                .'|/user/(?'
                    .'|fedit/([^/]++)(*:698)'
                    .'|delete/([^/]++)(*:721)'
                .')'
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
        191 => [[['_route' => 'app_offre_delete', '_controller' => 'App\\Controller\\OffreController::delete'], ['id'], null, null, false, true, null]],
        224 => [[['_route' => 'app_offre_fedit', '_controller' => 'App\\Controller\\OffreController::fedit'], ['id'], null, null, false, true, null]],
        245 => [[['_route' => 'app_offreback_fedit', '_controller' => 'App\\Controller\\OffreController::fedit2'], ['id'], null, null, false, true, null]],
        270 => [[['_route' => 'app_part_fedit', '_controller' => 'App\\Controller\\PartenaireController::fedit'], ['id'], null, null, false, true, null]],
        291 => [[['_route' => 'app_partback_fedit', '_controller' => 'App\\Controller\\PartenaireController::fedit2'], ['id'], null, null, false, true, null]],
        330 => [[['_route' => 'app_offreback_delete', '_controller' => 'App\\Controller\\OffreController::delete2'], ['id'], null, null, false, true, null]],
        351 => [[['_route' => 'app_partenaireback_delete', '_controller' => 'App\\Controller\\PartenaireController::delete2'], ['id'], null, null, false, true, null]],
        387 => [[['_route' => 'app_partenaire_delete', '_controller' => 'App\\Controller\\PartenaireController::delete'], ['id'], null, null, false, true, null]],
        422 => [[['_route' => 'app_succes_edit', '_controller' => 'App\\Controller\\SuccesController::edit'], ['id'], null, null, false, true, null]],
        443 => [[['_route' => 'app_succes_edit_back', '_controller' => 'App\\Controller\\SuccesController::editB'], ['id'], null, null, false, true, null]],
        470 => [[['_route' => 'app_succes_delete', '_controller' => 'App\\Controller\\SuccesController::delete'], ['id'], null, null, false, true, null]],
        491 => [[['_route' => 'app_succes_delete_back', '_controller' => 'App\\Controller\\SuccesController::deleteB'], ['id'], null, null, false, true, null]],
        528 => [[['_route' => 'app_taches_edit', '_controller' => 'App\\Controller\\TachesController::edit'], ['id'], null, null, false, true, null]],
        549 => [[['_route' => 'app_taches_edit_back', '_controller' => 'App\\Controller\\TachesController::editB'], ['id'], null, null, false, true, null]],
        576 => [[['_route' => 'app_taches_delete', '_controller' => 'App\\Controller\\TachesController::delete'], ['id'], null, null, false, true, null]],
        597 => [[['_route' => 'app_taches_delete_back', '_controller' => 'App\\Controller\\TachesController::deleteB'], ['id'], null, null, false, true, null]],
        633 => [[['_route' => 'app_marquer_favoris', '_controller' => 'App\\Controller\\TachesController::marquerFavoris'], ['id'], null, null, false, true, null]],
        667 => [[['_route' => 'app_retirer_favoris', '_controller' => 'App\\Controller\\TachesController::retirerFavoris'], ['id'], null, null, false, true, null]],
        698 => [[['_route' => 'app_user_fedit', '_controller' => 'App\\Controller\\UserController::fedit'], ['id'], null, null, false, true, null]],
        721 => [
            [['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
