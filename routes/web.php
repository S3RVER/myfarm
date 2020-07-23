<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::middleware(['auth','checkPermission'])->group(function () {
    Route::get('/','HomeController@index')->name('home');

    Route::resource('market-categories', 'MarketCategoryController');
    Route::resource('market-products', 'MarketProductController');
    Route::resource('diseases.items', 'DiseaseItemController');
    Route::resource('general-tips', 'GeneralTipController');
    Route::resource('personnel', 'PersonnelController');
    Route::resource('diseases', 'DiseaseCategoryController');
    Route::resource('invoices', 'InvoiceController');
    Route::resource('users', 'UsersController');
    Route::resource('crops', 'CropController');
    Route::resource('rbac', 'RolesController');
    Route::resource('faq', 'FaqController');

    Route::get('citrus-recommendations', 'CitrusComputationalRecommendationsController@index')->name('citrus_c_r.index');
    Route::get('citrus-recommendations/edit', 'CitrusComputationalRecommendationsController@edit')->name('citrus_c_r.edit');
    Route::put('citrus-recommendations/edit', 'CitrusComputationalRecommendationsController@update')->name('citrus_c_r.update');
    Route::post('citrus-recommendations', 'CitrusComputationalRecommendationsController@calculate')->name('citrus_c_r_.calculate');

    Route::get('crops/{crop}/recommendations', 'CropComputationalRecommendationsController@index')->name('crops.recommendations.index');
    Route::get('crops/{crop}/recommendations/edit', 'CropComputationalRecommendationsController@edit')->name('crops.recommendations.edit');
    Route::post('crops/{crop}/recommendations/edit', 'CropComputationalRecommendationsController@store')->name('crops.recommendations.store');
    Route::put('crops/{crop}/recommendations/edit', 'CropComputationalRecommendationsController@update')->name('crops.recommendations.update');
    Route::post('crops/{crop}/recommendations', 'CropComputationalRecommendationsController@calculate')->name('crops.recommendations.calculate');
    Route::post('crops/{crop}', 'CropComputationalRecommendationsController@destroy')->name('crops.recommendations.destroy');

});
