<?php

Route::get('/', 'PagesController@index')->name('pages.root');

Route::resource('products', 'ProductsController');

Route::resource('category', 'CategoryController', ['only' => ['create', 'store', 'show', 'destroy']]);

