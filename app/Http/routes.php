<?php

Route::group(['middleware' => 'web'], function () {
    Route::get('/', [
        'as'   => 'index',
        'uses' => 'HomeController@index',
    ]);

    Route::get('/search', [
        'as'   => 'search',
        'uses' => 'CouponsController@index',
    ]);


    Route::get('/view/{slug}', [
        'as'   => 'view',
        'uses' => 'CouponsController@view',
    ]);

    Route::get('/tag/{tag}', [
        'as'   => 'tag',
        'uses' => 'CouponsController@tag',
    ]);

    Route::get('/categories', [
        'as'   => 'categories',
        'uses' => 'CategoriesController@index',
    ]);

    Route::get('/category/{slug?}', [
        'as'   => 'category',
        'uses' => 'CouponsController@category',
    ]);

    Route::get('/stores', [
        'as'   => 'stores',
        'uses' => 'StoresController@index',
    ]);

    Route::get('/store/{slug?}', [
        'as'   => 'store',
        'uses' => 'StoresController@view',
    ]);

//=======AUTH=======//
    Route::get('/root/login', [
        'as'   => 'login',
        'uses' => 'AuthController@login',
    ]);

    Route::post('/root/login', [
        'uses' => 'AuthController@loginPost',
    ]);

    Route::get('/root/logout', [
        'as'   => 'logout',
        'uses' => 'AuthController@logout',
    ]);

//=======ROOT=======//
    Route::group(['prefix' => 'root', 'middleware' => 'auth'], function () {
        Route::get('/', [
            'as'   => 'root-index',
            'uses' => 'Root\DashboardController@index',
            'middleware' => 'roles',
            'roles' => ['user', 'author','admin']
        ]);

        Route::get('/coupons', [
            'as'   => 'root-coupons',
            'uses' => 'Root\CouponsController@index',
            'middleware' => 'roles',
            'roles' => ['user', 'author','admin']
        ]);

        Route::get('/coupons/new', [
            'as'   => 'root-coupons-new',
            'uses' => 'Root\CouponsController@newCoupon',
            'middleware' => 'roles',
            'roles' => ['author','admin']
        ]);

        Route::get('/coupons/edit/{coupon_id}', [
            'as'             => 'root-coupon-edit',
            'uses'           => 'Root\CouponsController@edit',
            'middleware' => 'roles',
            'roles' => ['author','admin']
        ])->where(['coupon_id' => '[0-9]+']);

        Route::post('/coupons/store/{coupon_id?}', [
            'as'             => 'root-coupons-store',
            'uses'           => 'Root\CouponsController@store',
            'middleware' => 'roles',
            'roles' => ['author','admin']
        ])->where(['coupon_id' => '[0-9]+']);

        Route::get('/coupons/pin/{coupon_id}', [
            'as'             => 'root-coupon-pin',
            'uses'           => 'Root\CouponsController@pin',
            'middleware' => 'roles',
            'roles' => ['author','admin']
        ])->where(['coupon_id' => '[0-9]+']);

        Route::get('/coupons/unpin/{coupon_id}', [
            'as'             => 'root-coupon-unpin',
            'uses'           => 'Root\CouponsController@unpin',
            'middleware' => 'roles',
            'roles' => ['author','admin']
        ])->where(['coupon_id' => '[0-9]+']);

        Route::get('/coupons/to-draft/{coupon_id}', [
            'as'             => 'root-coupon-to-draft',
            'uses'           => 'Root\CouponsController@toDraft',
            'middleware' => 'roles',
            'roles' => ['author','admin']
        ])->where(['coupon_id' => '[0-9]+']);

        Route::get('/coupons/to-active/{coupon_id}', [
            'as'             => 'root-coupon-to-active',
            'uses'           => 'Root\CouponsController@toActive',
            'middleware' => 'roles',
            'roles' => ['author','admin']
        ])->where(['coupon_id' => '[0-9]+']);

        Route::get('/coupons/to-deleted/{coupon_id}', [
            'as'             => 'root-coupon-to-deleted',
            'uses'           => 'Root\CouponsController@toDeleted',
            'middleware' => 'roles',
            'roles' => ['author','admin']
        ])->where(['coupon_id' => '[0-9]+']);

        Route::get('/coupons/to-category/{coupon_id}/{category_id}', [
            'as'             => 'root-coupon-to-category',
            'uses'           => 'Root\CouponsController@toCategory',
            'middleware' => 'roles',
            'roles' => ['author','admin']
        ])->where(['coupon_id' => '[0-9]+', 'category_id' => '[0-9]+']);

        //=======CATEGORIES=======//

        Route::get('/categories', [
            'as'   => 'root-categories',
            'uses' => 'Root\CategoriesController@index',
            'middleware' => 'roles',
            'roles' => ['user', 'author','admin']
        ]);

        Route::get('/categories/new', [
            'as'   => 'root-categories-new',
            'uses' => 'Root\CategoriesController@newCategory',
            'middleware' => 'roles',
            'roles' => ['author','admin']
        ]);

        Route::get('/categories/edit/{category_id}', [
            'as'   => 'root-categories-edit',
            'uses' => 'Root\CategoriesController@editCategory',
            'middleware' => 'roles',
            'roles' => ['author','admin']
        ]);

        Route::post('/categories/store/{category_id?}', [
            'as'   => 'root-categories-store',
            'uses' => 'Root\CategoriesController@store',
            'middleware' => 'roles',
            'roles' => ['author','admin']
        ]);

        Route::get('/categories/remove/{category_id}', [
            'as'   => 'root-categories-remove',
            'uses' => 'Root\CategoriesController@remove',
            'middleware' => 'roles',
            'roles' => ['author','admin']
        ]);

        //=======STORES=======//

        Route::get('/stores', [
            'as'   => 'root-stores',
            'uses' => 'Root\StoresController@index',
            'middleware' => 'roles',
            'roles' => ['user', 'author','admin']
        ]);

        Route::get('/stores/new', [
            'as'   => 'root-stores-new',
            'uses' => 'Root\StoresController@newStore',
            'middleware' => 'roles',
            'roles' => ['author','admin']
        ]);

        Route::get('/stores/edit/{store_id}', [
            'as'   => 'root-stores-edit',
            'uses' => 'Root\StoresController@editStore',
            'middleware' => 'roles',
            'roles' => ['author','admin']
        ]);

        Route::post('/stores/store/{store_id?}', [
            'as'   => 'root-stores-store',
            'uses' => 'Root\StoresController@store',
            'middleware' => 'roles',
            'roles' => ['author','admin']
        ]);

        Route::get('/stores/remove/{store_id}', [
            'as'   => 'root-stores-remove',
            'uses' => 'Root\StoresController@remove',
            'middleware' => 'roles',
            'roles' => ['author','admin']
        ]);

        //=======TAGS=======//

        Route::get('/tags', [
            'as'   => 'root-tags',
            'uses' => 'Root\TagsController@index',
            'middleware' => 'roles',
            'roles' => ['user', 'author','admin']
        ]);

        Route::get('/tags/new', [
            'as'   => 'root-tags-new',
            'uses' => 'Root\TagsController@newTag',
            'middleware' => 'roles',
            'roles' => ['author','admin']
        ]);

        Route::get('/tags/edit/{tag_id}', [
            'as'   => 'root-tags-edit',
            'uses' => 'Root\TagsController@editTag',
            'middleware' => 'roles',
            'roles' => ['author','admin']
        ]);

        Route::post('/tags/store/{category_id?}', [
            'as'   => 'root-tags-store',
            'uses' => 'Root\TagsController@store',
            'middleware' => 'roles',
            'roles' => ['author','admin']
        ]);

        Route::get('/tags/clear-orphaned', [
            'as'   => 'root-tags-clear-orphaned',
            'uses' => 'Root\TagsController@clearOrphaned',
            'middleware' => 'roles',
            'roles' => ['author','admin']
        ]);

        Route::get('/tags/remove/{tag_id}', [
            'as'            => 'root-tags-remove',
            'uses'          => 'Root\TagsController@remove',
            'middleware' => 'roles',
            'roles' => ['author','admin']
        ])->where(['tag_id' => '[0-9]+']);

        //=======SETTINGS=======//

        Route::get('/settings', [
            'as'   => 'root-settings',
            'uses' => 'Root\SettingsController@index',
            'middleware' => 'roles',
            'roles' => ['superadmin']
        ]);

        Route::get('/settings/counters', [
            'as'   => 'root-settings-counters',
            'uses' => 'Root\SettingsController@counters',
            'middleware' => 'roles',
            'roles' => ['superadmin']
        ]);

        Route::post('/settings/counters/save', [
            'as'   => 'root-settings-counters-save',
            'uses' => 'Root\SettingsController@countersSave',
            'middleware' => 'roles',
            'roles' => ['superadmin']
        ]);

        Route::get('/settings/robots-txt', [
            'as'   => 'root-settings-robots-txt',
            'uses' => 'Root\SettingsController@robotsTxt',
            'middleware' => 'roles',
            'roles' => ['superadmin']
        ]);

        Route::post('/settings/robots-txt', [
            'as'   => 'root-settings-robots-txt-save',
            'uses' => 'Root\SettingsController@robotsTxtSave',
            'middleware' => 'roles',
            'roles' => ['superadmin']
        ]);

        Route::get('/settings/sitemap', [
            'as'   => 'root-settings-sitemap',
            'uses' => 'Root\SettingsController@sitemap',
            'middleware' => 'roles',
            'roles' => ['superadmin']
        ]);

        Route::post('/settings/sitemap', [
            'as'   => 'root-settings-sitemap-save',
            'uses' => 'Root\SettingsController@sitemapSave',
            'middleware' => 'roles',
            'roles' => ['superadmin']
        ]);

        Route::get('/settings/sitemap/generate', [
            'as'   => 'root-settings-sitemap-generate',
            'uses' => 'Root\SettingsController@sitemapGenerate',
            'middleware' => 'roles',
            'roles' => ['superadmin']
        ]);

        Route::get('/settings/website', [
            'as'   => 'root-settings-website',
            'uses' => 'Root\SettingsController@website',
            'middleware' => 'roles',
            'roles' => ['superadmin']
        ]);

        Route::post('/settings/website', [
            'as'   => 'root-settings-website-save',
            'uses' => 'Root\SettingsController@websiteSave',
            'middleware' => 'roles',
            'roles' => ['superadmin']
        ]);

        Route::get('/settings/appearance', [
            'as'   => 'root-settings-appearance',
            'uses' => 'Root\SettingsController@appearance',
            'middleware' => 'roles',
            'roles' => ['superadmin']
        ]);

        Route::post('/settings/appearance', [
            'as'   => 'root-settings-appearance-save',
            'uses' => 'Root\SettingsController@appearanceSave',
            'middleware' => 'roles',
            'roles' => ['superadmin']
        ]);

        Route::post('/settings/css', [
            'as'   => 'root-settings-css-save',
            'uses' => 'Root\SettingsController@cssSave',
            'middleware' => 'roles',
            'roles' => ['superadmin']
        ]);

        Route::get('/settings/social', [
            'as'   => 'root-settings-social',
            'uses' => 'Root\SettingsController@social',
            'middleware' => 'roles',
            'roles' => ['superadmin']
        ]);

        Route::post('/settings/social', [
            'as'   => 'root-settings-social-save',
            'uses' => 'Root\SettingsController@socialSave',
            'middleware' => 'roles',
            'roles' => ['superadmin']
        ]);

        Route::post('/settings/social-links', [
            'as'   => 'root-settings-social-links-save',
            'uses' => 'Root\SettingsController@socialLinksSave',
            'middleware' => 'roles',
            'roles' => ['superadmin']
        ]);

        Route::get('/settings/social-links/{index}/delete', [
            'as'   => 'root-settings-social-links-delete',
            'uses' => 'Root\SettingsController@socialLinksDelete',
            'middleware' => 'roles',
            'roles' => ['superadmin']
        ]);

        //=======USERS=======//

        Route::get('/users', [
            'as'   => 'root-users',
            'uses' => 'Root\UsersController@index',
            'middleware' => 'roles',
            'roles' => ['admin']
        ]);

        Route::get('/users/add', [
            'as'   => 'root-users-new',
            'uses' => 'Root\UsersController@add',
            'middleware' => 'roles',
            'roles' => ['superadmin']
        ]);

        Route::get('/users/edit/{user_id}', [
            'as'             => 'root-users-edit',
            'uses'           => 'Root\UsersController@edit',
            'middleware' => 'roles',
            'roles' => ['superadmin']
        ])->where(['user_id' => '[0-9]+']);

        Route::post('/users/save/{user_id?}', [
            'as'             => 'root-users-save',
            'uses'           => 'Root\UsersController@store',
            'middleware' => 'roles',
            'roles' => ['superadmin']
        ])->where(['user_id' => '[0-9]+']);

//=======MENU=======//

        Route::get('/menu', [
            'as'   => 'root-menu',
            'uses' => 'Root\MenuController@index',
            'middleware' => 'roles',
            'roles' => ['superadmin']
        ]);

        Route::post('/menu', [
            'as'   => 'root-menu-save',
            'uses' => 'Root\MenuController@store',
            'middleware' => 'roles',
            'roles' => ['superadmin']
        ]);

        Route::get('/menu/remove/{menu_id}', [
            'as'             => 'root-menu-remove',
            'uses'           => 'Root\MenuController@remove',
            'middleware' => 'roles',
            'roles' => ['superadmin']
        ])->where(['menu_id' => '[0-9]+']);

        Route::get('/menu/up/{menu_id}', [
            'as'             => 'root-menu-up',
            'uses'           => 'Root\MenuController@up',
            'middleware' => 'roles',
            'roles' => ['superadmin']
        ])->where(['menu_id' => '[0-9]+']);

        Route::get('/menu/down/{menu_id}', [
            'as'             => 'root-menu-down',
            'uses'           => 'Root\MenuController@down',
            'middleware' => 'roles',
            'roles' => ['superadmin']
        ])->where(['menu_id' => '[0-9]+']);

//=======FILES=======//

        Route::any('/upload-image-ajax', [
            'as'   => 'root-upload-image-ajax',
            'uses' => 'Root\FilesController@uploadImageAjax',
            'middleware' => 'roles',
            'roles' => ['author', 'admin']
        ]);

//=======STATIC PAGES=======//

        Route::get('/{page_name}', [
            'as'               => 'static-page',
            'uses'             => 'PagesController@view',
        ])->where(['page_name' => '[A-z0-9-_]+']);
    });

    Route::get('/{page_name}', [
        'as'               => 'static-page',
        'uses'             => 'PagesController@view',
    ])->where(['page_name' => '[A-z0-9-_]+']);
});
