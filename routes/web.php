<?php
// email direct marketing
Route::get('edm/france', 'EmailController@index');
// test view renderong result
Route::get('mailable', function() {
    return new App\Mail\AppBathroomScale;
});

Route::namespace('Api')->prefix('api/v1')->group(function(){
    Route::post('/login', 'ApiController@login');
    Route::post('/logout', 'ApiController@logout')->middleware('auth:api');
});

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

// favorite asked questions routes
Route::resource('faq', 'FaqController');
// Route::get('login/{account}', 'OauthUserController@redirectToProvider')->name('login.account');
// Route::get('login/{account}/callback', 'OauthUserController@handleProviderCallback')->name('login.account.callback');

Route::get('/home', 'HomeController@index')->name('home');


