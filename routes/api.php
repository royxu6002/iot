<?php

use Illuminate\Http\Request;
use App\Http\Resources\Customer as CustomerResource;
use App\Http\Resources\Product as ProductResource;
use App\Models\Product;
use App\Http\Resources\CategoryCollection;
use App\Models\Category;
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
Route::namespace('api')->prefix('v1')->group(function (){
    Route::get('/category', 'ProductController@getCategoryData');
    Route::get('/products', 'ProductController@getProductsData');
    Route::get('/product/{id}', 'ProductController@getProductData');
    Route::resource('/faq', 'FaqController');
    Route::resource('/customer', 'CustomerController');
});

Route::group(
    [
        'prefix' => 'v2',
        'namespace' => 'api',
    ], function() {
        Route::get('product', 'ProductController@index');
        Route::get('product/{product}', 'ProductController@show');
        Route::get('category', function() {
            return new CategoryCollection(Category::all);
        });
    }
);


