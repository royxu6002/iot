<?php

// test folder & vue-book folder
// test new layout for masonary
// Route::get('app-kitchen-scale',function(){
//     return view('pages.root2');
// });
Route::get('vue', function() {
    return view('vue.interval');
});
Route::get('shop', function(){
    return view('vue.index');
});
Route::get('component', function(){
    return view('vue.component');
});

Route::get('customers', 'CustomersController@index')->name('customers.index');
Route::get('customers/create', 'CustomersController@create')->name('customers.create');
Route::post('customers', 'CustomersController@store')->name('customers.store');
Route::get('customers/{customer}', 'CustomersController@show')->name('customers.show');
Route::get('customers/{customer}/edit', 'CustomersController@edit')->name('customers.edit');
Route::put('customers/{customer}', 'CustomersController@save')->name('customers.update');
Route::delete('customers/{customer}', 'CustomersController@destroy')->name('customers.destroy');

//email marketing
Route::get('marketing1', function () {
    return view('customers.marketing1');
});

//invoice
Route::resource('invoices', 'InvoiceController');

//test
Route::get('test', function() {
    return view('test-table');
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
Route::get('login/{account}', 'OauthUserController@redirectToProvider')->name('login.account');
Route::get('login/{account}/callback', 'OauthUserController@handleProviderCallback')->name('login.account.callback');
Route::get('/home', 'HomeController@index')->name('home');
