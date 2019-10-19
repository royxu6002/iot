<?php

Route::resource('test','TestController');

Route::get('t', function() {
    return view('test.test');
});
Route::get('t2', function() {
    return view('test.test2');
});
Route::get('vue', function() {
    return view('test.vue2');
});


Route::get('/', 'PagesController@index')->name('root');

Route::get('about', 'PagesController@about')->name('about');

Route::resource('blog', 'BlogsController');


// Route::post('products/upload', 'ProductsController@uploadImage')->name('products.upload_image');

Route::resource('products', 'ProductsController');

Route::resource('category', 'CategoryController', ['only' => ['create', 'store', 'show', 'destroy']]);

