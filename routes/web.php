<?php
Route::get('filter', function(){
    return view('vue.filter');
});

Route::get('customers', 'CustomersController@index')->name('customers.index');
// Route::post('customers', 'CustomersController@store')->name('customers.store');
// Route::get('customers/{customer}', 'CustomersController@show')->name('customers.show');
// Route::get('customers/{customer}/edit', 'CustomersController@edit')->name('customers.edit');
// Route::put('customers/{customer}', 'CustomersController@save')->name('customers.update');
// Route::delete('customers/{customer}', 'CustomersController@destroy')->name('customers.destroy');


Route::get('/', 'PagesController@index')->name('root');
Route::post('/', 'ProductsController@search')->name('products.search');
Route::get('about', 'PagesController@about')->name('about');
Route::get('contact', 'PagesController@contact')->name('contact');
Route::get('blogs', 'BlogsController@index')->name('blogs.index');
Route::get('blogs/{blog}','BlogsController@show')->name('blogs.show');
Route::post('comment', 'CommentController@store')->name('comment.post');
Route::post('reply', 'BlogsController@reply')->name('comment.reply');
Route::post('enquiry', 'EnquiryController@store')->name('enquiry.store');
Route::post('subscribe', 'SubscribesController@store')->name('subscribe.store');
Route::resource('tags','TagsController', ['only' => ['show']]);
// Route::post('products/upload', 'ProductsController@uploadImage')->name('products.upload_image');
Route::resource('products', 'ProductsController');
Route::resource('category', 'CategoryController', ['only' => ['create', 'store', 'show', 'destroy']]);
Auth::routes();
Route::get('login/{account}', 'OauthUserController@redirectToProvider')->name('login.account');
Route::get('login/{account}/callback', 'OauthUserController@handleProviderCallback')->name('login.account.callback');
Route::get('/home', 'HomeController@index')->name('home');

// favorite asked questions routes
Route::resource('faq', 'FaqController');