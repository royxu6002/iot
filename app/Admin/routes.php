<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('admin.home');
    $router->get('/clients', 'UserController@index');
    $router->resource('/products', 'ProductsController');
    $router->resource('/categories', 'CategoriesController');
    $router->resource('/blogs', 'BlogsController');
    $router->resource('/tags', 'TagsController');
});
