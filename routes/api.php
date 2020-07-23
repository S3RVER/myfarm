<?php

use Illuminate\Support\Facades\Route;


Route::get('/getFaq','ItemController@getFaq');
Route::get('/getAllGeneralTips','ItemController@getAllGeneralTips');
Route::get('/getCitrusGeneralTips','ItemController@getCitrusGeneralTips');
Route::get('/getCropGeneralTips','ItemController@getCropGeneralTips');
Route::get('/getGeneralTipItemById/{item_id}','ItemController@getGeneralTipItemById');

Route::get('/getProductsAllDiseases','ItemController@getProductsAllDiseases');
Route::get('/getProductsDiseases1Cat/{product_id}','ItemController@getProductsDiseases1Cat');
Route::get('/getProductsDiseases2Cat/{product_id}','ItemController@getProductsDiseases1Cat');
Route::get('/getProductsDiseases3Cat/{product_id}','ItemController@getProductsDiseases1Cat');
Route::get('/getProductsDiseases4Cat/{product_id}','ItemController@getProductsDiseases1Cat');
Route::get('/getDiseaseItem/{product_id}','ItemController@getDiseaseItem');

Route::post('/citrusRecommendation', 'CitrusRecommendationController@calculate');
Route::get('/getCrops', 'CropRecommendationController@getCrops');
Route::post('/cropsRecommendation', 'CropsRecommendationController@calculate');

Route::get('/getMarketCategories', 'MarketController@getMarketCategories');
Route::get('/getMarketProductsByCategoryId/{category_id}', 'MarketController@getMarketProductsByCategoryId');
Route::post('/addProductToCart', 'MarketController@addProductToCart');
Route::post('/changeCartProductCount', 'MarketController@changeCartProductCount');
Route::get('/getCart', 'MarketController@getCart');
Route::get('/getAddresses', 'MarketController@getAddresses');
Route::get('/getAddressById/{address_id}', 'MarketController@getAddressById');
Route::post('/addAddress', 'MarketController@addAddress');
Route::post('/createInvoice', 'MarketController@createInvoice');
Route::get('/getInvoices', 'MarketController@getInvoices');
Route::get('/getInvoiceById/{invoice_id}', 'MarketController@getInvoiceById');
