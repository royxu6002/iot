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
// api-token 认证
Route::namespace('Api')->prefix('v1')->group(function(){
    Route::post('/login', 'ApiController@login');
    Route::post('/logout', 'ApiController@logout')->middleware('auth:api');
});


Route::middleware('auth:api')->namespace('Api')->prefix('v1')->group(function (){
    
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
        // Route::get('storage_path', function(){
        //     dd(storage_path('app/public'));
        // });
    }
);

// 暂时不加 token 权限认证, 方便测试;
Route::group(
    [
        'prefix' => 'v1',
        'namespace' => 'Api',
        // 'middleware' => 'auth:api'
    ], function() {
        Route::resource('stock', 'StockController', [
            'except' => 'create',
        ]);
        Route::resource('upload', 'UploadController', [
            'only' => ['store', 'destroy']
        ]);
        Route::resource('file', 'FileController', [
            'only' => ['store', 'destroy']
        ]);
        Route::resource('group', 'GroupController', [
            'except' => ['create', 'edit']
        ]);

        // 客户分类标签, 多对多 sync() 和 detatch();
        Route::post('customer/{customer}/dye/{id}', 'CustomerController@dye');
        Route::delete('customer/{customer}/bleach/{id}', 'CustomerController@bleach');
    }
);
