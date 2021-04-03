<?php
// api-token 认证
Route::namespace('Api')->prefix('v1')->group(function(){
    Route::post('/login', 'ApiController@login');
    Route::post('/logout', 'ApiController@logout')->middleware('auth:api');
    //拿到所有产品的库存数据;
    Route::get('/products/stocks', 'ProductController@getStocksData');
});

Route::middleware('auth:api')->namespace('Api')->prefix('v1')->group(function (){
    Route::get('/packages/{id}', 'ProductController@getPackagesData');
    Route::resource('/faq', 'FaqController');
    Route::resource('/customer', 'CustomerController',[
        'except' => ['create']
    ]);
    Route::get('client', 'CustomerController@client');
});

Route::group(
    [
        'prefix' => 'v1',
        'namespace' => 'Api',
        'middleware' => 'auth:api'
    ], function() {
        Route::get('/category', 'ProductController@getCategoryData');
        Route::get('/products', 'ProductController@getProductsData');
        Route::get('/product', 'ProductController@index');
        Route::get('/product/{id}', 'ProductController@getProductData');

        //股票数据
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

        // 客户分类标签, 多对多 sync() 和 detach();
        Route::post('customer/{customer}/dye/{id}', 'CustomerController@dye');
        Route::delete('customer/{customer}/bleach/{id}', 'CustomerController@bleach');
        Route::get('customer/{customer}/groupids', 'CustomerController@getGroupIds');

        // 取到单个分类下的所有客户;
        Route::get('group/{group}/customers', 'GroupController@getCustomers');

        // 拿到 $invoice->purchase 下所有供应商 ids 集合数据;
        Route::get('invoice/{invoice}/supplierids', 'InvoiceController@getUniqueIds');

        // 创建 invoice 下多个 purchase 订单;
        Route::post('invoice/{invoice}/purchases', 'InvoiceController@purchasesStore');
        Route::put('invoice/{invoice}/purchases', 'InvoiceController@purchasesUpdate');
        // Route::get('invoice/{invoice}/purchases/suppliers/{supplier}', 'InvoiceController@purchasesShow');
        // Route::get('invoice/{invoice}/supplier/{supplier}/purchases', 'InvoiceController@getOneSupplierPurchases');

        Route::resource('invoice', 'InvoiceController');

        // 复制 Invoice 模型(包含产品)
        Route::get('invoice/{invoice}/duplicate', 'InvoiceController@duplicate');

        Route::resource('supplier', 'SupplierController');

        // Supplier 和 Product 模型关系
        Route::post('supplier/{supplier}/dye', 'SupplierController@dye');
        Route::delete('supplier/{supplier}/bleach/{id}', 'SupplierController@bleach');

        // 拿到 supplier product_id
        Route::get('supplier/{supplier}/productids', 'SupplierController@selectId');

        // 专门建立一个API接口, 拿到完整的模型
        Route::get('invoices/{invoice}', 'InvoiceController@getInvoiceData');

        Route::get('purchase/index', 'PurchaseController@index');

        Route::resource('transaction', 'TransactionController', [
            'except' => 'create'
        ]);
        Route::resource('shipment', 'ShipmentController',[
            'except' => 'create'
        ]);
    }
);
