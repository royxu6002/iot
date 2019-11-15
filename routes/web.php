<?php

// test new layout for masonary
Route::get('test',function(){
    return view('pages.test');
});
Route::get('vue', function() {
    return view('test.axios');
});



Route::get('/', 'PagesController@index')->name('root');
Route::post('/', 'ProductsController@search')->name('products.search');
Route::get('about', 'PagesController@about')->name('about');
Route::get('contact', 'PagesController@contact')->name('contact');

Route::get('blogs', 'BlogsController@index')->name('blogs.index');
Route::get('blogs/{blog}','BlogsController@show')->name('blogs.show');
// Route::resource('blogs', 'BlogsController', ['only'=>['index', 'show']]);
Route::post('comment', 'CommentController@store')->name('comment.post');
Route::post('reply', 'BlogsController@reply')->name('comment.reply');

Route::resource('tags','TagsController', ['only' => ['show']]);

// Route::post('products/upload', 'ProductsController@uploadImage')->name('products.upload_image');

Route::resource('products', 'ProductsController');
Route::resource('category', 'CategoryController', ['only' => ['create', 'store', 'show', 'destroy']]);

Auth::routes();
Route::get('login/{account}', 'OauthUserController@redirectToProvider')->name('login.account');
Route::get('login/{account}/callback', 'OauthUserController@handleProviderCallback')->name('login.account.callback');
