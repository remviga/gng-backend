<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::post('/login', 'AuthController@login');

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});

Route::prefix('{language}')->group(function () {
    Route::get('phrases', 'Api\MainPhraseController@index');
    Route::get('phrases/{id}', 'Api\MainPhraseController@show');

    Route::get('about-info', 'Api\AboutInfoController@index');
    Route::get('about-info/{id}', 'Api\AboutInfoController@show');

    Route::get('drink-types', 'Api\AboutInfoController@index');
    Route::get('drink-types/{slug}', 'Api\AboutInfoController@show');

    Route::get('locations', 'Api\AboutInfoController@index');
    Route::get('locations/{id}', 'Api\AboutInfoController@show');

    Route::get('accessories', 'Api\AboutInfoController@index');
    Route::get('accessories/{id}', 'Api\AboutInfoController@show');

    Route::get('assistants', 'Api\AboutInfoController@index');
    Route::get('assistants/{id}', 'Api\AboutInfoController@show');

    Route::get('assistant-phrases', 'Api\AboutInfoController@index');
    Route::get('assistant-phrases/{id}', 'Api\AboutInfoController@show');
    Route::get('assistant-phrases-specified/{assistantId}', 'Api\AboutInfoController@getByAssistant');

    Route::get('products', 'Api\ProductController@index');
    Route::get('products/{id}', 'Api\ProductController@show');

    Route::get('product-categories', 'Api\ProductCategoryController@index');
    Route::get('product-categories/{id}', 'Api\ProductCategoryController@show');

    Route::get('brands', 'Api\BrandController@index');
    Route::get('brands/{id}', 'Api\BrandController@show');

    Route::get('vines', 'Api\VineController@index');
    Route::get('vines/{id}', 'Api\VineController@show');
});
