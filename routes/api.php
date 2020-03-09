<?php
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::namespace('Api')->prefix('v1')->group(function (){
    Route::get('/category', 'ProductController@getCategoryData');
    Route::get('/products', 'ProductController@getProductsData');
    Route::get('/product', 'ProductController@index');
    Route::get('/product/{id}', 'ProductController@getProductData');
    
    Route::get('/packages/{id}', 'ProductController@getPackagesData');

    Route::resource('/faq', 'FaqController');

    Route::resource('/customer', 'CustomerController',[
        'except' => ['create']
    ]);
    Route::get('client', 'CustomerController@client');

    Route::resource('invoice', 'InvoiceController');

    // 专门建立一个API接口, 拿到完整的模型
    Route::get('invoices/{invoice}', 'InvoiceController@getInvoiceData');

    Route::resource('transaction', 'TransactionController', [
        'except' => 'create'
    ]);
    Route::resource('shipment', 'ShipmentController',[
        'except' => 'create'
    ]);
});

Route::group(
    [
        'prefix' => 'v1',
        'namespace' => 'Api',
    ], function() {
        Route::get('test', 'InvoiceController@test');
    }
);